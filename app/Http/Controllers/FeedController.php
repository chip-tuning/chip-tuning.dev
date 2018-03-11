<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class FeedController extends Controller
{
	/**
	 * Display a atom feed.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function atom()
	{
		$url = parse_url(request()->url());

		$articles = Cache::rememberForever('feed-atom', function() {    
			return Article::select(['title', 'slug', 'summary', 'published_at'])
				->latest('published_at')
				->take(15)
				->get();
		});
	
		$data = [
			'id' => "tag:" . preg_replace('/^(www\.)/i', '', $url['host']) . ",",
			'feed' => date('Y') . ":" . $url['path'],
			'updated' => Carbon::now()->toAtomString(),
			'articles' => $articles
		];

		return response()
			->view('feeds.atom', $data, 200)
			->header('Content-Type', 'application/atom+xml; charset=UTF-8');
	}

	/**
	 * Display a json feed.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function json()
	{

		$articles = Cache::rememberForever('feed-json', function() {    
			return Article::with(['tags:name'])->latest('published_at')->get(); 
		});		

		$data = [
			'version' => "https://jsonfeed.org/version/1",
			'title' => config('app.name'),
			'home_page_url' => config('app.url'),
			'feed_url' => request()->url(),
			'icon' => asset('apple-icon-180x180.png'),
			'favicon' => asset('favicon-96x96.png'),
			'author' => [
				'name' => config('app.name'),
				'url' => config('app.url'),
			]
		];

		foreach ($articles as $key => $article)
		{
			$data['items'][$key] = [
				'id' => hash('adler32', "rpct-{$article->id}"),
				'title' => $article->title,
				'url' => route('blog.show', $article->slug),
				'image' => Storage::disk('public')->url($article->picture),
				'content_html' => $article->summary,
				'date_published' => $article->published_at->tz('UTC')->toRfc3339String(),
			];

			if ($article->tags->isNotEmpty())
				foreach ($article->tags as $index => $tag)
					$data['items'][$key]['tags'][$index] = $tag['name'];
		}

		return response($data, 200);
	}
}
