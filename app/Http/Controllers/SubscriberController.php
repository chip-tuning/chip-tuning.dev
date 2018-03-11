<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmSubscriptionMail;

class SubscriberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validator = validator(request()->all(), [    
            'email' => 'required|email',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors(), 422);

        $subscriber = Subscriber::withTrashed()
            ->firstOrCreate(
                ['email' => request('email')], 
                ['access_token' => str_limit(md5(request('email') . str_random()), 32, '')]
            );

        if ($subscriber->wasRecentlyCreated)
        {
            Mail::to($subscriber)
                ->send(new ConfirmSubscriptionMail($subscriber));

            return response()->json([
                'success' => true, 
                'message' => 'Uspešna prijava! Molimo proverite i potvrdite svoj email.',
            ], 200);
        }

        if ($subscriber->trashed())
        {
            $subscriber->restore();

            return response()->json([
                'success' => true, 
                'message' => 'Dobrodošli nazad! Uspešno ste se prijavili na newsletter.',
            ], 200);
        }

        return response()->json(['success' => true,
            'message' => 'Već ste prijavljeni na naš newsletter.',
        ], 200);         
    }

    /**
     * Edit existing resoruce in storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        $subscriber->confirm();

        return redirect()->route('blog.index')->with('message', [
            'title' => 'Newsletter', 
            'body' => 'Uspešno ste potvrdili svoju email adresu.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return redirect()->route('blog.index')->with('message', [
            'title' => 'Newsletter', 
            'body' => 'Uspešno ste odjavili svoju email adresu.',
        ]);
    }
}
