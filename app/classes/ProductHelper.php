<?php

class ProductHelper{

	public static function getAllCategories(){
		return DB::table('categories')->lists('name');
	}
}