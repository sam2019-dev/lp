<?php

use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
   dd(User::find(1));

});
Route::get('/sm1','email@sendemail1');
Route::get('/sm2','email@sendemail2');
Route::get('/sm3','email@sendemail3');
Route::get('/sm4','email@sendemail4');