@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form id="add_new_category_form" class="form-horizontal" method="post" action="{{ URL::route('postAddNewCategory') }}">
								  <fieldset>
									<legend>Add New Category</legend>
									<hr />

									@if(Session::has('msg'))
										<div class="alert alert-dismissible alert-success">
										  <button type="button" class="close" data-dismiss="alert">×</button>
										  {{ Session::get('msg') }}
										</div>
									@endif
									
									<div class="form-group">
									  <label for="inputCategoryName" class="col-md-2 control-label">Category Name</label>
									  <div class="col-md-10">
										<input type="text" name="name" class="form-control" id="inputCategoryName" placeholder="Enter Category Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputBarcode" class="col-md-2 control-label">Barcode</label>
									  <div class="col-md-10">
										<input type="text" name="barcode" class="form-control" id="inputBarcode" placeholder="Enter Barcode">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputPurchasePrice" class="col-md-2 control-label">Purchase price</label>
									  <div class="col-md-10">
										<input type="number" name="purchase_price" class="form-control" id="inputPurchasePrice" placeholder="Enter purchase price">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputSellPrice" class="col-md-2 control-label">Sell price</label>
									  <div class="col-md-10">
										<input type="number" name="sell_price" class="form-control" id="inputSellPrice" placeholder="Enter sell price">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputUnit" class="col-md-2 control-label">Unit</label>
									  <div class="col-md-10">
										<input type="text" name="unit" class="form-control" id="inputUnit" placeholder="ex: kg/Ltr/gm/cm">
									  </div>
									</div>


									<div class="form-group">
									  <label for="inputManufacturer" class="col-md-2 control-label">Manufacturer</label>
									  <div class="col-md-10">
										<input type="text" name="manufacturer" class="form-control" id="inputManufacturer" placeholder="Enter Manufacturer Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputWarningQty" class="col-md-2 control-label">Warning Quantity</label>
									  <div class="col-md-10">
										<input type="number" name="warning_quantity" class="form-control" id="inputWarningQty" placeholder="Enter Low Stock Warning Quantity">
									  </div>
									</div>

									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-primary" id="add_new_category_button">Add Category</button>
									  </div>
									</div>

								  </fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>

		<script type="text/javascript">


			$(document).ready(function(){

				$("#add_new_category_button").click(function(){
					if($("#inputCategoryName").val() == ""){
						alert("please enter category name");
						return;
					}


					if($("#inputWarningQty").val() == ""){
						alert("please enter warning quantity");
						return;
					}

					$("#add_new_category_form").submit();
				});



			});


		</script>

@stop