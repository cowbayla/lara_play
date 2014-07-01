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

Route::get('/', function()
{
	return View::make('hello');
});


// create table , select data...
Route::get('users', function()
{
	$users = User::all();
	return View::make('users')->with('users', $users);
});

//registration, blade form.
Route::get('signup',function(){
	return View::make('signup');
});

//create account, insert db...

Route::post('createacc',function(){	
	return View::make('hello');
});
