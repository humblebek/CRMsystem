<?php

namespace App\Listeners;

use App\Models\LogEvent;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogAuthEvents
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $eventType = ($event instanceof Login) ? 'login' : 'logout';

        LogEvent::create([
            'user_id' => $event->user->id,
            'name' => $event->user->name,
            'event' => $eventType,
            'time'=>now()
        ]);
    }
}
