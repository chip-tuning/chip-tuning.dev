<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

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

        return view('gallery.index', compact('albums'));
    }
}
