<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$articles = Article::latest()->paginate(6);

		return view('admin.articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		request()->validate([
			'title' => 'required|max:60|unique:articles',
			'picture' => 'required|image|max:3072',
			'summary' => 'required',
			'content' => 'required',
		]);

		$picture = $this->storePicture(request()->file('picture'));

		$article = Article::create([
			'user_id' => auth()->id(),
			'title' => request('title'),
			'slug'  => request('title'),
			'picture' => $picture,
			'summary' => request('summary'),
			'content' => request('content'),
			'published_at' => Carbon::now(),
		]);
		
		$article->tag(request('tags'));

		if (request()->has('files'))
			$article->associate(request('files'));

		return redirect()->route('admin.articles.index')->with('message', 'Article successfully created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function show(Article $article)
	{
		return view('admin.articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Article $article)
	{
		return view('admin.articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(Article $article)
	{
		request()->validate([
			'title' => 'required|max:60|unique:articles,title,' . $article->id,
			'picture' => 'image|max:3072',
			'summary' => 'required',
			'content' => 'required',
		]);

		$article->title = request('title');
		$article->slug = request('title');

		if (request()->has('picture'))
		{
			Storage::disk('public')->delete($article->picture);
			$picture = $this->storePicture(request()->file('picture'));
			$article->picture = $picture;
		}

		$article->summary = request('summary');
		$article->content = request('content');
		
		$article->tag(request('tags'));

		if (request()->has('files'))
		{
			$article->disassociate();
			$article->associate(request('files'));
		}
	
		$article->save();

		return redirect()->route('admin.articles.index')->with('message', 'Article successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Article $article)
	{
		// Delete files associated with article
		$files = $article->files()->pluck('path');
		Storage::disk('public')->delete($files->toArray());
		$article->files()->delete();

		// Detach tags
		$article->tags()->detach();         
		
		// Remove article itself
		Storage::disk('public')->delete($article->picture);
		$article->delete();

		return redirect()->route('admin.articles.index')->with('message', 'Article successfully deleted.');
	}

	/**
	 * Store picture
	 * 
	 * @param  \Illuminate\Http\UploadedFile $file
	 * @return string
	 */
	protected function storePicture(UploadedFile $file)
	{
		$path = $file->hashName('pictures');
		$image = Image::make($file);

		$image->resize(1152, 648, function ($constraint) {
			$constraint->aspectRatio();
			$constraint->upsize();
		});

		Storage::disk('public')->put($path, (string)$image->encode());

		return $path;
	}
}
