<?php 
	/**
	* 
	*/
	class VoucherTableSeeder extends Seeder {
		
		public function run(){

			DB::table('vouchers')->insert(array(
					'customer_name'		=>	'Md. Raju',
					'address'			=>	'Khulna',
					'phone'				=>	'00000000000',
					'total_price'		=>	450
				));
			DB::table('vouchers')->insert(array(
					'customer_name'		=>	'Bappy',
					'address'			=>	'Badamtala',
					'phone'				=>	'00000000000',
					'total_price'		=> 	600
				));
			DB::table('vouchers')->insert(array(
					'customer_name'		=>	'Tarik Islam',
					'address'			=>	'fulbari gate',
					'phone'				=>	'00000000000',
					'total_price'		=> 1000
				));
		}
	}

 ?>