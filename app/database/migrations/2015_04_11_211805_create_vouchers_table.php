<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("vouchers", function($table){
			$table->increments("id");
			$table->string("customer_name");
			$table->string("address");
			$table->string("phone");
			$table->decimal("total_price", 6, 2);
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('vouchers');

	}

}
