@extends('layout.main')

@section('content')

		<div class="container">
			<div class="add_new_product_area">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
									<legend>New Voucher</legend>

									<div class="form-group">
									  <label for="inputName" class="col-md-2 control-label">Name</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="Customer Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputPhone" class="col-md-2 control-label">Phone</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputAddress" class="col-md-2 control-label">Address</label>
									  <div class="col-md-10">
										<textarea class="form-control" id="inputAddress"> </textarea>
									  </div>
									</div>

							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-body">
								
									<div class="form-group">
									  <label for="inputBarCode" class="col-md-2 control-label">Bar Code</label>
									  <div class="col-md-10">
										<input type="text" class="form-control" id="inputBarCode" placeholder="Product Bar Code">
									  </div>
									</div>
								<table class="table table-striped table-hover ">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Product Name</th>
									  <th>Quantity</th>
									  <th>Price</th>
									</tr>
								  </thead>
								  <tbody id="cart">
									{{-- <tr>
									  <td>1</td>
									  <td>Lux</td>
									  <td>2</td>
									  <td>35 * 2</td>
									</tr> --}}
								  </tbody>
								</table>
								<span id="barcode_list" style="display:none">
									
								</span>
								<h2 class="text-primary">Total: <span id="total_price">0</span></h2>
									<div class="form-group">
									  <label for="inputDiscount" class="col-md-2 control-label">Discount</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputDiscount" value="0">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputPaid" class="col-md-2 control-label">Paid Amount</label>
									  <div class="col-md-10">
										<input type="number" class="form-control" id="inputPaid" placeholder="Paid Amount">
									  </div>
									</div>
									<div class="form-group">
									  <label for="inputDue" class="col-md-2 control-label">Due Amount</label>
									  <div class="col-md-10">
										<input disabled="" type="number" class="form-control" id="inputDue" value="0">
									  </div>
									</div> 
									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<br/><button class="btn btn-primary" type="button" id="generate_vouchar">Generate Voucher</button>
									  </div>
									</div>
								
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){

				/*
				*	Vouchar bar code scanner and update cart list
				*/
				var count = 0;
				var qty = 0;
				var total = 0.0;
				$("#inputBarCode").keydown(function(e){

					var barcode = $('#inputBarCode').val();
					if(e.keyCode == 13){

						var found = false;
						$("#barcode_list span").each(function(index){
							if($(this).html() == $("#inputBarCode").val()){
								found = true;
							}
						});

						if(found){
							alert("already you have added this product");
							$("#inputBarCode").val("");
							return;
						}

						$("#inputBarCode").val("");

						$.get('http://localhost/ta/public/pd?barcode='+barcode, function(data, status){

								$("#barcode_list").append('<span>'+ data[0].barcode +'</span>');

								var found = false;

								$("#cart tr").each(function(index){
									//console.log($(".category", this).html()); return;
									if($(".category", this).html() == data[0].category){
										found = true;
										total += parseFloat(data[0].sell_price);
										qty = $('.quantity', this).html();
										$('.quantity', this).html( parseInt(qty) + 1 );


									}

								});


								if(found == false){
									count++;
									total += parseFloat(data[0].sell_price);
									$("#cart").append('<tr><td class="sl_no">'+ count +'</td><td class="category">'+ data[0].category +'</td><td class="quantity">1</td><td class="price"><span class="unit_price">'+ data[0].sell_price +'</span> * <span class="quantity">1</span></td></tr>');
								}

								$('#total_price').html(total);

						});
					}

				});


				$("#inputPaid").keyup(function(e){
					var total 		= parseFloat($("#total_price").html());
					var discount 	= parseFloat($("#inputDiscount").val());
					var paid 		= parseFloat($("#inputPaid").val()); 


					$("#inputDue").val(total - discount - paid);
				});	

				$("#inputDiscount").keyup(function(e){
					var total 		= parseFloat($("#total_price").html());
					var discount 	= parseFloat($("#inputDiscount").val());
					var paid 		= parseFloat($("#inputPaid").val()); 


					$("#inputDue").val(total - discount - paid);
				});	



				/*
				*	generate vouchar button click
				*/
				$("#generate_vouchar").click(function(){

					if($("#inputName").val() == ""){
						alert("please enter customer's name");
						return;
					}

					var pattern = /[0-9]/;
					if(!pattern.test($("#inputDiscount").val())){
						alert("invalid input in discount field");
						return;
					}
					if(!pattern.test($("#inputPaid").val())){
						alert("invalid input in paid field");
						return;
					}
					

					var vouchar = {};
					var barcode_list 	= [];
					var name 			= $("#inputName").val();
					var phone 			= $("#inputPhone").val();
					var address			= $("#inputAddress").val();
					var total 			= $("#total_price").html();
					var discount 		= $("#inputDiscount").val();
					var paid 			= $("#inputPaid").val();
					var due 			= $("#inputDue").val();
					$("#barcode_list span").each(function(index){
						barcode_list.push($(this).html());
					});
					console.log("bal");
					vouchar.name 			= name;
					vouchar.phone 			= phone;
					vouchar.address 		= address;
					vouchar.barcode_list	= JSON.stringify(barcode_list);
					vouchar.total 			= total;
					vouchar.discount 		= discount;
					vouchar.paid 			= paid;
					vouchar.due 			= due;
					
					$.post("http://localhost/ta/public/vouchar/newww", vouchar, function(data){
						//console.log(vouchar);
						console.log(data);
					});

				});


			});
		</script>

@stop