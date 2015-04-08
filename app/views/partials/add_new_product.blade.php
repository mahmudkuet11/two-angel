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
										<input type="text" class="form-control" id="inputBarCode" placeholder="Product Bar Code">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputProductName" class="col-md-2 control-label">Name</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputProductName" placeholder="Product Name">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputProductCategory" class="col-md-2 control-label">Category</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputProductCategory" placeholder="Product Category">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputProductManufacturer" class="col-md-2 control-label">Manufacturer</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputProductManufacturer" placeholder="Product Manufacturer">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputProductSpecification" class="col-md-2 control-label">Specification</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputProductSpecification" placeholder="Product Specification eg.Kg/L/gm">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputSupplier" class="col-md-2 control-label">Supplier</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputSupplier" placeholder="Product Supplier">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputPrice" class="col-md-2 control-label">Purchase Price</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputPrice" placeholder="Purchase Price">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputRate" class="col-md-2 control-label">Sell's Rate</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputRate" placeholder="Sell's Rate">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputWarningQty" class="col-md-2 control-label">Warning Qty</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputWarningQty" placeholder="Low Stock warning">
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