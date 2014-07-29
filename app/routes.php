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
	return View::make('home');
});

Route::get('/projects', function()
{
	return View::make('projects');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('sotd', function()
{

		return View::make('sotd.home');
});


Route::get('sotd/{name}', function($name)
{
   if (View::exists('sotd.'.$name)){
    	return View::make('sotd.'.$name);
	}
	else{
		return View::make('sotd.home');
	}
});