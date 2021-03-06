<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create("orders", function($table){
			$table->string("voucher_id");
			$table->string("barcode");
			$table->string("category");
			$table->decimal('quantity', 13, 3);
			$table->decimal("price", 13, 2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('orders');

	}

}
