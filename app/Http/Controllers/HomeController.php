<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$photos = Photo::take(12)->latest()->get();

		return view('home.index', compact('photos'));
	}
}
