@extends('test.main')

@section('content')

<form action="{{ URL::route('/test/order') }}"" method="post">
	<input type="text" name="voucher_id" placeholder="voucher_id"><br/>
	<input type="text" name="barcode" placeholder="barcode"><br/>
	<input type="text" name="price" placeholder="price"><br/>
	<input type="submit" value="Submit">
</form>


@stop
