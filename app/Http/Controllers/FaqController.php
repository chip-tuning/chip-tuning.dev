<?php

namespace App\Http\Controllers;

use App\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate(15);

        return view('faq.index', compact('faqs'));
    }
}
