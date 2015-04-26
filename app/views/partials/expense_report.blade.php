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
										<h4>Expense Report</h4>
										<h3 id="report_show_date"></h3>
									</div>
								</div>
								
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th>Expense name</th>
									  <th>Note</th>
									  <th>Amount</th>
									</tr>
								  </thead>
								  <tbody id="expense_report">
									<tr>
										<td>15-04-2015</td>
										<td>ridckshaw</td>
										<td>boyra bazar</td>
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

				$("#expense_report").html("<h4>No data to Show</h4>");

				$("#search_report_button").click(function(){
					var from = $("#from_date").val();
					var to = $("#to_date").val();

					var from_array = from.split("-");
					var to_array = to.split("-");

					var params = {};
					params.start_date = from_array[2] + '-' + from_array[1] + '-' + from_array[0];
					params.end_date = to_array[2] + '-' + to_array[1] + '-' + to_array[0];

					$("#report_show_date").html(from + " &nbsp;&nbsp;To &nbsp;&nbsp;" + to);

					$.post("{{ URL::route('postExpenseReport') }}", params, function(data){

						$("#expense_report").html("");

						var expense_found = false;
						var total_expense = 0;

						for(index in data){

							expense_found = true;
							var date = data[index].date.split("-");
							total_expense += parseFloat(data[index].amount);

							$("#expense_report").append('<tr><td>'+ date[2] + '-' + date[1] + '-' + date[0] +'</td><td>'+ data[index].name + '</td><td>'+ data[index].note + '</td><td>'+ data[index].amount + '</td></tr>');

						}

						$("#expense_report").append('<tr><td colspan="3" style="text-align:right">Total</td><td>'+ total_expense +'</td></tr>');

						if(!expense_found){
							$("#expense_report").html("<h4>No data to Show</h4>");
						}

					});
				});


			});
		</script>

@stop