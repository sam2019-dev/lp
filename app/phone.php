<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $guarded = [];

    public function  User()
    {
        return $this->belongsTo('App\User');
    }
}
