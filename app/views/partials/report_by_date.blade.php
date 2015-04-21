@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">
				<div class="row" id="search_report_field">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								  <legend>Search Report By Date</legend>
								  <fieldset>
									<div class="form-group">
									  <div class="col-md-5">
										  <input type="text" class="form-control datepicker" id="from_date" placeholder="From Date">
									  </div>
									  <div class="col-md-5">
										<input type="text" class="form-control datepicker" id="to_date" placeholder="To Date">
									  </div>
									  <div class="col-md-2">
										<button class="btn btn-primary" type="button" id="search_report_button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> &nbsp;Show Report</button>
									  </div>
									</div>
								  </fieldset>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12" style="text-align:center;">
										<h2>Two Angels</h2>
										<h3>20-05-2015 &nbsp;&nbsp;To &nbsp;&nbsp;25-05-2015</h3>
									</div>
								</div>
								<h2>Sell Report</h2><hr/>
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th>Sell</th>
									  <th>Discount</th>
									  <th>Paid</th>
									  <th>Due</th>
									  <th>Purchase</th>
									  <th>Profit</th>
									</tr>
								  </thead>
								  <tbody id="sell_report_by_date">
									<tr>
										<td>15-04-2015</td>
										<td>1000</td>
										<td>100</td>
										<td>750</td>
										<td>150</td>
										<td>500</td>
										<td>350</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>1000</td>
										<td>100</td>
										<td>750</td>
										<td>150</td>
										<td>500</td>
										<td>350</td>
									</tr>
								  </tbody>
								</table>

								<h2>Expense Report</h2><hr/>
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th>name</th>
									  <th>Note</th>
									  <th>Amount</th>
									</tr>
								  </thead>
								  <tbody id="expense_report_by_date">
									<tr>
										<td>15-04-2015</td>
										<td>Rickshaw</td>
										<td>desc</td>
										<td>20</td>
									</tr>
									<tr>
										<td colspan="3" style="text-align:right;">Total</td>
										<td>2000</td>
									</tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){


				$("#search_report_button").click(function(){

					

					var from = $("#from_date").val();
					var to = $("#to_date").val();



				});

				

			});
		</script>

@stop