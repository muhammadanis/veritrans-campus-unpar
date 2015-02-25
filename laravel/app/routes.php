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


//print hello world
Route::get('/hello', function() {
	return "Hello World";
});


//print hello world in another way
Route::get('/hello2','HelloController@hello');

//Rest Routing
Route::resource('photo','PhotoController');