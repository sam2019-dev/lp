<?php

namespace App\Listners;

use App\Events\custom2;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class custom2listner
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
     * @param  custom2  $event
     * @return void
     */
    public function handle(custom2 $event)
    {
        dd("custom2");
    }
}
