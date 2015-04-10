<?php

class AccountController extends BaseController{

	public function getLogin(){
		return View::make('login');
	}

	public function postLogin(){
		$username  	=	Input::get('username');
		$password 	=	Input::get('password');

		$user = DB::table('users')->where('username', $username)->first();
		if($user){
			if(Hash::check($password, $user->password)){
				Session::put('user', $user->username);
				return Redirect::route('getHome');
			}else{
				return Redirect::route('getLogin')->with('password_error', 'Password is incorrect!');
			}
		}else{
			return Redirect::route('getLogin')->with(array(
					'username_error'	=>	'This username does not exist!',
					'username'			=>	$username
				));
		}
	}

	public function getLogout(){
		Session::forget('user');
		return Redirect::route('getLogin');
	}

}