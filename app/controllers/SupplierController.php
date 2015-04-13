<?php

class SupplierController extends BaseController{

	public function getAddNewSupplier(){
		return View::make('partials.add_new_supplier');
	}
	public function postAddNewSupplier(){
		$category = Input::get("name");
		$manufacturer = Input::get("phone");
		$supplier = Input::get("address");
	}
}