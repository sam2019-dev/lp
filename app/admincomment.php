<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admincomment extends Model
{
    public function adminuser()
    {
        return $this->belongsTo('App\adminuser');
    } 
}
