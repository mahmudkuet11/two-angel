@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row" id="hideable_row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								
								<form class="form-horizontal">
								  <fieldset>
									<legend>Enter Number of Barcode</legend>
								  </fieldset>
								  <div class="form-group">
									  <label for="inputNum" class="col-md-2 control-label">Barcode Number</label>
									  <div class="col-md-10">
										<input type="text" name="name" class="form-control" id="inputNum" placeholder="Enter Number of Barcode">
									  </div>
								   </div>
								   <div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="button" class="btn btn-primary" id="show_barcode_btn">Show Barcode</button>
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
				var date = new Date();
				var barcode = date.getTime();

				for(i = 0; i < num; i++){
					new_barcode = barcode + i;
					//console.log(new_barcode);
					var str = new_barcode + '';
					console.log(str);
					str = str[5]+str[6]+str[7]+str[8]+str[9]+str[10]+str[11]+str[12];
					//console.log(str);
					$(".all_barcode").append('<img style="float:left;margin-right:20px;margin-bottom:20px" src="http://localhost/ta/barcode/test_1D.php?barcode='+ str +'" />');
				}
			});

		});

		</script>

@stop