<?php

namespace App\Listeners;

use App\Events\NewSubscription;
use App\Mail\ConfirmSubscription;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendConfirmSubscriptionEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewSubscription  $event
     * @return void
     */
    public function handle(NewSubscription $event)
    {
        Mail::to($event->subscriber)
            ->send(new ConfirmSubscription($event->subscriber));
    }
}
