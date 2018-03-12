<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$tags = Tag::latest('id')->paginate(16);

		return view('admin.tags.index', compact('tags'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		request()->validate([
			'name' => 'required|unique:tags',
		]);

		$tag = Tag::create([
			'name' => request('name')
		]);

		return redirect()->route('admin.tags.index')->with('message', 'Tag successfully created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Tag  $tag
	 * @return \Illuminate\Http\Response
	 */
	public function show(Tag $tag)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Tag  $tag
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Tag $tag)
	{
		return view('admin.tags.edit', compact('tag'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Tag  $tag
	 * @return \Illuminate\Http\Response
	 */
	public function update(Tag $tag)
	{
		request()->validate([
			'name' => 'required|unique:tags,name,' . $tag->id,
		]);

		$tag->name = request('name');
		$tag->save();

		return redirect()->route('admin.tags.index')->with('message', 'Tag successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Tag  $tag
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Tag $tag)
	{
		$tag->articles()->detach();
		$tag->delete();

		return redirect()->route('admin.tags.index')->with('message', 'Tag successfully deleted.');
	}
}
