@extends('test.main')

@section('content')

<form action="{{ URL::route('/test/expense') }}"" method="post">
	<input type="text" name="name" placeholder="name"><br/>
	<input type="text" name="note" placeholder="note"><br/>
	<input type="text" name="amount" placeholder="amount"><br/>
	<input type="submit" value="Submit">
</form>

@stop
