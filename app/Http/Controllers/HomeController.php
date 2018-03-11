<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Testimonial;

class HomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$photos = Photo::fetchLatest(12);
		$testimonials = Testimonial::fetchLatest(12);

		return view('home.index', compact(['photos', 'testimonials']));
	}
}
