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
										<div class="logo_on_report">
											<img src="{{ URL::route('getHome') }}/images/logo-b.png">
										</div>
										<h2>New Two Angels</h2>
										<h4>Sell & Expense Report</h4>
										<h3 id="report_show_date"></h3>
									</div>
								</div>
								<h2>Sell Report</h2><hr/>
								<table class="table table-striped table-hover">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th>Sell</th>
									  <th>Discount</th>
									  <th>Paid</th>
									  <th>Due</th>
									  <th>Purchase</th>
									  <th>Revenue</th>
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
									  <th>Total Expense</th>
									</tr>
								  </thead>
								  <tbody id="expense_report_by_date">
									<tr>
										<td>15-04-2015</td>
										<td>200</td>
									</tr>
									<tr>
										<td colspan="3" style="text-align:right;">Total</td>
										<td>2000</td>
									</tr>
								  </tbody>
								</table>
								
								<h2>Final Report</h2><hr>
								<table class="table table-striped table-hover">
									<tr>
										<td>Total Revenue</td>
										<td id="total_revenue"></td>
									</tr>
									<tr>
										<td>Total Expense</td>
										<td id="total_expense"></td>
									</tr>
									<tr>
										<td>Net Profit</td>
										<td id="net_profit"></td>
									</tr>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){


				$("#sell_report_by_date").html("<h4>No data to Show</h4>");
				$("#expense_report_by_date").html("<h4>No data to Show</h4>");

				$("#search_report_button").click(function(){

					/*
					*	voucher table
					*/

					$("#sell_report_by_date").html("");

					var from = $("#from_date").val();
					var to = $("#to_date").val();

					var from_array = from.split("-");
					var to_array = to.split("-");

					var params = {};
					params.start_date = from_array[2] + '-' + from_array[1] + '-' + from_array[0];
					params.end_date = to_array[2] + '-' + to_array[1] + '-' + to_array[0];

					$("#report_show_date").html(from + " &nbsp;&nbsp;To &nbsp;&nbsp;" + to);
					var response;
					var total = {sell:0, discount:0, paid:0, due:0, purchase:0, profit:0};
					$.post("{{ URL::route('postReportByDate') }}", params, function(data){
						response = JSON.parse(data).expenses;
						var vouchers = JSON.parse(data).vouchers;
						var voucher_found = false;
						
						

						for(voucher in vouchers){

							voucher_found = true;
							var date = vouchers[voucher].date.split("-");

							var profit = vouchers[voucher].total_product_sell_price - vouchers[voucher].total_discount - vouchers[voucher].total_purchase_cost;

							total.sell += parseFloat(vouchers[voucher].total_product_sell_price);
							total.discount += parseFloat(vouchers[voucher].total_discount);
							total.paid += parseFloat(vouchers[voucher].total_paid);
							total.due += parseFloat(vouchers[voucher].total_due);
							total.purchase += parseFloat(vouchers[voucher].total_purchase_cost);
							total.profit += parseFloat(profit);


							$("#sell_report_by_date").append('<tr><td>'+ date[2] + '-' + date[1] + '-' + date[0] +'</td><td>'+ vouchers[voucher].total_product_sell_price +'</td><td>'+ vouchers[voucher].total_discount +'</td><td>'+ vouchers[voucher].total_paid +'</td><td>'+ vouchers[voucher].total_due +'</td><td>'+ vouchers[voucher].total_purchase_cost +'</td><td>'+ profit +'</td></tr>');
						}

						$("#sell_report_by_date").append('<tr><td>Total</td><td>'+ total.sell +'</td><td>'+ total.discount +'</td><td>'+ total.paid +'</td><td>'+ total.due +'</td><td>'+ total.purchase +'</td><td>'+ total.profit +'</td></tr>');

						if(!voucher_found){
							$("#sell_report_by_date").html("<tr><td></td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>");
						}


				   /*
					*	expense table
					*/

					$("#expense_report_by_date").html("");

					var expense_found = false;
					var total_expense = 0;
					for(index in response){
						expense_found = true;
						var date = response[index].date.split("-");
						total_expense += parseFloat(response[index].total_expense);
						$("#expense_report_by_date").append('<tr><td>'+ date[2] + '-' + date[1] + '-' + date[0] +'</td><td>'+ response[index].total_expense + '</td></tr>');
					}

					$("#expense_report_by_date").append("<tr><td>Total</td><td>"+ total_expense +"</td></tr>");

					if(!expense_found){
						$("#expense_report_by_date").html("<tr><td></td><td>0</td></tr>");
					}

					$("#total_revenue").html(total.profit);
					$("#total_expense").html(total_expense);
					$("#net_profit").html(total.profit - total_expense);


					});


				});

				

			});
		</script>

@stop