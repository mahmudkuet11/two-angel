<?php

class ReportController extends BaseController{


	public function getReportByDate(){
		return View::make('partials.report_by_date');
	}

		public function getReportBetween2Date(){
			$sDate 			=	Input::get('start_date');
			$eDate    		=  Input::get('end_date');

			$sl = DB::table('vouchers')
			 ->select(DB::raw(
				 'CAST(date AS DATE) as date,
				 SUM(total_price-discount) as total_sell,
				 SUM(total_price-discount-paid) as total_due,
				 SUM(discount) as total_discount,
				 SUM(paid) as total_paid,
				 SUM(total_price) as total_product_sell_price,
				 SUM(total_purchase_price) as total_purchase_cost'
				 ))
			->whereBetween('date', array($sDate." "."00:00:00", $eDate." "."23:59:59"))
			->groupBy(DB::raw('CAST(date AS DATE)'))
			->get();
			$ex = DB::table('expenses')
			->select(DB::raw(
				'CAST(date AS DATE) as date,
				SUM(amount) as total_expense'
				))
			->whereBetween('date', array($sDate." "."00:00:00", $eDate." "."23:59:59"))
			->groupBy(DB::raw('CAST(date AS DATE)'))
			->get();
			$res =  array('vouchers' => $sl, 'expenses' =>$ex);
			return json_encode($res);
		}

		public function getExpenseReport(){
			return View::make('partials.expense_report');
		}

		public function postExpenseReport(){
			$sDate 			=	Input::get('start_date');
			$eDate    		=  Input::get('end_date');
			return DB::table('expenses')
			 ->select(DB::raw(
				 'CAST(date AS DATE) as date,
				 name,
				 note,
				 amount'
				 ))
			->whereBetween('date', array($sDate." "."00:00:00", $eDate." "."23:59:59"))
			->get();

		}


		public function getPurchaseReport(){

				$sDate 			=	Input::get('start_date');
				$eDate    		=  Input::get('end_date');

				return DB::table('all_products_purchase')
				 ->select(DB::raw(
					 'CAST(date AS DATE) as date,
					 category,
					 suppllier,
					 quantity,
					 purchase_price,
					 sell_price,
					 total_purchase_price'
					 ))
				->whereBetween('date', array($sDate." "."00:00:00", $eDate." "."23:59:59"))
				->get();

		}

		public function getRemainingProductReport(){
			return View::make('partials.remaining_product_report');
		}

		public function postRemainingProductReport(){
				/*$sDate 			=	Input::get('start_date');
				$eDate    		=  Input::get('end_date');*/

				return DB::table('products')
				 ->select(DB::raw(
				 	'category,
				 	suppllier,
				 	purchase_price,
				 	sell_price,
				 	COUNT(*) as quantity,
				 	CAST(date AS DATE) as date'
					 ))
				->groupBy('category')
				->groupBy('purchase_price')
				->groupBy('sell_price')
				->groupBy('suppllier')
				->groupBy(DB::raw('CAST(date AS DATE)'))
				->get();
		}
		public function getCategoryReport(){
				return DB::table('categories')
				 ->select(DB::raw(
				 	'name,
				 	manufacturer,
				 	quantity,
				 	warning_quantity'
					 ))
				->get();
		}

		public function getDueReport(){
			return View::make('partials.due_report');
		}



}

