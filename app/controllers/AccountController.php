<?php

class AccountController extends BaseController{

	public function getLogin(){
		return View::make('login');
	}

}