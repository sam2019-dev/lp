<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testemail;
use App\Jobs\emailjob;
use App\Events\myevent;
use App\Events\custom2;

class email extends Controller
{
    public function sendemail1()
    {
        Mail::send([],[],function($msg){
          $msg->to('shomgan@gmail.com');
          $msg->subject('testemail');
          $msg->from('test@test.com');
          $msg->setBody('<p>Hello</p>','text/html');
        });
    }
    public function sendemail2()
    {
        $userdata =array('name'=>'sam','address'=>'test@ext.com');
        Mail::to('shomgan@gmail.com')->send(new testemail($userdata));
    }
    public function sendemail3()
    {
        
      emailjob::dispatch("sam")->delay(now()->addSecond(5)); 

    }
    public function sendemail4()
    {
        
      event(new myevent(5));
      event(new custom2());

    }
}
