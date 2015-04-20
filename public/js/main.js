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
	var count = 0;
	var qty = 0;
	var total = 0.0;
	$("#inputBarCode").keydown(function(e){

		var barcode = $('#inputBarCode').val();
		if(e.keyCode == 13){
			$.get('http://localhost/ta/public/pd?barcode='+barcode, function(data, status){

					$("#barcode_list").append('<span>'+ data[0].barcode +'</span>');

					var found = false;

					$("#cart tr").each(function(index){
						//console.log($(".category", this).html()); return;
						if($(".category", this).html() == data[0].category){
							found = true;
							total += parseFloat(data[0].sell_price);
							qty = $('.quantity', this).html();
							$('.quantity', this).html( parseInt(qty) + 1 );


						}

					});


					if(found == false){
						count++;
						total += parseFloat(data[0].sell_price);
						$("#cart").append('<tr><td class="sl_no">'+ count +'</td><td class="category">'+ data[0].category +'</td><td class="quantity">1</td><td class="price"><span class="unit_price">'+ data[0].sell_price +'</span> * <span class="quantity">1</span></td></tr>');
					}

					$('#total_price').html(total);

			});
		}

	});


	$("#inputPaid").keyup(function(e){
		var total 		= parseFloat($("#total_price").html());
		var discount 	= parseFloat($("#inputDiscount").val());
		var paid 		= parseFloat($("#inputPaid").val()); 

		console.log(total);
		console.log(discount);
		console.log(paid);

		$("#inputDue").val(total - discount - paid);
	});	



	/*
	*	generate vouchar button click
	*/
	$("#generate_vouchar").click(function(){

		console.log("bal");
		var vouchar = {};
		var barcode_list 	= [];
		var name 			= $("#inputName").val();
		var phone 			= $("#inputPhone").val();
		var address			= $("#inputAddress").val();
		var total 			= $("#total_price").html();
		var discount 		= $("#inputDiscount").val();
		var paid 			= $("#inputPaid").val();
		var due 			= $("#inputDue").val();
		$("#barcode_list span").each(function(index){
			barcode_list.push($(this).html());
		});
		console.log("bal");
		vouchar.name 			= name;
		vouchar.phone 			= phone;
		vouchar.address 		= address;
		vouchar.barcode_list	= JSON.stringify(barcode_list);
		vouchar.total 			= total;
		vouchar.discount 		= discount;
		vouchar.paid 			= paid;
		vouchar.due 			= due;
		
		$.post("http://localhost/ta/public/vouchar/newww", vouchar, function(data){
			//console.log(vouchar);
			console.log(data);
		});

	});




	/*
	*	Search Voucher
	*/

	$("#search_voucher_select").change(function(){
		if($("#search_voucher_select").val() == 'date'){
			
			$("#input_filter").attr("placeholder","Select Date");
			
			$('.datepicker').datepicker({
		        todayHighlight  :   true,
		        format          :   "dd-mm-yyyy"
		    });

		}else if($("#search_voucher_select").val() == 'name'){
			
			$("#input_filter").attr("placeholder","Enter Name");
			$(".datepicker").datepicker('remove');

		}
	});


});