<?php

class VoucherController extends BaseController{

	public function getNewVoucher(){
		return View::make('partials.new_vouchar');
	}
	public function postNewVoucher(){
		$customer_name = Input::get("customer_name");
		$address = Input::get("address");
		$phone = Input::get("phone");
		$total_price = Input::get("total_price");

		DB::table('vouchers')->insert(
   			 array(
   			 	'customer_name'			=> $customer_name,
   			 	'address'				=> $address,
   			 	'phone'					=> $phone,
   			 	'total_price'			=> $total_price
   			 	)
		);

	}
	public function getProductDetails(){
		return DB::table('products')->select('category', 'sell_price', 'barcode')
		->where('barcode', '=', Input::get("barcode"))->get();
	}
}