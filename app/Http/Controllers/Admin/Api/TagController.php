<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Tag;
use App\Article;
use Illuminate\Http\Request;

class TagController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$tag = Tag::all('name');

		return $tag;
	}

	/**
	 * Return the tags associated with an article
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit()
	{
		$validator = validator(request()->all(), [
			'id' => 'required|integer'
		]);

		if ($validator->fails())
			return response()->json($validator->errors(), 422);

		$article = Article::findOrFail(request('id'));
		$tags = $article->tags()->get();

		return response()->json($tags, 200);
	}
}