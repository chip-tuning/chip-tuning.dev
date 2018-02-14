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
            $query->limit(32)->orderByDesc('created_at');
        }])->get();

        return view('gallery.index', compact('albums'));
    }
}
