<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$photos = Photo::with(['album'])->latest()->paginate(12);

		return view('admin.photos.index', compact('photos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Photo $photo)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Photo $photo)
	{
		dd($photo);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Photo $photo)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Photo $photo)
	{
		if (Storage::disk('public')->delete([
			$photo->small,
			$photo->medium,
			$photo->large
		]))
			$photo->delete();

		return redirect()->back()->with('message', 'Photo successfully deleted.');
	}
}
