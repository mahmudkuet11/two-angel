<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("categories", function($table){
			$table->string("barcode");
			$table->string("name")->unique();;
			$table->string("manufacturer");
			$table->decimal("quantity",12,2)->default(0);
			$table->decimal("warning_quantity",12,2);
			$table->string("unit");
			$table->decimal("purchase_price", 13, 3);
			$table->decimal("sell_price", 13, 3);
			$table->primary('barcode');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('categories');
	}

}
