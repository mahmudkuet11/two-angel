<form action="{{ URL::route('test') }}" method="post">
	<input type="text" name="products" placeholder="products"><br/>
	<input type="text" name="customer_name" placeholder="customer_name"><br/>
	<input type="text" name="address" placeholder="address"><br/>
	<input type="text" name="phone" placeholder="phone"><br/>
	<input type="text" name="total_price" placeholder="total_price"><br/>
	<input type="submit" value="Submit">
</form>