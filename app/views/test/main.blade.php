<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		}

		li {
		    float: left;
		}

		a {
		    display: block;
		    width: 80px;
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<div>
		<ul>
			<li><a href="{{ URL::route('/test/product') }}">Product</a></li>
			<li><a href="{{ URL::route('/test/expense') }}">Expense</a></li>
	    	 <li><a href="{{ URL::route('/test/order') }}">Order</a></li>
			 <li><a href="{{ URL::route('/test/category') }}">Category</a></li>
			 <li><a href="{{ URL::route('/test/supplier') }}">Supplier</a></li>
		 	 <li><a href="{{ URL::route('/test/voucher') }}">Voucher</a></li>
		</ul> 
	</div>
	<div>
		   @yield('content')
	</div>
</body>
</html>