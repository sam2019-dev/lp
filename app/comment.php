<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded =[]; 
    public function User()
    {
        return $this->belongsTo('App\User');
    } 
    
}
