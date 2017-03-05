<?php

class HomeController extends BaseController {

	// public function __construct()
	// {
	// 	$this->beforeFilter('auth', ['except'=>['index', 'show']]);
	// }

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
	|	FUNCTIONS THAT HAPPEN TO BE IN A CONTROLLER ARE CALLED AN ACTION
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showJs()
	{
		return View::make('jsmeetup');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	//get Route
	public function login()
	{
		return View::make('login');
	}

	//handle a Post request
	public function doLogin()
	{
	
		// dd(Input::all());
		$emailOrUsername = Input::get('email_or_username');
		$password = Input::get('password');

		if ( (Auth::attempt(array('username' => $emailOrUsername, 'password' => $password)))
			|| (Auth::attempt(array('email'=>$emailOrUsername, 'password' => $password))) ) {

			Session::flash('successMessage', 'User Successfully logged in');

    		return Redirect::intended('/posts');

		} else {
			Session::flash('errorMessage','Login Failed');
		    return Redirect::back();

		    // login failed, go back to the login screen
		    // session flash message login failed
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/posts');
	}

}
