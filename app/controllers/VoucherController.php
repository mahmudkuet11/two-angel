<?php

class VoucherController extends BaseController{

	public function getAddNewVoucher(){
		return View::make('partials.add_new_voucher');
	}
	public function postAddNewVoucher(){
		$barcode = Input::get("products");
		$category = Input::get("customer_name");
		$manufacturer = Input::get("address");
		$supplier = Input::get("phone");
		$purchase_price = Input::get("total_price");
	}
}