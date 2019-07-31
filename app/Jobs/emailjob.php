<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class emailjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data ="")
    {
        $this->data = $data;
      // echo $this->data; die();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        Mail::send([],[],function($message){
            $message->to('shomgan@gmail.com');
            $message->from('test@test.com');
            $message->subject('My Demo');
            $message->setBody('hello'.$this->data,'text/html');
        });
       
    }
}
