<?php 
	/**
	* 
	*/
	class OrderTableSeeder extends Seeder {
		
		public function run(){

			DB::table('orders')->insert(array(
					'voucher_id'	=>	'11',
					'barcode'		=>	'112201',
					'price'			=>	22.50

				));
			DB::table('orders')->insert(array(
					'voucher_id'	=>	'11',
					'barcode'		=>	'112201',
					'price'			=>	22.50
				));
			DB::table('orders')->insert(array(
					'voucher_id'	=>	'11',
					'barcode'		=>	'112201',
					'price'			=> 22.50
				));
			DB::table('orders')->insert(array(
					'voucher_id'	=>	'12',
					'barcode'		=>	'222201',
					'price'			=> 22.50
				));
			DB::table('orders')->insert(array(
					'voucher_id'	=>	'12',
					'barcode'		=>	'222201',
					'price'			=> 22.50
				));
			DB::table('orders')->insert(array(
					'voucher_id'	=>	'12',
					'barcode'		=>	'112302',
					'price'			=>	120.00
				));
		}
	}

 ?>