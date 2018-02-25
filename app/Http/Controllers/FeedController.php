<?php

namespace App\Http\Controllers;

use App\Feed;

class FeedController extends Controller
{
	/**
	 * Display a rss feed.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function rss()
	{
		return 'atom/rss feed';
	}

	/**
	 * Display a json feed.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function json()
	{
		return 'json feed';
	}
}
