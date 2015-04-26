<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="{{ URL::route('getHome') }}"><img src="{{ URL::route('getHome') }}/images/logo.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sell <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getNewVouchar') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;New Voucher</a></li>
            <li><a href="{{ URL::route('getSearchVouchar') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Search Voucher</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stock <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getAddNewProduct') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Add New Product</a></li>
			      <li class="divider"></li>
            <li><a href="{{ URL::route('getSearchProduct') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Search Product</a></li>
            
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Expense <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getAddNewExpense') }}"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;&nbsp;Other Expense</a></li>
          </ul>
    </li>

    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getAddNewCategory') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Add New Category</a></li>
            <li><a href="{{ URL::route('getAddNewSupplier') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Add New Supplier</a></li>


            <li><a href="{{ URL::route('getBarcode') }}"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>&nbsp;&nbsp;Create Barcode</a></li>

          </ul>
    </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Report <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getReportByDate') }}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Net Profit Report By Date</a></li>

            <li><a href="{{ URL::route('getDueReport') }}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Due Report</a></li>

            <li><a href="{{ URL::route('getExpenseReport') }}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Expense Report</a></li>

            <li><a href="{{ URL::route('getRemainingProductReport') }}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Remaining Products Report</a></li>

          </ul>
    </li>
      <?php
          $count = 0;
          foreach (ProductHelper::getCountLowStock() as $a) {
            $count = $a->count;
          }
      ?>
    {{ $count > 0 ? '<li><a href="'. URL::route('getLowStockCategory') .'">Low Stock&nbsp;<span class="badge">'.$count.'</span></a></li>' : '' }}
    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="{{ URL::route('getLogout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;Logout</a></li>
        <li><a href="{{ URL::route('getchangePassword') }}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Change Password</a></li>
			  </ul>
			</li>
		</ul>
    </div>
  </div>
</nav>