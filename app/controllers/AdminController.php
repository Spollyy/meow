<?php

class AdminController extends BaseController {

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

	public function getHiLena () {
		return View::make('layout');
	}

	public function postLogin () {
		$input = Input::all();
		if (Auth::attempt(array(
			'email' => $input['email'],
			'password' => $input['password']
			)))
			return Redirect::to('main');
		return Redirect::back()->withAlert('You shall not pass');
	}
	public function getLogout () {
		Auth::logout();
		return Redirect::to('hilena');
	}

	public function getMain () {
		return View::make('mainadmin');
	}
}
