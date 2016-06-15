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

Route::get('/', "HomeController@showHome");

Route::get('/user', "HomeController@showUser");

Route::get('/famdash', "HomeController@showFamdash");

Route::get('/login', "HomeController@showLogin");

Route::post('/login', "HomeController@doLogin");

Route::post('/', "HomeController@doSignup");