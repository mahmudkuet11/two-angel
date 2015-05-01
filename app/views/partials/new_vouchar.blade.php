@extends('layout.main')

@section('content')

		<div class="container">
			<div class="add_new_product_area">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">


							<div class="row" id="final_invoice">
								<div class="col-md-12">
									<div class="logo_on_report">
										<img src="{{ URL::route('getHome') }}/images/logo-b.png">
									</div>
									<h3>New Two Angels Super Shop</h3>
									<p>
										Sheikh Sahid Villa <br/>
										646 Mozgunni R/A, Boyra main road, Khulna<br/>
										Cell: +88-01535-453153<br/>
										Date: <span id="final_voucher_date"></span><br/>
										===============================================
									</p>
									<table class="table table-striped table-hover" id="">
									  <thead>
									    <tr>
									      <th>Item</th>
									      <th>Qty</th>
									      <th>Amount</th>
									    </tr>
									  </thead>
									  <tbody id="final_invoice_table">
									    <tr>
									    	<td>lux 20g</td>
									    	<td>2</td>
									    	<td>25 X 2</td>
									    </tr>
									    <tr>
									    	<td>lux 20g</td>
									    	<td>2</td>
									    	<td>25 X 2</td>
									    </tr>
									    <tr>
									    	<td colspan="2" style="text-align:right">Total</td>
									    	<td>200</td>
									    </tr>
									    <tr>
									    	<td colspan="2" style="text-align:right">Discount</td>
									    	<td>20</td>
									    </tr>
									    <tr>
									    	<td colspan="2" style="text-align:right">Paid</td>
									    	<td>150</td>
									    </tr>
									    <tr>
									    	<td colspan="2" style="text-align:right">Due</td>
									    	<td>50</td>
									    </tr>
									  </tbody>
									</table>
									<div class="row">
										<div class="col-md-12">
											===============================================<br/>
											Purchased by <span id="invoice_customer_name"></span><br/>
											===============================================<br/>
											Like us on www.facebook.com/2angels.supershop<br/>
											===============================================<br/>
											Software Developped By UniTech4U (+88-01611-200027)
										</div>
									</div>
									

								</div>
							</div>

 



							<div id="hide_able1">

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

						</div>
						
						<div class="panel panel-default" id="hide_able2">
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


				$("#final_invoice").hide();

				/*
				*	Vouchar bar code scanner and update cart list
				*/
				var count = 0;
				var qty = 0;
				var total = 0.0;
				$("#inputBarCode").keydown(function(e){

					var barcode = $('#inputBarCode').val();
					if(e.keyCode == 13){

						/*var found = false;
						$("#barcode_list span").each(function(index){
							if($(this).html() == $("#inputBarCode").val()){
								found = true;
							}
						});

						if(found){
							alert("already you have added this product");
							$("#inputBarCode").val("");
							return;
						}*/

						$("#inputBarCode").val("");

						$.get('http://localhost/ta/public/pd?barcode='+barcode, function(data, status){

								$("#barcode_list").append('<span>'+ data[0].barcode +'</span>');

								var found = false;

								$("#cart tr").each(function(index){
									//console.log($(".category", this).html()); return;
									if($(".category", this).html() == data[0].name){
										found = true;
										total += parseFloat(data[0].sell_price);
										qty = $('.quantity', this).html();
										$('.quantity', this).html( parseInt(qty) + 1 );


									}

								});


								if(found == false){
									count++;
									total += parseFloat(data[0].sell_price);
									$("#cart").append('<tr><td class="sl_no">'+ count +'</td><td class="category">'+ data[0].name +'</td><td class="quantity">1</td><td class="price"><span class="unit_price">'+ data[0].sell_price +'</span> * <span class="quantity">1</span></td></tr>');
								}

								$('#total_price').html(total);

								$("#inputPaid").val(total);
								$("#inputDiscount").val(0);


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


					$("#inputPaid").val(total - discount);
					$("#inputDue").val(0);
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
						alert("invalid input in paid amount field");
						return;
					}

					if($("#inputPaid").val() == ""){
						alert("please enter paid amount");
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
					vouchar.name 			= name;
					vouchar.phone 			= phone;
					vouchar.address 		= address;
					vouchar.barcode_list	= JSON.stringify(barcode_list);
					
					vouchar.total 			= total;
					vouchar.discount 		= discount;
					vouchar.paid 			= paid;
					vouchar.due 			= due;
					
					$.post("{{ URL::route('postConfirmVoucher') }}", vouchar, function(data){
						
						$("#final_invoice").show();
						$("#hide_able1").hide();
						$("#hide_able2").hide();

						if(data == "Success"){
							

							$("#final_invoice_table").html("");
							var items = {};
							$("#cart tr").each(function(index){
								items.cat = $(".category", this).html();
								items.qty = $(".quantity", this).html();
								items.unit_price = $(".unit_price", this).html();
								$("#final_invoice_table").append('<tr><td>'+ items.cat +'</td><td>'+ items.qty +'</td><td>'+ items.unit_price +' X '+ items.qty +'</td></tr>');

								
							});

							$("#final_invoice_table").append('<tr><td colspan="2" style="text-align:right">Total</td><td>'+ $("#total_price").text() +'</td></tr><tr><td colspan="2" style="text-align:right">Discount</td><td>'+ $("#inputDiscount").val() +'</td></tr><tr><td colspan="2" style="text-align:right">Paid</td><td>'+ $("#inputPaid").val() +'</td></tr><tr><td colspan="2" style="text-align:right">Due</td><td>'+ $("#inputDue").val() +'</td></tr>');

							var timestamp = new Date();
							var date = timestamp.toLocaleDateString() + " -- Time: " + timestamp.getHours() + ":" + timestamp.getMinutes() + ":" + timestamp.getSeconds();
							$("#final_voucher_date").html(date);
							$("#invoice_customer_name").html($("#inputName").val());
							//setTimeout(function(){ window.print(); }, 1000);


						}
					});

				});


			});
		</script>

@stop