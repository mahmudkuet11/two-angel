@extends('test.main')

@section('content')

<form action="{{ URL::route('/test/product') }}"" method="post">
	<input type="text" name="barcode" placeholder="barcode"><br/>
	<input type="text" name="category" placeholder="category"><br/>
	<input type="text" name="suppllier" placeholder="suppllier"><br/>
	<input type="text" name="purchase_price" placeholder="purchase_price"><br/>
	<input type="text" name="sell_price" placeholder="sell_price"><br/>
	<input type="submit" value="Submit">
</form>


@stop
