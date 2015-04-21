<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Two Angels</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sell <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getNewVouchar') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;New Voucher</a></li>
            <li><a href="{{ URL::route('getSearchVouchar') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Search Voucher</a></li>
			<li><a href="view_voucher.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;&nbsp;View Voucher</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stock <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getAddNewProduct') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Add New Product</a></li>
			<li class="divider"></li>
            <li><a href="edit_product.html"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Edit Product</a></li>
            <li><a href="{{ URL::route('getSearchProduct') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Search Product</a></li>
            <li><a href="delete_product.html"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;&nbsp;Delete Product</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Expense <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
			<li><a href="purchase_cost.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;Purchase Cost</a></li>
            <li><a href="{{ URL::route('getAddNewExpense') }}"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;&nbsp;Other Expense</a></li>
          </ul>
    </li>

    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('getAddNewCategory') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Add New Category</a></li>
            <li><a href="{{ URL::route('getAddNewSupplier') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Add New Supplier</a></li>
          </ul>
    </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Report <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Report by Date</a></li>
          </ul>
        </li>
    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;Logout</a></li>
			  </ul>
			</li>
		</ul>
    </div>
  </div>
</nav>