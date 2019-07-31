<?php

namespace App\Listners;

use App\Events\custom3;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class custom3listner
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
     * @param  custom3  $event
     * @return void
     */
    public function handle(custom3 $event)
    {
        //
    }
}
