<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The subscriber.
     * 
     * @var Subscriber
     */
    public $subscriber;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	return $this->subject('Potvrdite email adresu')
            ->markdown('emails.confirm-subscription');
    }
}
