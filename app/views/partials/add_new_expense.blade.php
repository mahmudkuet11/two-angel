@extends('layout.main')

@section('content')

		<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="{{ URL::route('postAddNewExpense') }}">
								  <fieldset>
									<legend>Add New Expense</legend>
									<hr />

									@if(Session::has('msg'))
										<div class="alert alert-dismissible alert-success">
										  <button type="button" class="close" data-dismiss="alert">×</button>
										  {{ Session::get('msg') }}
										</div>
									@endif
									
									<div class="form-group">
									  <label for="inputExpenseName" class="col-md-2 control-label">Expense Name</label>
									  <div class="col-md-10">
										<input type="text" name="name" class="form-control" id="inputExpenseName" placeholder="Expense Name">
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputExpenseDesc" class="col-md-2 control-label">Description</label>
									  <div class="col-md-10">
										<textarea class="form-control" name="note" id="inputExpenseDesc"></textarea>
									  </div>
									</div>

									<div class="form-group">
									  <label for="inputExpenseAmount" class="col-md-2 control-label">Amount</label>
									  <div class="col-md-10">
										<input type="number" name="amount" class="form-control" id="inputExpenseAmount" placeholder="Expense Amount">
									  </div>
									</div>

									<div class="col-md-10 col-md-offset-2">
										<button type="submit" class="btn btn-primary">Save</button>
									  </div>
									</div>

								  </fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>

@stop