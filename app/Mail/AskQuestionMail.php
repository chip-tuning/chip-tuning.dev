<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AskQuestionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The request.
     * 
     * @var  array
     */
    public $request;

    /**
     * Create a new message instance.
     *
     * @param  array  $request
     * @return void
     */
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->request['email'], $this->request['name'])
            ->subject(ucfirst($this->request['subject']))
            ->view('emails.ask-question');
    }
}
