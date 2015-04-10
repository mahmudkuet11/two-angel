@extends('layout.main')

@section('content')		

		<div class="container">
			<div class="add_new_product_area">
				<div class="row">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal">
								  <fieldset>
									<legend>Add New Products</legend>
									<hr />
									<div class="form-group">
									  <label for="inputBarCode" class="col-md-2 control-label">Bar Code</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputBarCode" placeholder="Bar code">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputProductCategory" class="col-md-2 control-label">Name</label>
									  <div class="col-md-10">
										<select name="" id="inputProductCategory" class="form-control">
											<option value="">Select a category</option>
											<option value="">option 1</option>
											<option value="">option 2</option>
											<option value="">option 3</option>
										</select>
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputSupplier" class="col-md-2 control-label">Supplier</label>
									  <div class="col-md-10">
										<select name="" id="inputSupplier" class="form-control">
											<option value="">Select Supplier</option>
											<option value="">option 1</option>
											<option value="">option 2</option>
											<option value="">option 3</option>
										</select>
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputPrice" class="col-md-2 control-label">Purchase Price</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputPrice" placeholder="Purchase Price">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputRate" class="col-md-2 control-label">Sell's Price</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputRate" placeholder="Sell's Price">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputDate" class="col-md-2 control-label">Date</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputDate" placeholder="Date">
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
					<div class="col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading"><h2>Products to be added (10)</h2></div>
						  <div class="panel-body">
							<ul class="list-group" id="products_to_be_added_list">
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							  <li class="list-group-item">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Dapibus ac facilisis in
							  </li>
							</ul>
							
							<button class="btn btn-primary">Confirm</button>
							
						  </div>
						</div>
					</div>
				</div>
			</div>

		</div>

@stop