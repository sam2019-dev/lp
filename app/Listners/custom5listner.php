<?php

namespace App\Listners;

use App\Events\custom5;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class custom5listner
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
     * @param  custom5  $event
     * @return void
     */
    public function handle(custom5 $event)
    {
        //
    }
}
