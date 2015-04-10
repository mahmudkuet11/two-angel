@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal">
								  <fieldset>
									<legend>Add New Category</legend>
									<hr />

									<div class="form-group">
									  <label for="inputCategoryName" class="col-md-2 control-label">Category Name</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputCategoryName" placeholder="Enter Category Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputManufacturer" class="col-md-2 control-label">Manufacturer</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputManufacturer" placeholder="Enter Manufacturer Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputWarningQty" class="col-md-2 control-label">Warning Quantity</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputWarningQty" placeholder="Enter Low Stock Warning Quantity">
									  </div>
									</div>

									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-primary">Clear</button>
										<button type="button" class="btn btn-success">Add</button>
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