<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('SupplierTableSeeder');
		//$this->call('ProductTableSeeder');
		$this->call('ExpenseTableSeeder');
		//$this->call('VoucherTableSeeder');
		//$this->call('OrderTableSeeder');
	}

}
