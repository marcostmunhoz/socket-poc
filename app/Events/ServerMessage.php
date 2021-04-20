<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ServerMessage implements ShouldBroadcast
{
    /**
     * @var string
     */
    public $message;

    /**
     * @param string $message
     * @return void
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return ['messages'];
    }
}
