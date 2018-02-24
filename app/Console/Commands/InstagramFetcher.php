<?php

namespace App\Console\Commands;

use App\Album;
use App\Photo;
use App\Services\Instagram\Instagram;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;

class InstagramFetcher extends Command
{
	/**
	 * Instagram
	 * 
	 * @var object
	 */
	protected $instagram;
	
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'instagram:fetch';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fetch data from instagram';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(Instagram $instagram)
	{
		parent::__construct();

		$this->instagram = $instagram;
	}

	/**
	 * Guess grabbed image extension
	 * 
	 * @param  string $mime
	 * @return string
	 */
	protected function guessExt(string $mime) : string
    {
        $guesser = ExtensionGuesser::getInstance();
        return $guesser->guess($mime);
    }

    /**
     * Make proper path to store grabbed image
     * 
     * @param  string $hash
     * @param  string $size
     * @param  string $ext
     * @return string
     */
    protected function makePath(string $hash, string $size, string $ext) : string
    {
    	return "photos/{$hash}_{$size}.{$ext}";
    }

    /**
     * Store photos to disk
     * 
     * @param  string $url
     * @return array
     */
    protected function makePhotos(string $url) : array
    {
		$photo = Image::make($url);

		// Intervention image backup is expensive and don't pull data from Instagram again.
		$thumb = $photo;

    	$time = now()->format('YmdHis');
    	$hash = hash('md5', $time . $url);
    	$extension = $this->guessExt($photo->mime());
    	$lgPath = $this->makePath($hash, 'lg', $extension);
    	Storage::disk('public')->put($lgPath, (string)$photo->encode());
    	$photo->fit(640, 396, function ($constraint) {
    		$constraint->upsize();
		});
    	$mdPath = $this->makePath($hash, 'md', $extension);
    	Storage::disk('public')->put($mdPath, (string)$photo->encode());
    	$thumb->fit(237, 147, function ($constraint) {
    		$constraint->upsize();
		});
    	$smPath = $this->makePath($hash, 'sm', $extension);
    	Storage::disk('public')->put($smPath, (string)$thumb->encode());

    	return ['small' => $smPath, 'medium' => $mdPath, 'large' => $lgPath];
    }

    /**
     * Find album ids
     * 
     * @param  array  $tags
     * @return int
     */
    protected function findAlbum(array $tags) : int
    {
    	if (in_array('kamioni', $tags)) 
    		return 2;
    	else if (in_array('oprema', $tags))
    		return 3;

    	return 1;
    }

    /**
     * Forget cached photos
     * 
     * @param  string $key
     * @return void
     */
    protected function forgetCache($key)
    {
    	if (Cache::has($key))
    		Cache::forget($key);
    }

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$response = $this->instagram->getMediasByTag('chip_tuning_rs');

		if ($response['meta']['code'] == 200)
		{
			$photo = Photo::latest()->first();

			if (is_null($photo))
			{
				foreach (array_reverse($response['data']) as $value)
				{
					$album = Album::find($this->findAlbum($value['tags']));
					$album->photos()->create(array_merge([
							'title' => trim(strtok($value['caption']['text'], "\n")),
							'created_at' => (int)$value['created_time']
						], 
						$this->makePhotos($value['images']['standard_resolution']['url'])
						)
					);
				}

				$this->forgetCache('photos');
			}
			else
			{
				if ($photo->created_at->timestamp < (int)$response['data'][0]['created_time'])
				{
					foreach (array_reverse($response['data']) as $value)
					{
						if ($photo->created_at->timestamp < (int)$value['created_time'])
						{
							$album = Album::find($this->findAlbum($value['tags']));
							$album->photos()->create(array_merge([
									'title' => trim(strtok($value['caption']['text'], "\n")),
									'created_at' => (int)$value['created_time']
								], 
								$this->makePhotos($value['images']['standard_resolution']['url'])
								)
							);
						}
					}

					$this->forgetCache('photos');
				}
			}
		}
	}
}
