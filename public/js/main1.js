/*
*	add new product
*/

var product = {};

$(document).ready(function(){
	
	$("#products_to_be_added_list").html("");

	$("#inputBarCode").keydown(function(e){

		if(e.keyCode == 13){
			update_products_to_be_added();
		}

	});


	/*
	*	clear button
	*/
	$("#clear_btn_add_new_product").click(function(){
		$("#inputBarCode").val("");
		$("#inputProductCategory").val("");
		$("#inputSupplier").val("");
		$("#inputPrice").val("");
		$("#inputRate").val("");
	});

	/*
	*	add button below the form
	*/
	$("#add_btn_add_new_product").click(function(){
		update_products_to_be_added();
	});


	/*
	*	add new product confirm button
	*/
	$("#add_new_product_confirm_btn").click(function(){

		var added_products = {};
		$("#products_to_be_added_list li").each(function(index){

			added_products.barcode 			= $("span.barcode", this).html();
			added_products.category 		= $("small.category", this).html();
			added_products.supplier 		= $("input.supplier", this).val();
			added_products.purchase_price 	= $("input.purchase_price", this).val();
			added_products.sell_price		= $("input.sell_price", this).val();

			console.log(added_products);
		});

	});


});

function update_products_to_be_added(){
		product.barcode 		= $("#inputBarCode").val();
		product.category 		= $("#inputProductCategory").val();
		product.supplier 		= $("#inputSupplier").val();
		product.purchase_price 	= $("#inputPrice").val();
		product.sell_price		= $("#inputRate").val();

		/*
		*	show products in the list
		*/
		$("#products_to_be_added_list").append(''+
				'<li class="list-group-item">'+
					'<span class="glyphicon glyphicon-remove add_new_product_list_remove_btn" aria-hidden="true"></span>'+
					'Bar Code: <span class="barcode">'+ product.barcode +'</span><br/>'+
					'<small class="category">'+ product.category +'</small>'+
					'<input type="hidden" value="'+ product.supplier +'" class="supplier">'+
					'<input type="hidden" value="'+ product.purchase_price +'" class="purchase_price">'+
					'<input type="hidden" value="'+ product.sell_price +'" class="sell_price">'+
			  	'</li>'+
			'');

		$("#inputBarCode").val("");


		/*
		*	remove product from sidebar list
		*/
		$(".add_new_product_list_remove_btn").click(function(){
			$(this).closest("li").hide(200, function(){
				$(this).remove();
			});
		});
}
