@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">

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
										<h4>Remaing Products Report</h4>
										<h3 id="report_show_date"></h3>
									</div>
								</div>
								
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Purchase price</th>
									  <th>Sell price</th>
									  <th>quantity</th>
									</tr>
								  </thead>
								  <tbody id="reaminig_products_report">
									<tr>
										
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

				$("#reaminig_products_report").html("<h4>No data to Show</h4>");

					$.post("{{ URL::route('postRemainingProductReport') }}", {}, function(data){

						$("#reaminig_products_report").html("");

						var found = false;

						for(index in data){

							found = true;

							$("#reaminig_products_report").append('<tr><td>'+ data[index].name + '</td><td>'+ data[index].purchase_price + '</td><td>'+ data[index].sell_price + '</td><td>'+ data[index].quantity + '</td></tr>');

						}

						if(!found){
							$("#reaminig_products_report").html("<h4>No data to Show</h4>");
						}

					});



			});
		</script>

@stop