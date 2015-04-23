<?php

class VoucherHelper{

	public static function getDue(){
		return DB::select(DB::raw("select * from vouchers where total_price - discount - paid > 0"));
	}

}