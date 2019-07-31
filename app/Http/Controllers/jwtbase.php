<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
class jwtbase extends Controller
{
    function __construct()
    {
        Config::set('auth.jwt','App\adminuser');
        Config::set('auth.providers.users.model','App\adminuser');
        auth()->setDefaultDriver('api');
    }
}
