@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-3">
									<select class="form-control" name="" id="">
										<option value="">Select Product</option>
										<option value="">Lux 20gm</option>
										<option value="">rupchada 5 liter</option>
										<option value="">meril 50gm</option>
									</select>
								</div>
								<div class="col-md-9">
									<select class="form-control" name="" id="">
										<option value="">Select Date</option>
										<option value="">20-04-2015</option>
										<option value="">20-04-2015</option>
										<option value="">20-04-2015</option>
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
									  <th>Product Name</th>
									  <th>Quantity</th>
									  <th>Warning Quantity</th>
									  <th>Supplier</th>
									  <th>Manufacturer</th>
									  <th>Purchase Price</th>
									  <th>Sell Price</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
										<td>Lux 20gm</td>
										<td>40</td>
										<td>5</td>
										<td>Raju</td>
										<td>Uniliver</td>
										<td>35</td>
										<td>48</td>
									</tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

@stop