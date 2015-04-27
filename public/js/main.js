$(document).ready(function(){


	$("#print_btn").click(function(){
		window.print();
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


	$("#voucher_list").html("<h2>No data Found...</h2>");
	$("#search_voucher_button").click(function(){
		var filter = $("#search_voucher_select").val();
		var keyword = $("#input_filter").val();
		
		
		if(filter == "date"){
			keyword = keyword[6]+keyword[7]+keyword[8]+keyword[9]+"-"+keyword[3]+keyword[4]+"-"+keyword[0]+keyword[1];
			$("#voucher_list").html("");
			$.get("http://localhost/ta/public/voucher/list/date?date= " + keyword, function(data){
				var flag = 0;
				var voucher_list = JSON.parse(data);
				for(list in voucher_list){
					flag = 1;
					$("#voucher_list").append('<tr><td><a href="http://localhost/ta/public/voucher/view/'+voucher_list[list].id+'">'+voucher_list[list].id+'</a></td><td>'+voucher_list[list].date+'</td><td>'+voucher_list[list].customer_name+'</td><td>'+voucher_list[list].address+'</td><td>'+voucher_list[list].total_price+'</td><td>'+voucher_list[list].discount+'</td><td>'+voucher_list[list].paid+'</td><td>'+(parseFloat(voucher_list[list].total_price)-parseFloat(voucher_list[list].discount)-parseFloat(voucher_list[list].paid))+'</td></tr>');
				}
				if(flag == 0){
					$("#voucher_list").html("<h2>No data Found...</h2>");
				}
			});
		}


		else if(filter == "name"){
			$("#voucher_list").html("");
			$.get("http://localhost/ta/public/voucher/list/name?customer_name=" + keyword, function(data){
				var flag = 0;
				var voucher_list = JSON.parse(data);
				for(list in voucher_list){
					flag = 1;
					$("#voucher_list").append('<tr><td><a href="http://localhost/ta/public/voucher/view/'+voucher_list[list].id+'">'+voucher_list[list].id+'</a></td><td>'+voucher_list[list].date+'</td><td>'+voucher_list[list].customer_name+'</td><td>'+voucher_list[list].address+'</td><td>'+voucher_list[list].total_price+'</td><td>'+voucher_list[list].discount+'</td><td>'+voucher_list[list].paid+'</td><td>'+(parseFloat(voucher_list[list].total_price)-parseFloat(voucher_list[list].discount)-parseFloat(voucher_list[list].paid))+'</td></tr>');
				}
				if(flag == 0){
					$("#voucher_list").html("<h2>No data Found...</h2>");
				}
			});
		}

	});



	/*
	*	update voucher button click
	*/

	/*$("#update_voucher").click(function(){

		var vouchar 		= {};
		var id 				= $("#voucher_id").html();
		var name 			= $("#inputName").val();
		var phone 			= $("#inputPhone").val();
		var address			= $("#inputAddress").val();
		var total 			= $("#total_price").html();
		var discount 		= $("#inputDiscount").val();
		var paid 			= $("#inputPaid").val();
		var due 			= $("#inputDue").val();
		
		vouchar.id 				= id;
		vouchar.name 			= name;
		vouchar.phone 			= phone;
		vouchar.address 		= address;
		vouchar.total 			= total;
		vouchar.discount 		= discount;
		vouchar.paid 			= paid;
		vouchar.due 			= due;
		
		$.post("http://localhost/ta/public/vouchar/update", vouchar, function(data){
			console.log(vouchar);
		});

	});*/


	


});

