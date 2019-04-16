<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($message, User $user)
    {
       return $this->message = $message;
       return $this->user = $user->Username;
        //$this->dontBroadcastToCurrentUser();
    }

    //THIS IS USED TO TEST PUSHER
    /*public function __construct($message, User $user)
    {
        $this->message = $message;
        $this->user = $user->Username;
    }*/

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }
}
