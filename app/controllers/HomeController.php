<?php

class HomeController extends BaseController {

	public function getHome()
	{
		return View::make('partials.index');
	}

}
