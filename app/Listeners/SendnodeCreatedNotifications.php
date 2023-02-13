<?php

namespace App\Listeners;

use App\Events\nodeCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\User;
use App\Notifications\Newnode;

class SendnodeCreatedNotifications implements ShouldQueue
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
     * @param  \App\Events\nodeCreated  $event
     * @return void
     */
    public function handle(nodeCreated $event)
    {
        //
        foreach (User::whereNot('id', $event->node->user_id)->cursor() as $user){
            $user->notify(new Newnode($event->node));
        }
    }
}
