<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\jwtbase;
use App\Http\Resources\userresource;
use Illuminate\Support\Facades\Auth;

class jwtapi extends jwtbase
{
    function __construct()
    {
        $this->middleware('jwt');
        parent::__construct();

    }
    public function getcommentsUser()
    {
        $user = Auth::user();
        $id =$user->id;
        $comments = \App\adminuser::where('id',$id)->with('admincomments')->get();
        return new userresource($comments);
        //return response()->json($id);
    }
}
