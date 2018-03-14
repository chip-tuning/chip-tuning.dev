<?php

namespace App\Http\Controllers;

use App\Mail\PriceInfoMail;
use Illuminate\Support\Facades\Mail;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validator = validator(request()->all(), [    
            'brand' => 'required|max:32',
            'type' => 'required|max:32',
            'engine' => 'required|max:32',
            'power' => 'required|numeric',
            'year' => 'required|numeric',
            'services' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors(), 422);

        Mail::send(new PriceInfoMail(request()->all()));

        return response()->json(['success' => true, 'message' => 'Vaš zahtev je poslat! Očekujte uskoro naš odgovor.'], 200);
    }
}
