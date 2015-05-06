@extends('layout.main')

@section('content')		

		<div class="container">
			<div class="add_new_product_area">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal" id="add_new_product_form" method="post" action="{{ URL::route('postAddNewProduct') }}">
								  <fieldset>
									<legend>Add New Products</legend>
									<hr />
									
									@if(Session::has('msg'))
										<div class="alert alert-dismissible alert-success">
										  <button type="button" class="close" data-dismiss="alert">×</button>
										  {{ Session::get('msg') }}
										</div>
									@endif

									<div class="form-group">
									  <label for="inputBarCode" class="col-md-2 control-label">Bar Code</label>
									  <div class="col-md-10">
										<input type="text" name="barcode" class="form-control" id="inputBarCode" placeholder="Enter Bar code">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputProductCategory" class="col-md-2 control-label">Name</label>
									  <div class="col-md-10">



										<select name="category" id="inputProductCategory" class="form-control">
										<option value="">Select a category</option>

										@foreach (ProductHelper::getAllCategories() as $cat)

											<option value="{{$cat}}">{{$cat}}</option>
										@endforeach
							
										</select>
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputQty" class="col-md-2 control-label">Quantity</label>
									  <div class="col-md-10">
										<input type="number" name="quantity" class="form-control" id="inputQty" placeholder="Quantity">
									  </div>
									</div>

									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-success" id="add_new_product_btn">Add product</button>
									  </div>
									</div>

								  </fieldset>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){

				$("#add_new_product_btn").click(function(){
					if($("#inputBarCode").val() == ""){
						alert("Please enter barcode");
						return;
					}

					if($("#inputQty").val() == ""){
						alert("Please enter quantity");
						return;
					}

					if($("#inputProductCategory").val() == ""){
						alert("Please select a category");
						return;
					}


					$("#add_new_product_form").submit();
					
				});

				$("#inputBarCode").keydown(function(e){
					if(e.keyCode == 13){
						$.get("{{ URL::route('getCategoryFromBarcode') }}", {barcode:$("#inputBarCode").val()}, function(data){
							$("#inputProductCategory").val(data);
						});
					}
				});

				$("#inputProductCategory").on("change", function(){
					
					$.get("{{ URL::route('getBarcodeFromCategory') }}", {category:$(this).val()}, function(data){
							$("#inputBarCode").val(data);
					});
				});



			});
		</script>


@stop