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
										<input type="number" class="form-control" id="inputDue" value="0">
									  </div>
									</div> 
									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<br/><button class="btn btn-primary" type="button">Generate Voucher</button>
									  </div>
									</div>
								
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

@stop