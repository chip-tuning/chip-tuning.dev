<?php

namespace App\Http\Controllers;

use App\Album;
use App\Testimonial;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with(['photos' => function ($query) {
            $query->orderByDesc('created_at')->limit(32);
        }])->get();

        $testimonials = Testimonial::fetchLatest(12);

        return view('gallery.index', compact(['albums', 'testimonials']));
    }
}
