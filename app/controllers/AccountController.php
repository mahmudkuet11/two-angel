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
	public function postCreateAccount(){
		$username = Input::get('username');
		$password = Input::ge('password');
		$account_type = Input::get("account_type");
		$user = DB::table('users')->where('username', $username)->first();
		if(!$user){
			DB::table('users')->insert(
    				array(
    					'username' => $username,
    					 'password' => Hash::make($password), 
    					 'account_type'=> $account_type
    					 )
			);
			return Redirect::route('createUser')->with(array(
					'success'	=>	'Account created  successfully!',
					'username'			=>	$username
				));

		}else{
			return Redirect::route('createUser')->with(array(
					'username_error'	=>	'This username already used!',
					'username'			=>	$username
				));
		}
	}
	public function postUpdatePassword(){
		$username = Input::get('username');
		$new_password = Input::get('new_password');	
		$old_password = Input::get('old_password');	

		$user = DB::table('users')->where('username', $username)->first();
		if($user){
			if(Hash::check($old_password, $user->password)){
				DB::table('users')
          		  ->where('username', '=', $username)
            		->update(array('password' => Hash::make($new_password)));
            	return Redirect::route('getchangePassword')->with('message', 'password has been updated successfully');
			}else{
				return Redirect::route('getchangePassword')->with('password_error', 'Password is incorrect!');
			}
		}else{
			return Redirect::route('getchangePassword')->with(array(
					'username_error'	=>	'This username does not exist!',
					'username'			=>	$username
				));
		}
	}

	public function getchangePassword(){
		return View::make('partials.change_password');
	}


}