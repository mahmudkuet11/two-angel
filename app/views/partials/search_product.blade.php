@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-6 col-md-offset-3">
									<select class="form-control" name="" id="search_product_select">
										<option value="">Select Product</option>
										@foreach(ProductHelper::getAllCategories() as $cat)
											<option value="{{ $cat }}">{{ $cat }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th>Product Category</th>
									  <th>Remaining Quantity</th>
									  <th>Supplier</th>
									  <th>Purchase Price</th>
									  <th>Sell Price</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
										<td>20-04-2015</td>
										<td>lux 20g</td>
										<td>30</td>
										<td>raju</td>
										<td>30</td>
										<td>35</td>
									</tr>
									<tr>
										<td>20-04-2015</td>
										<td>lux 20g</td>
										<td>30</td>
										<td>raju</td>
										<td>30</td>
										<td>35</td>
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

				$("#search_product_select").change(function(){
					if($(this).val() == "") return;

					var cat = $(this).val();

					$.get("{{ URL::route('getProductByCategory') }}/" + cat, function(data){
						console.log(data);
					});

				});

			});

		</script>

@stop