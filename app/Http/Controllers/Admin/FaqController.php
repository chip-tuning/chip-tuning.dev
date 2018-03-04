<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$faqs = Faq::latest()->paginate(8);

		return view('admin.faqs.index', compact('faqs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$faqs = Faq::latest()->take(5)->get();

		return view('admin.faqs.create', compact('faqs'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		request()->validate([
			'question' => 'required|max:128',
			'answer'  => 'required|max:1024',
		]);

		$faq = Faq::create([
			'question' => request('question'),
			'answer' => request('answer'),
		]);

		return redirect()->back()->with('message', 'Q&A successfully created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Faq  $faq
	 * @return \Illuminate\Http\Response
	 */
	public function show(Faq $faq)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
     * @param  \App\Faq  $faq
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Faq $faq)
	{
		$faqs = Faq::latest('updated_at')->take(5)->get();

		return view('admin.faqs.edit', compact('faq', 'faqs'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Faq  $faq
	 * @return \Illuminate\Http\Response
	 */
	public function update(Faq $faq)
	{
		request()->validate([
			'question' => 'required|max:128',
			'answer'  => 'required|max:1024',
		]);

		$faq->question = request('question');
		$faq->answer = request('answer');
		$faq->save();

		return redirect()->back()->with('message', 'Q&A successfully updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Faq  $faq
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Faq $faq)
	{
		$faq->delete();	

		return redirect()->back()->with('message', 'Q&A successfully deleted.');
	}
}
