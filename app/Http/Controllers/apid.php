<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use App\User;
class apid extends Controller
{
    public function login()
    {
       $userdetails = [
           "email" => "ogusikowski@example.com",
           "password"=>'123456',
        ];
        //dd(Auth::attempt($userdetails));
        if(Auth::attempt($userdetails,true))
        {
            $user = Auth::user();
            $api_token = Str::random(20);
            $user->api_token = $api_token;
            $user->save();
            return response()->json(['api_token'=>$api_token]);
        }
        else {
            return response()->json(['error'=>'not logged']);
        }
    }
    public function listuser()
    {
        return response()->json(["user"=>Auth::user()]);
    }
}
