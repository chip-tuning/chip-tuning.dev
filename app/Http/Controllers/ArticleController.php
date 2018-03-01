<?php

namespace App\Http\Controllers;

use App\Article;
use App\Filters\ArticleFilters;
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
		$articles = Article::with(['author:id,name', 'tags'])
		->select(['id', 'user_id', 'title', 'slug', 'picture', 'summary', 'published_at'])
		->latest()
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

	/**
	 * Search a listing of resources.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function search()
	{
        request()->validate([
            'upit' => 'required'
        ]);

		$query = request('upit');
		$articles = Article::search($query)->paginate(5);

		return view('blog.search', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param ArticleFilters $filters
	 * @return \Illuminate\Http\Response
	 */
	public function tags(ArticleFilters $filters)
	{
		$articles = Article::with(['author:id,name', 'tags'])
			->select(['id', 'user_id', 'title', 'slug', 'picture', 'summary', 'published_at'])
			->latest()
			->filter($filters)
			->paginate(5);
	
		return view('blog.tags', compact('articles'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param ArticleFilters $filters
	 * @return \Illuminate\Http\Response
	 */
	public function archive(ArticleFilters $filters)
	{
		$articles = Article::with(['author:id,name', 'tags'])
			->select(['id', 'user_id', 'title', 'slug', 'picture', 'summary', 'published_at'])
			->latest()
			->filter($filters)
			->paginate(5);
	
		return view('blog.archive', compact('articles'));
	}
}