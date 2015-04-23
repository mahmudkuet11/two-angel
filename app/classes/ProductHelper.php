<?php

class ProductHelper{

	public static function getAllCategories(){
		return DB::table('categories')->lists('name');
	}

	public static function getCountLowStock(){
		return DB::select(DB::raw("select count(quantity) as count from categories where quantity <= warning_quantity"));
	}

	public static function getLowStockCategory(){
		return DB::select(DB::raw("select * from categories where quantity <= warning_quantity"));
	}
}