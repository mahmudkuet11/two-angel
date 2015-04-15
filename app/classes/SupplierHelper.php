<?php

class SupplierHelper{
	public static function getAllSuppliers(){
		return  DB::table('suppliers')->lists('name');
	}

}