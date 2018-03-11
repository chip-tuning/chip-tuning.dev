<?php

namespace App\Console\Commands;

use Facebook\Facebook;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use App\Testimonial;

class FacebookFetcher extends Command
{
    /**
     * Facebook SDK
     * 
     * @var Facebook
     */
    protected $facebook;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'facebook:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch ratings from facebook';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Facebook $facebook)
    {
        parent::__construct();

        $this->facebook = $facebook;
    }

    protected function getReviews() : array
    {
        try {
            $response = $this->facebook->get('1811549782495067/ratings?fields=created_time,has_rating,has_review,rating,review_text,reviewer');
        } 
        catch(Facebook\Exceptions\FacebookResponseException $e) {
            Log::error('Facebook Graph returned an error: ' . $e->getMessage());
            exit;
        } 
        catch(Facebook\Exceptions\FacebookSDKException $e) {
            Log::error('Facebook SDK returned an error: ' . $e->getMessage());
            exit;
        }

        return json_decode($response->getBody(), true);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $testimonial = Testimonial::latest()->first();

        if (is_null($testimonial))
        {
            foreach (array_reverse($this->getReviews()['data']) as $review)
            {
                if ($review['has_rating'] && $review['has_review'])
                {
                    $review = [
                        'content' => $review['review_text'],
                        'stars' => $review['rating'],
                        'author' => $review['reviewer']['name'],
                        'created_at' => Carbon::parse($review['created_time'])->timestamp,
                    ];    

                    $testimonial = Testimonial::create($review);
                }
            }
        }
        elseif ($testimonial->created_at->timestamp < Carbon::parse($this->getReviews()['data'][0]['created_time'])->timestamp) 
        {
            foreach (array_reverse($this->getReviews()['data']) as $review)
            {
                if ($testimonial->created_at->timestamp < Carbon::parse($review['created_time'])->timestamp)
                {
                    if ($review['has_rating'] && $review['has_review'])
                    {
                        $review = [
                            'content' => $review['review_text'],
                            'stars' => $review['rating'],
                            'author' => $review['reviewer']['name'],
                            'created_at' => Carbon::parse($review['created_time'])->timestamp,
                        ];    

                        $testimonial = Testimonial::create($review);
                    }
                }
            }
        }
    }
}
