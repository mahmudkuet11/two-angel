<?php

class SupplierController extends BaseController{

	public function getAddNewSupplier(){
		return View::make('partials.add_new_supplier');
	}
	public function postAddNewSupplier(){
		$name = Input::get("name");
		$phone = Input::get("phone");
		$address = Input::get("address");

		DB::table('suppliers')->insert(
   			 array(
   			 	'name'			=> $name, 
   			 	'phone'			=> $phone,
   			 	'address'		=> $address
   			 	)
		);
	}
}