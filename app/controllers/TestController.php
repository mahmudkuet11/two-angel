<?php

class TestController extends BaseController{
	//Testing Voucher
	public function getAddNewVoucher(){
		return View::make('test.add_new_voucher');
	}
	public function postAddNewVoucher(){
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
		return Redirect::route("/test/voucher");
	}


	//Testing  Supplier
		public function getAddNewSupplier(){
		return View::make('test.add_new_supplier');
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
		return Redirect::route("/test/supplier");

	}


	//Testing Product
	public function getAddNewProduct(){
		return View::make('test.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$category = Input::get("category");
		$supplier = Input::get("suppllier");
		$purchase_price = Input::get("purchase_price");
		$sell_price = Input::get("sell_price");

		DB::table('products')->insert(
   			 array(
   			 	'barcode'			=> $barcode, 
   			 	'category'			=> $category,
   			 	'suppllier'			=> $supplier,
   			 	'purchase_price'	=> $purchase_price,
   			 	'sell_price' 		=> $sell_price
   			 	)
		);
		return Redirect::route("/test/product");
	}


	//Testing order
		public function getAddNewOrder(){
		return View::make('test.add_new_order');
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
		return Redirect::route("/test/order");

	}
	
	//Testging expense
		public function getAddNewExpense(){
		return View::make('test.add_new_expense');
	}
	public function postAddNewExpense(){
		$name = Input::get("name");
		$note = Input::get("note");
		$amount = Input::get("amount");

		DB::table('expenses')->insert(
   			 array(
   			 	'name'			=> $name, 
   			 	'note'			=> $note,
   			 	'amount'		=> $amount
   			 	)
		);
		return Redirect::route("/test/expense");

	}

	//Testing category
		public function getAddNewCategory(){
		return View::make('test.add_new_category');
	}
	public function postAddNewCategory(){
		$name = Input::get("name");
		$manufacturer = Input::get("manufacturer");
		$warning_quantity = Input::get("warning_quantity");
		
		DB::table('categories')->insert(
   			 array(
   			 	'name'					=> $name, 
   			 	'manufacturer'			=> $manufacturer,
   			 	'warning_quantity'		=> $warning_quantity
   			 	)
		);
		return Redirect::route("/test/category");

	}

}