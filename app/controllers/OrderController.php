<?php

class OrderController extends BaseController{

	public function getAddNewOrder(){
		return View::make('partials.add_new_order');
	}
	public function postAddNewOrder(){
		$voucher_id = Input::get("voucher_id");
		$barcode = Input::get("barcode");
		$price = Input::get("price");

		DB::table('orders')->insert(
   			 array(
   			 	'voucher_id'		=> $voucher_id, 
   			 	'barcode'			=> $barcode,
   			 	'price'				=> $price
   			 	)
		);
	}
}