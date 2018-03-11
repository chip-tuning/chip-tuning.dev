<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class NewSubscription
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The subscriber.
     *
     * @var \App\Subscriber
     */
    public $subscriber;

    /**
     * Create a new event instance.
     *
     * @param  \App\Subscriber
     * @return void
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
