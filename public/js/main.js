$(document).ready(function(){
	/*
	*	add new product button click form submit
	*/
	$("#add_new_product_btn").click(function(){
		$("#add_new_product_form").submit();
	});




	/*
	*	Vouchar bar code scanner and update cart list
	*/

	$("#inputBarCode").keydown(function(e){

		var barcode = $('#inputBarCode').val();

		if(e.keyCode == 13){
			alert(barcode);
			$.post('http://localhost/two-angel/public/pd', {barcode:barcode, function(data){
				alert(data);
			}});
		}

	});

});