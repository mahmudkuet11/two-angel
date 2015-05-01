@extends('layout.main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped table-hover">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Name</th>
					      <th>Manufacturer</th>
					      <th>Remaining Quantity</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $count = 0; ?>
					  	@foreach(ProductHelper::getLowStockCategory() as $cat)
						    <tr>
						    	<td>{{ ++$count }}</td>
						    	<td>{{ $cat->name }}</td>
						    	<td>{{ $cat->manufacturer }}</td>
						    	<td>{{ $cat->quantity }}</td>
						    </tr>
					  	@endforeach

					  </tbody>
					</table> 
				</div>
			</div>

		</div>
	</div>
</div>


@stop