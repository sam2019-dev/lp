<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\myevent'=>[
            'App\Listeners\myeventlistner',
            'App\Listeners\custom6',
            'App\Listeners\custom7',
        ],
       'App\Events\custom2'=>[
            'App\Listners\custom2listner'
        ],
        'App\Events\custom3'=>[
            'App\Listners\custom3listner'
        ],
        'App\Events\custom5'=>[
            'App\Listners\custom5listner'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
