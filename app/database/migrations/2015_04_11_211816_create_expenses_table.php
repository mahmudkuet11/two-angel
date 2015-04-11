<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("expenses", function($table){
			$table->integer("id");
			$table->string("name");
			$table->string("note");
			$table->decimal("amount", 6, 2);
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('expenses');

	}

}
