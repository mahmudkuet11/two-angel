@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="{{ URL::route('postAddNewSupplier') }}">
								  <fieldset>
									<legend>Add New Supplier</legend>
									<hr />

									@if(Session::has('msg'))
										<div class="alert alert-dismissible alert-success">
										  <button type="button" class="close" data-dismiss="alert">×</button>
										  {{ Session::get('msg') }}
										</div>
									@endif
									
									<div class="form-group">
									  <label for="inputSupplierName" class="col-md-2 control-label">Supplier Name</label>
									  <div class="col-md-10">
										<input type="text" name="name" class="form-control" id="inputSupplierName" placeholder="Enter Supplier Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputSupplierPhone" class="col-md-2 control-label">Supplier Phone</label>
									  <div class="col-md-10">
										<input type="text" name="phone" class="form-control" id="inputSupplierPhone" placeholder="Enter Supplier Phone">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputSupplierAddress" class="col-md-2 control-label">Supplier Address</label>
									  <div class="col-md-10">
										<textarea name="address" id="inputSupplierAddress" class="form-control"></textarea>
									  </div>
									</div>

									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="submit" class="btn btn-success">Add Supplier</button>
									  </div>
									</div>

								  </fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>

@stop