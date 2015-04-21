<?php

class ReportController extends BaseController{

	public function getReportByDate(){
		return View::make('partials.report_by_date');
	}


}