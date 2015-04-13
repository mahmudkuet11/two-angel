<?php

class CategoryController extends BaseController{
	
	public function getAddNewCategory(){
		return View::make('partials.add_new_category');
	}
	public function postAddNewCategory(){
		$barcode = Input::get("name");
		$supplier = Input::get("manufacturer");
		$manufacturer = Input::get("warning_quantity");
	}
}