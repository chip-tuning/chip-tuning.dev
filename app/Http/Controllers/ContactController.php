<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validator = validator(request()->all(), [    
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors(), 422);

        Mail::send(new ContactMail(request()->all()));

        return response()->json(['success' => true,
            'message' => 'Vaša poruka je poslata, očekujte uskoro naš odgovor.',
        ], 200);
    }
}
