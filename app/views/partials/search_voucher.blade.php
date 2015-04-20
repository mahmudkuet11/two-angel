@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								  <legend>Search Voucher</legend>
								  <fieldset>
									<div class="form-group">
									  <div class="col-md-3">
										  <select name="" id="search_voucher_select" class="form-control">
											<option value="date">Search By Date</option>
											<option value="name">Search By Customer Name</option>
										  </select>
									  </div>
									  <div class="col-md-7">
										<input type="text" class="form-control datepicker" id="input_filter" placeholder="Select Date">
									  </div>
									  <div class="col-md-2">
										<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> &nbsp;Search</button>
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
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>Voucher ID</th>
									  <th>Date</th>
									  <th>Customer Name</th>
									  <th>Address</th>
									  <th>Total Amount</th>
									  <th>Discount</th>
									  <th>Due</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
										<td><a href="">123</a></td>
										<td>22-03-2015</td>
										<td>MD. Mahmudur Rahman</td>
										<td>Uttara, Dhaka</td>
										<td>500</td>
										<td>400</td>
										<td>100</td>
									</tr>
									<tr>
										<td><a href="">123</a></td>
										<td>22-03-2015</td>
										<td>MD. Mahmudur Rahman</td>
										<td>Uttara, Dhaka</td>
										<td>500</td>
										<td>400</td>
										<td>100</td>
									</tr>
									<tr>
										<td><a href="">123</a></td>
										<td>22-03-2015</td>
										<td>MD. Mahmudur Rahman</td>
										<td>Uttara, Dhaka</td>
										<td>500</td>
										<td>400</td>
										<td>100</td>
									</tr>
									<tr>
										<td><a href="">123</a></td>
										<td>22-03-2015</td>
										<td>MD. Mahmudur Rahman</td>
										<td>Uttara, Dhaka</td>
										<td>500</td>
										<td>400</td>
										<td>100</td>
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