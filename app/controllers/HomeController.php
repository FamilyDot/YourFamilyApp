<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showFamdash()
	{
		return View::make('famdash');
	}

	public function showLogin()
	{
		if (Auth::check()) {
			return Redirect::action('UsersController@show', Auth::id()); //this is working because i can't go back to login form since i'm already logged in. so make a logout function to test it some more
		} else {
	    	return View::make("login");
		}
	}

	public function doLogin()
 	{
 		$email= Input::get('email');
 		$password = Input::get('password');

 		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
 	    	return Redirect::action('UsersController@show', $user->id);
 		} else {
 		    // login failed, go back to the login screen
 			return Redirect::back();
 		}
 	}

 	public function doSignup()
	{
    $validator = new SignUpValidator();
    $validator->validate(Input::all());

    $family = Family::findOrCreateWithName(Input::get('name'));
    $user = User::signUp(Input::all(), $family);

    Session::flash('successMessage', 'We created your account!');
    return Redirect::action('UsersController@show', $user->id);
  }
}



