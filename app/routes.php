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

//registration, blade form
Route::get('signup',function(){
	return View::make('signup');
});

//create account,validation ,insert db...
Route::post('signup',function(){	
	//print_r($_POST);	<-old way
	//print_r(Input::all());
	
	//validation start... 
	//1 .remember to add table schema field for password.
	//2 . move them to a model
	$rules = array(
		'name' 			=> array('required', 'unique:users,name'),
		'email'			=> array('required','email','unique:users,email'),
		'password'		=> array('required','min:7'),
		're_password' 	=> array('required','same:password')
	);

	$validation = Validator::make(Input::all(),$rules);	

	if ($validation->fails())
	{
        // Validation has failed.        
        print_r($validation->messages());        
        //return Redirect::to('signup')->with_input()->with_errors($validation);
    }

    // Validation has succeeded. Create new user.
	
	return View::make('hello');
});
