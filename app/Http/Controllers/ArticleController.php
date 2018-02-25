<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$articles = Article::select([
			'id', 
			'user_id', 
			'title', 
			'slug', 
			'picture',
			'summary',
			'created_at',
		])->latest('created_at')
		->paginate(5);

		return view('blog.index', compact('articles'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function show(Article $article)
	{
		return view('blog.show', compact('article'));
	}
}
