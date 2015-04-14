<?php 
	/**
	* 
	*/
	class ExpenseTableSeeder extends Seeder {
		
		public function run(){

			DB::table('expenses')->insert(array(
					'name'				=>	'Drinking Tea',
					'note'				=>	'Drinking Tea in lunch hours',
					'amount'			=> 20
				));
			DB::table('expenses')->insert(array(
					'name'				=>	'Riskshaw Fare',
					'note'				=>	'Return from home',
					'amount'			=> 31.00
				));
			DB::table('expenses')->insert(array(
					'name'				=>	'Transport cost',
					'note'				=>	'Transport product from daulatpur',
					'amount'			=> 20
				));

		}
	}

 ?>