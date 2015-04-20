@extends('layout.main')

@section('content')

		<div class="container">
			<div class="view_product_area">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-6 col-md-offset-3">
									<select class="form-control" name="" id="search_product_select">
										<option value="">Select Product</option>
										@foreach(ProductHelper::getAllCategories() as $cat)
											<option value="{{ $cat }}">{{ $cat }}</option>
										@endforeach
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
									  <th>Date</th>
									  <th>Product Category</th>
									  <th>Remaining Quantity</th>
									  <th>Supplier</th>
									  <th>Purchase Price</th>
									  <th>Sell Price</th>
									  <th>Edit</th>
									</tr>
								  </thead>
								  <tbody id="display_product_search_result">
									
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="modal fade" id="edit_product_modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Update Price</h4>
		      </div>
		      <div class="modal-body">
				
				<blockquote id="modal_product_details">
				  <p>Product name</p>
				  <small>20-05-2015</small>
				</blockquote>

				<div class="form-group">
				  <label class="control-label" for="inputPurchasePrice">Purchase Price</label>
				  <input class="form-control" id="inputPurchasePrice" type="text" placeholder="Update purchase price">
				</div>

				<div class="form-group">
				  <label class="control-label" for="inputSellPrice">Sell Price</label>
				  <input class="form-control" id="inputSellPrice" type="text" placeholder="Update sell price">
				</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id="update_product_save_button">Save changes</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->




		<script type="text/javascript">

			$(document).ready(function(){

				$("#display_product_search_result").html("<h2>Please select a Category</h2>");

				$("#search_product_select").change(function(){
					if($(this).val() == ""){
						$("#display_product_search_result").html("<h2>Please select a Category</h2>");
						return;
					}

					var cat = $(this).val();
					$("#display_product_search_result").html("");
					$.get("{{ URL::route('getHome') }}/product/get/"+cat, function(data){
						var results = JSON.parse(data);
						var found = false;
						for(res in results){
							found = true;
							$("#display_product_search_result").append('<tr><td class="date">'+ results[res].date +'</td><td class="category">'+ results[res].category +'</td><td>'+ results[res].quantity +'</td><td>'+ results[res].suppllier +'</td><td class="purchase_price">'+ results[res].purchase_price +'</td><td class="sell_price">'+ results[res].sell_price +'</td><td><a href="#" class="product_edit_button" onclick="edit_product_button_click_handler(this)"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td></tr>');



								/*$(".product_edit_button").click(function(e){
									e.preventDefault();
									$("#edit_product_modal").modal({
										'show':true
									});
									//alert($(this).closest(".date").html());
								});*/

						}
						if(!found){
							$("#display_product_search_result").html("<h2>No Data Found !!!</h2>");
						}
					});

				});


				$("#update_product_save_button").click(function(){
					$.post("");
				});

			});

			function edit_product_button_click_handler(obj){
				$("#edit_product_modal").modal({
					'show':true
				});
				var obj1 = $(obj).closest("tr");
				var category = $(".category", obj1).html();
				var date = $(".date", obj1).html();
				var purchase_price = $(".purchase_price", obj1).html();
				var sell_price = $(".sell_price", obj1).html();

				$("#modal_product_details p").html(category);
				$("#modal_product_details small").html(date);

				$("#inputPurchasePrice").val(purchase_price);
				$("#inputSellPrice").val(sell_price);
			}

		</script>

@stop