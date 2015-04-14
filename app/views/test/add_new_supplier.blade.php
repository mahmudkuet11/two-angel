@extends('test.main')

@section('content')

<form action="{{ URL::route('/test/supplier') }}"" method="post">
	<input type="text" name="name" placeholder="name"><br/>
	<input type="text" name="phone" placeholder="phone"><br/>
	<input type="text" name="address" placeholder="address"><br/>
	<input type="submit" value="Submit">
</form>


@stop
