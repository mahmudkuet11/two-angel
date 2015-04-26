@extends('layout.main')

@section('content')

<div class="container">

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
							<h4>Due Report</h4>
						</div>
					</div>

					<table class="table table-striped table-hover ">
					  <thead>
						<tr>
						  <th>Voucher ID</th>
						  <th>Date</th>
						  <th>Customer Name</th>
						  <th>Address</th>
						  <th>Total Amount</th>
						  <th>Discount</th>
						  <th>Paid</th>
						  <th>Due</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php $total_due = 0 ?>
					  	@foreach(VoucherHelper::getDue() as $due)
							<tr>
								<td><a href="{{ URL::route('getViewVouchar', $due->id) }}">{{ $due->id }}</a></td>
								<td>{{ $due->date }}</td>
								<td>{{ $due->customer_name }}</td>
								<td>{{ $due->address }}</td>
								<td>{{ $due->total_price }}</td>
								<td>{{ $due->discount }}</td>
								<td>{{ $due->paid }}</td>
								<?php $total_due += $due->total_price - $due->paid - $due->discount ?>
								<td>{{ $due->total_price - $due->paid - $due->discount }}</td>
							</tr>
					  	@endforeach

							  	<tr>
							  		<td colspan="7" style="text-align:right">Total</td>
							  		<td>{{ $total_due }}</td>
							  	</tr>

					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop