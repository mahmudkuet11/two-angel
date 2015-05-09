@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row" id="hideable_row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal">
								  <fieldset>
									<legend>Barcode Generation</legend>
								  </fieldset>
								  <div class="form-group">

									  <label for="inputText" class="col-md-2 control-label">Barcode</label>
									  <div class="col-md-10">
										<input type="text" name="text" class="form-control" id="inputText" placeholder="Enter Barcode Text for Product">
									  </div>
								   </div>
								   	<div class="form-group">
									  <label for="inputProductCategory" class="col-md-2 control-label">Product Name</label>
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
									  <label for="inputPrice" class="col-md-2 control-label">Price</label>
									  <div class="col-md-10">
										<input type="text" name="price" class="form-control" id="inputPrice" placeholder="Enter Product Price">
									  </div>
								   </div>
								   <div class="form-group">
									  <label for="inputNum" class="col-md-2 control-label">Total Barcode</label>
									  <div class="col-md-10">
										<input type="text" name="num" class="form-control" id="inputNum" placeholder="Enter Number of Barcode">
									  </div>
								   </div>
								   <div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-primary" id="show_barcode_btn">Show Barcode</button>
									  </div>
									</div>
									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-primary" id="show_all_btn">Show All Product Barcode</button>
									  </div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								
								<div class="all_barcode">
									
								</div>

							</div>
						</div>
					</div>
				</div>
		</div>

		<script type="text/javascript">

		$(document).ready(function(){

			$("#show_barcode_btn").click(function(){
				var num = $("#inputNum").val();
				var price = $("#inputPrice").val();
				var text = $("#inputText").val();
					//var date = new Date();
				//var barcode = date.getTime();

				for(i = 0; i < num; i++){
					//$(".all_barcode").append('<section ');
					//console.log(str);
					//$(".all_barcode").append('><label>Price: 2.56 BDT</label><br/><br/>');
					$(".all_barcode").append('<div style="float:left;margin-right:20px;margin-bottom:20px"> <span style="font-size:.8em;">Price:'+price+" BDT</span><br/>"+
						'<img  src="http://localhost/ta/barcode/test_1D.php?barcode='+ text +'" /></div>');
				
				}
			});
			$("#show_all_btn").click(function(){
				$(".all_barcode").html("");
				$.get("{{ URL::route('getAllBarcodeWithPrice') }}", "", function(data){
						dt = JSON.parse(data);
						for(i=0; i<dt.length; i++){
						 $(".all_barcode").append('<div style="float:left;margin-right:20px;margin-bottom:20px"> <span style="font-size:.8em;">Price:'+dt[i].sell_price+" BDT</span><br/>"+
						'<img  src="http://localhost/ta/barcode/test_1D.php?barcode='+ dt[i].barcode +'" /></div>');
				
						}
					});
			
					
				
			});
				$("#inputText").keydown(function(e){
					if(e.keyCode == 13|| e.keyCode==9){
						$.get("{{ URL::route('getCategoryFromBarcode') }}", {barcode:$("#inputText").val()}, function(data){
							$("#inputProductCategory").val(data);
						});
						$.get("{{ URL::route('getPrice') }}", {barcode:$("#inputText").val()}, function(data){
							$("#inputPrice").val(data);
						});
					}
				});
				$("#inputProductCategory").on("change", function(){
					
					$.get("{{ URL::route('getBarcodeFromCategory') }}", {category:$(this).val()}, function(data){
							$("#inputText").val(data);
					});
					$.get("{{ URL::route('getPrice') }}", {category:$(this).val()}, function(data){
							$("#inputPrice").val(data);
					});
				});

		});

		</script>

@stop