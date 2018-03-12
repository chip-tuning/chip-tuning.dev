<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Mail\AskQuestionMail;
use Illuminate\Support\Facades\Mail;

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
            'question' => 'required',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors(), 422);

        Mail::send(new AskQuestionMail(request()->all()));

        return response()->json(['success' => true,
            'message' => 'Vaše pitanje je poslato. Očekujte uskoro naš odgovor.',
        ], 200);         
    }
}
