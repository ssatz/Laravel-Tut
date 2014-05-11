<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',   array('as' => 'login',       'uses' => 'HomeController@Index'));
Route::post('/',  array('as' => 'loginpost',   'uses' => 'HomeController@postLogin'));
Route::get('/logout',  array('as' => 'logout',   'uses' => 'HomeController@logOut'));
Route::get('/logins',array('as' => 'logins',  function(){
   
    return View::make('logins');
}));