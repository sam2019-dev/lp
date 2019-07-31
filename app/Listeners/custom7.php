<?php

namespace App\Listeners;

use App\Events\myevent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class custom7
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
     * @param  myevent  $event
     * @return void
     */
    public function handle(myevent $event)
    {
        echo "result".$event->first;
    }
}
