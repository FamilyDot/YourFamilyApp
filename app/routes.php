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

Route::get('/', 'HomeController@showHome');

Route::resource('/users','UsersController');

// Route::get('/users', 'HomeController@showLogin');

Route::resource('/answer', 'AnswerController');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::post('/', 'HomeController@doSignup');

Route::get('/logout', 'HomeController@doLogout');

// Route::post('/question', 'QuestionController@store');

// Route::put('/question/{id}', 'QuestionController@update');

Route::resource('/question', 'QuestionController');

// Route::delete('/question', 'QuestionController@destroy');

Route::get('/family', "HomeController@showFamily");

Route::post('/family', 'PostController@store');

//changing this to UPDATE the data 
Route::put('/family/{id}', 'FamilyController@updateUserScore');

Route::get('/calculatefamilyhappiness/{id}', 'FamilyController@calculateFamilyHappiness');

Route::post('/users', 'UsersController@addTwitter');

Route::put('/family', 'FamilyController@calculateFamilyHappiness');


Route::get('/search', 'PostController@search');



