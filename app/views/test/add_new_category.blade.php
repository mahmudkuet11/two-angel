@extends('test.main')

@section('content')

<form action="{{ URL::route('/test/category') }}"" method="post">
	<input type="text" name="name" placeholder="name"><br/>
	<input type="text" name="manufacturer" placeholder="manufacturer"><br/>
	<input type="text" name="warning_quantity" placeholder="warning_quantity"><br/>
	<input type="submit" value="Submit">
</form>


@stop

