var coupons_enabled = true;
var current_discount = 0;
var coupon_item_code = -1;
var postRequest = new XMLHttpRequest();

var ignoreCode = false;

var emailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var numRegEx = /^((\+{1}[0-9]{11})|([0-9]{10}))$/;

function pageInit2() {
	interval = setInterval(function() {
		document.getElementById('ad_slider').shuffleNext();
	}, 8000);
}

function toggle(o) {
	var handle = $(o).attr("class");
	var handle = ".c_" + handle;
	var handle2 = $(o).attr("a");
	if (handle2 == "0") {
		$(handle).show();
		$(o).attr({
			a : "1"
		});
	} else if (handle2 == "1") {
		$(handle).hide();
		$(o).attr({
			a : "0"
		});
	}
}
function color(o) {
	$(o).css({
		color : 'white',
		backgroundColor : '#7EAB00'
	});
}
function hide_contents() {
	for (var k = 0; k <= head; k++) {
		$(".c_" + k).toggle();
	}

}
//  function quantity(o) {
// 	//      var id = $(o).attr("b");
//  	var check = $('input[name=rdb]:checked').val();
	
// 	var quan = $(o).val();
//  	var amount = $("#" + check + "_" + id).html();
// 	    amount = amount.replace(/\D/g, '');
 	
// 	var arr = new Array();
// 	$(arr).each(function() {
// 	  this.push(quan + amount);
// 	  console.log(arr);
// 	})
// // 	  var total = 0;
// 	  
// // 	console.log(arr);
// // 	$(arr).each(function() {
// // 	  alert(arr);
// // 	});
// 	  var current_cost = $("#cost").html();
// //  	current_cost = current_cost.replace(/\D/g, '');
// 	$("#cost").html(total);
//  }
  
   function quantity() {


console.log('test');

   	//Silent test - Steven
    // var quan = document.getElementsByClassName("test");
	
    // var total = document.getElementById("tbl_total");
    // var arr = new Array();
    // var sum = 0;
    // var amttotal = 0;

    // for(var i =0; i < quan.length; i++){
    //   arr.push(quan[i].value);
      
    // }
    // console.log(arr);

    
    // for(var i=0; i < arr.length; i++) {
    //   sum += Number(arr[i]);
      
    // }
    //  console.log(sum);
    

    //Ashley loot
   //  for(var i= 0; i < total.rows.length; i++) {
   //   total.rows[0].cells[1].innerHTML = 'R' + sum;
     
   //  }
     
   // console.log(sum);
  }

function amount() {
  var selected = document.getElementById("rdbtn");
  var tbl = document.getElementById("product_table");
  var arr = new Array();
  var arr1 = new Array();
  
  for(var i = 0; i < tbl.rows.length; i++){
    arr.push(tbl.rows[i].cells[0].children[0].innerHTML);
  }
  console.log(arr);
  
  for(var i = 0; i < tbl.rows.length; i++){
    arr1.push(tbl.rows[i].cells[1].children[0].innerHTML);
  }
  console.log(arr1);
}
// 	var quan = document.getElementsByClassName("test");
// 	var arr = new Array();
// 	
// 	for(var i =0; i < quan.length; i++){
// 	  arr.push(quan[i].value);
// 	
// 	 }
// 	  console.log(arr);
	
	
//  	var value = o.value;
// 	var check = $('input[name=rdb]:checked').val();
// 	var totalid = $(o).attr("b");
// 	var amount = $("#" + check + "_" + totalid).html();
// 
// 	if (value.toString().search(/^-?[0-9]+$/) == 0) {
// 		var total = value * amount;
// 		$("#" + totalid).attr({
// 			value : total
// 		});
// 	} else {
// 		alert("Please enter a valid quantity!");
// 		$(o).attr({
// 			value : 0
// 		});
// 		$("#" + totalid).attr({
// 			value : 0
// 		});
//   }


function total() {
	var cost = 0;
	var temp = 0;
	var vat = 0;
	var temp2 = 0;
	var delivery = 0;
	var finalamount = 0;

// 	var deliver = document.getElementById("#deliver_input").checked;
	var deliver = $("#deliver_input").attr('checked','checked');

	var total_discount = 0;

// 	if (current_discount == 0 && document.getElementById("coupon").value != ""
	if (current_discount == 0 && $("#coupon").value != ""
			&& ignoreCode == false) {
		coupon();
		return;
	}

	for (var i = 1; i <= loop; i++) {
		if ($("#t_" + i).attr("value") != 0) {
			temp = $("#t_" + i).attr("value");
			cost += parseInt(temp);

			var item = document.getElementById("t_" + i).parentNode.parentNode.children[2].className
					.substr(0, 1);
			if (couponItemCheck(item) && current_discount != 0) {
				if (current_discount.indexOf(",") != -1) {
					var discountArr = current_discount.split(",");
					if (discountArr[couponItemCheckPos(item)].indexOf("R") == 0) {
						total_discount += ((parseInt(discountArr[couponItemCheckPos(item)]
								.substr(1)) / 1.14) * parseInt($(
								"#t_" + i + "_q").attr("value")));
					} else {
						total_discount += (temp / 1.14)
								* (discountArr[couponItemCheckPos(item)] / 100);
					}
				} else {
					if (current_discount.indexOf("R") == 0) {
						total_discount += ((parseInt(current_discount.substr(1)) / 1.14) * parseInt($(
								"#t_" + i + "_q").attr("value")));
					} else {
						total_discount += (temp / 1.14)
								* (current_discount / 100);
					}
				}
			}
// 			add code here for dicounted items

		}
	}

	if (total_discount > 0) {
		$('#disc').text('R' + total_discount.toFixed(2));

	} else
		$('#disc').text('R0.00');

	if (((cost / 1.14) - total_discount) <= 2000 && deliver)
		delivery = 100;
	else
		delivery = 0;

	total_ex = (cost / 1.14) + delivery - total_discount;

	$("#cost").text("R" + (cost / 1.14).toFixed(2));

	$("#vat").text("R" + vat.toFixed(2));
	$("#delivery").text("R" + delivery.toFixed(2));

	finalamount = total_ex * 1.14;
	$("#total_vat").text("R" + finalamount.toFixed(2));
	var btc = Math.round((finalamount / BTC_price) * 100000) / 100000 + " BTC";
	$("#total_btc").text(btc);

}

function coupon() {
	if (coupons_enabled) {
		clearDiscount();

		var msg = document.getElementById("verify");
		var status_img = document.getElementById("status_img");

		msg.innerHTML = "Verifiying coupon code...";
		status_img.setAttribute("src", "img/load.gif");

		document.getElementById("verify_tr").removeAttribute("class");

		var c = $('#coupon').val();
		if (c == null || c == undefined)
			return false;

		var request;
		// if(isIE8){
		// request = new window.XDomainRequest();
		// }else{
		// }

		request = new XMLHttpRequest();

		request.open("GET", "php/coupon.php?c=" + c, true);
		request.onreadystatechange = function() {
			if (request.readyState == 4 && request.status == 200) {
				var msg = document.getElementById("verify");
				var status_img = document.getElementById("status_img");
				if (request.responseText != "X") {
					var responseArr = request.responseText.split("|");

					coupon_item_code = responseArr[0];
					current_discount = responseArr[1];
					ignoreCode = false;
					if (current_discount == 0) {
						ignoreCode = true;
					}

					msg.innerHTML = "Code Accepted";
					status_img.setAttribute("src", "images/good.png");

					total();
				} else {
					msg.innerHTML = "Code Incorrect";
					status_img.setAttribute("src", "images/bad.png");
					current_discount = request.responseText;
				}
			}
		};

		request.send();
		return false;
	} else {
		return false;
	}

}

function isEmpty(obj) {
	for ( var prop in obj)
		if (obj.hasOwnProperty(prop))
			return false;
	return true;
}

function couponItemCheck(item) {
	if (coupon_item_code == -1) {
		return false;
	}
	if (coupon_item_code.indexOf(",") == -1) {
		if (item == coupon_item_code)
			return true;
		else
			false;
	} else {
		var couponArr = coupon_item_code.split(",");
		for (var i = 0; i < couponArr.length; i++) {
			if (item == couponArr[i])
				return true;
		}
		return false;
	}
}

function couponItemCheckPos(item) {
	if (coupon_item_code == -1) {
		return false;
	}
	if (coupon_item_code.indexOf(",") == -1) {
		if (item == coupon_item_code)
			return true;
		else
			false;
	} else {
		var couponArr = coupon_item_code.split(",");
		for (var i = 0; i < couponArr.length; i++) {
			if (item == couponArr[i])
				return i;
		}
		return false;
	}
}

function request(button) {
	if (button.innerHTML == "PLEASE WAIT")
		return;
	var name = $("#name").val();
	var email = $("#email").val();
	var number = $("#number").val();

	var street = $("#streetadress").val();
	var suburb = $("#suburbadress").val();
	var city = $("#cityadress").val();
	var post = $("#postadress").val();
	
	var coup = $('#coupon').val();
	var deliver = document.getElementById("deliver_input").checked;
	
	var instru = $('#instructions').val();
	var deli_name = $("#cp_name").val();
	var deli_num = $("#cp_num").val();
	
	var comp_name = $("#company_name").val();
	var comp_vat = $("#company_vat").val();
	var cost = $("#cost").html();
	var discount = $("#disc").html();
	var del = $("#delivery").html();
	var total = $("#grnd_total").html();

// 	var newsLetter = document.getElementById("deliver_input").checked;
// 
// 	var ref_select = document.getElementById("ref_select");
// 	var ref_loc = "N/A";
// 	if (ref_select.selectedIndex != 0) {
// 		ref_loc = ref_select.options[ref_select.selectedIndex].innerHTML;
// 	}

	var submit = new Object();

	if (!emailRegEx.test(email)) {
		$("#msg").text("Email invalid! Please enter a valid email address!").css('color','red');
		return;
	}

	if (name == "" || name == null || name == undefined) {
		$("#msg").text("please enter your name!");
		return;
	}
	if (email == "" || email == null || email == undefined) {
		$("#msg").text("please enter your email!");
		return;
	}
	if (number == "" || number == null || number == undefined) {
		$("#msg").text("please enter a phone number!");
		return;
	}
	if (street == "" || street == null || street == undefined) {
		$("#msg").text("please enter your street address!");
		return;
	}
	if (suburb == "" || suburb == null || suburb == undefined) {
		$("#msg").text("please enter your suburb!");
		return;
	}
	if (city == "" || city == null || city == undefined) {
		$("#msg").text("please enter your city/town!");
		return;
	}
	if (post == "" || post == null || post == undefined) {
		$("#msg").text("please enter your postal code!");
		return;
	}

	var cart = new Object();
	for (var i = 1; i <= loop; i++) {
		if ($("#t_" + i + "_q").attr("value") != 0) {
			cart[$("#ser_" + i).attr("value")] = $("#t_" + i + "_q").attr(
					"value");
		}
	}
	if (cart == null || cart == undefined || isEmpty(cart)) {
		$("#msg").text("please select a product!");
		return;
	}

	$("#msg").text("Thank you for entering your details");
	button.innerHTML = "PLEASE WAIT";
	button.classList.add("disabled");

	submit = {
		"NAME" : name,
		"EMAIL" : email,
		"NUMBER" : number,
		"STREET" : street,
		"SUBURB" : suburb,
		"CITY" : city,
		"POST" : post,
		"COUPON" : coup,
		"CART" : cart,
		"DELIVER" : deliver,
		"INSTRU" : instru,
		"COMP_NAME" : comp_name,
		"COMP_VAT" : comp_vat,
		"DELIVER_NAME" : deli_name,
		"DELIVER_NUM" : deli_num,
		"COST" : cost,
		"DISC" : discount,
		"DELIVERY" : del,
		"GRND_TOTAL" : total,
	};
// 	 console.log(JSON.stringify(submit));
//  	var url = "http://41.72.134.148/proforma/index.php?d="
// 			+ encodeURI(JSON.stringify(submit));
// 
// 	if (isIE8) {
// 		postRequest = new window.XDomainRequest();
// 	} else {
// 		postRequest = new XMLHttpRequest();
// 	}
// 
// 	postRequest.open("GET", url, true);
// 	postRequest.send();
// 	setTimeout(function() {
// 		window.location = "hold.php";
// 	}, 2000);
// 
// 	$.ajaxSetup({cache: false});
// 	$.getScript(url,function(){});
}

// function crossDomainGET(url) {
// 	var ga = document.createElement('script');
// 	ga.type = 'text/javascript';
// 	ga.async = true;
// 	ga.src = url;
// 
// 	var s = document.getElementsByTagName('script')[0];
// 	s.parentNode.insertBefore(ga, s);
// }
// 
function clearDiscount() {
	document.getElementById("verify_tr").setAttribute("class", "hidden");
	ignoreCode = false;
	current_discount = 0;
	coupon_item_code = -1;
}
// 
function clearAll() {
    var invoice = document.getElementById("tb_details");
    var delivery = document.getElementById("tb_delivery");
    var product = document.getElementById("product_table");
    
    for(var i = 1; i < invoice.rows.length; i++) {
      console.log(invoice.rows[i].cells[1].children[0].value);
      invoice.rows[i].cells[1].children[0].value = "";
    }
    
      delivery.rows[0].cells[1].children[0].value = "";
      delivery.rows[1].cells[1].children[0].value = "";
      delivery.rows[2].cells[1].children[0].value = "";
      delivery.rows[4].cells[1].children[0].value = "";
      delivery.rows[5].cells[1].children[0].value = "";
      
}
function check() {
   var rd = document.getElementById('rdbtn');
   var col1 = document.getElementsByClassName("col1");
   var col2 = document.getElementsByClassName("col2");
   var col3 = document.getElementsByClassName("col3");
   var col4 = document.getElementsByClassName("col4");
   
    for(var i=0; i < rd.children.length; i++) { //cols
//       if(rd.children[0].checked)var col1col = "#D8D8D8";
      if(rd.children[0].checked)var col1col = "#F8F8F8";
      else col1col = "white";

      if(rd.children[1].checked)var col2col = "#F8F8F8";
      else col2col = "white";

      if(rd.children[2].checked)var col3col = "#F8F8F8";
      else col3col = "white";

      if(rd.children[3].checked)var col4col = "#F8F8F8";
      else col4col = "white";      

 
  }

      for(var i=0;i<col1.length;i++)
      {
	col1[i].style.backgroundColor = col1col;
      }

      for(var i=0;i<col2.length;i++)
      {
	col2[i].style.backgroundColor=col2col;
      }

      for(var i=0;i<col3.length;i++)
      {
	col3[i].style.backgroundColor=col3col;
      }

      for(var i=0;i<col4.length;i++)
      {
	col4[i].style.backgroundColor=col4col;
      }
}

function preset() {
  document.getElementById("mycheck").checked = true;
  var col1 = document.getElementsByClassName("col1");
  var col1col = "#F8F8F8"
  for(var i=0;i<col1.length;i++)
      {
	col1[i].style.backgroundColor = col1col;
      }
  
}
// function getDetails() {
//   var tb = document.getElementById('tb_details');
//   var delivery = document.getElementById('tb_delivery');
//   
//   for(var i = 0; i < tb.rows.length; i++) {
//     console.log(tb.rows[i].cells[1].children[0].value);
//   } 
//   for(var i = 0; i < delivery.rows.length; i++) {
//     console.log(delivery.rows[i].cells[1].children[0].value);
//   }
// 
// }


//    var color = document.getElementsByName('rdb');
//    var len = color.length;

//    for(var i = 0; i < len; i++){
//      if(color[i].checked){
// 	col1.style.color = "green";
//        
//      }
//    }
 

 $(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		$('.scrollToTop').attr(href, "ecowat_buy.php");
		return false;
	});
	
});

//Ajax request. Not in use
function myAjax() {
      $.ajax({
           type: "POST",
           datatype:"json",
           url: 'http://localhost/ashley/add_to_cart.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }