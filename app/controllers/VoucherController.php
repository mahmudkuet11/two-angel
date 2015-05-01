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
		$discout = Input::get("discount");
		$paid = Input::get("paid");

		DB::table('vouchers')->insert(
   			 array(
   			 	'customer_name'			=> $customer_name,
   			 	'address'				=> $address,
   			 	'phone'					=> $phone,
   			 	'total_price'			=> $total_price,
   			 	'discount'				=> $discount,
   			 	'paid'					=> $paid
   			 	)
		);

	}


	public function getSearchVoucher(){
		return View::make('partials.search_voucher');
	}

	public function getViewVoucher($id){
		return View::make('partials.view_voucher', array('voucher_id'=>$id));
	}


	public function getProductDetails(){

		return DB::table('categories')->select('name', 'sell_price', 'barcode', 'quantity')
		->where('barcode', '=', Input::get("barcode"))->get();
	}
	public function getVoucherListByDate(){

  			 $date = Input::get("date");
   			 return json_encode( DB::table('vouchers')
                 ->whereBetween('date', array($date, $date." "."23:59:59"))->get());
	}
	public function getVoucherListByCustomerName(){;
  			 $name = Input::get("customer_name");
   			 return json_encode( DB::table('vouchers')
                 ->where('customer_name', 'LIKE', '%'.$name.'%')->get());
	}
	public function postConfirmVoucher(){
		$voucher_id = DB::table('vouchers')->count()+1;
		$name = Input::get('name');
		$phone = Input::get('phone');
		$address = Input::get('address');
		$barcode_list = json_decode(Input::get('barcode_list'));
		$total = Input::get('total');
		$discount = Input::get('discount');
		$paid = Input::get('paid');
		$due = Input::get('due');
		$var = "start";
		$total_purchase = 0.00;
	
	  foreach ($barcode_list as $barcode) {
			$info = DB::table('products')->select('sell_price', 'category')->where('barcode', '=', $barcode)->get()[0];
			DB::table('orders')->insert(array(
					'voucher_id'	 => $voucher_id,
					 'barcode'		 => $barcode, 
					 'category'		=> $info->category,
					 'price' 		=> $info->sell_price)
				);
			$old =  DB::table('categories')->select('quantity')
					->where('name', '=', $info->category)->first();
			$total_purchase = $total_purchase+ DB::table('products')->select('purchase_price')
					->where('barcode', '=', $barcode)->first()->purchase_price;

			DB::table('categories')->where('name', $info->category)
               ->update(array('quantity' => $old->quantity-1));

            DB::table('products')->where('barcode', '=', $barcode)->delete();
		}	
		 DB::table('vouchers')->insert(array(
					 'id'					 => $voucher_id,
					 'customer_name'		 => $name, 
					 'address' 				=> $address,
					 'phone'				 => $phone,
					 'total_price'			 => $total, 
					 'discount' 			=> $discount,
					 'paid'					 => $paid,
					 'total_purchase_price'   =>$total_purchase
					 )
		);
		return "Success";
	}
	public function getUpdateVoucher(){

		$voucher_id = Input::get('id');
		 $info = DB::table('vouchers')
		 	->select('id', 'customer_name', 'address', 'phone', 'total_price', 'discount', 'paid')
			 ->where('id', '=', $voucher_id)->first();

		$prds = DB::table('orders')->select('barcode', 'category', 'price')->where('voucher_id', '=', $voucher_id)->get();
		$info->products_details = $prds;
		return json_encode($info);
	}
	public function postUpdateVoucher(){
			DB::table('vouchers')
            ->where('id', Input::get('id'))
            ->update(array(
            	'customer_name'			 => Input::get('name'),
            	'phone' 			   	=> Input::get('phone'),
            	'address'				 => Input::get('address'),
            	'discount'				 => Input::get('discount'),
            	'paid' 					=> Input::get('paid'),
            	));
            return "success";
	}
}