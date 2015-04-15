<?php

class ExpenseController extends BaseController{

	public function getAddNewExpense(){
		return View::make('partials.add_new_expense');
	}
	public function postAddNewExpense(){
		$name = Input::get("name");
		$note = Input::get("note");
		$amount = Input::get("amount");

		DB::table('expenses')->insert(
   			 array(
   			 	'name'			=> $name, 
   			 	'note'			=> $note,
   			 	'amount'		=> $amount
   			 	)
		);

		return Redirect::route('getAddNewExpense')->with('msg', 'Expense has been added successfully');
		
	}

}