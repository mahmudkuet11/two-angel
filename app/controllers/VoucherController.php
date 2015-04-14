<?php

class VoucherController extends BaseController{

	public function getAddNewVoucher(){
		return View::make('partials.add_new_voucher');
	}
	public function postAddNewVoucher(){
		$products = Input::get("products");
		$customer_name = Input::get("customer_name");
		$address = Input::get("address");
		$phone = Input::get("phone");
		$total_price = Input::get("total_price");

		DB::table('vouchers')->insert(
   			 array(
   			 	'products'				=> $products, 
   			 	'customer_name'			=> $customer_name,
   			 	'address'				=> $address,
   			 	'phone'					=> $phone,
   			 	'total_price'			=> $total_price
   			 	)
		);

	}
}