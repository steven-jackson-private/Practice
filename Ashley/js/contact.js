var recapchaGood = false;
var request = null;

var emailRegEx = new RegExp(
		/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
var numRegEx = new RegExp(/^((\+{1}[0-9]{11})|([0-9]{10}))$/);

function pageInit(sub) {
// 	interval = setInterval(function() {
// 		if (!scroll)
// 			return;
// 		$('ad_slider').shuffleNext();
// 	}, 8000);

	if (sub != '') {
		switch (sub) {
		case 'ty':
			alert("Thank your for submitting your details! \r\nA rep will contact you soon.");
			window.location.href = "index.php";
			break;
		}
	}
}

function submit() {
	if (request != null) {
		setTimeout(submit, 500);
		return;
	}

//	if (!recapchaGood)
//		return;

	var input = document.getElementById("input_name");

	if (input.value == "") {
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	input = document.getElementById("input_email");
	if (input.value == "") {
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	if (!emailRegEx.test(input.value)) {
		errorMSG("Please enter a valid email address");
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	input = document.getElementById("input_tel");
	if (input.value == "") {
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	if (!numRegEx.test(input.value)) {
		errorMSG("Please enter a valid telephone number");
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	input = document.getElementById("input_region");
	if (input.selectedIndex == 0) {
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	input = document.getElementById("inputMessage");
	if (input.value == "") {
		input.setAttribute("class", "invalid");
		return;
	} else
		input.removeAttribute("class");

	input = document.getElementById("input_sel_areas");



	var selected = document.getElementsByClassName("selectedTD");
	for (var i = 0; i < selected.length; i++) {
		input.value += selected[i].innerHTML + ",";
	}
	
	
   	document.getElementById("contactForm").submit();
}

function recapchaInit() {
	document.getElementById('recaptcha_response_field').setAttribute(
			"onchange", "checkRecapcha()");

	document.getElementById('recaptcha_response_field').setAttribute(
			"required", "required");
}

function checkRecapcha() {
	var challenge = document.getElementById('recaptcha_challenge_field').value;
	var answer = document.getElementById('recaptcha_response_field').value;

	request = new XMLHttpRequest();
	request.open("get",
			"php/recapchaCheck.php?c=" + challenge + "&a=" + answer, true);
	request.onreadystatechange = function() {
		if (request.readyState == 4 && request.status == 200) {
			recapchaResponse(request.responseText);
			request = null;
		}
	};
	request.send();
}

function recapchaResponse(responseText) {
	var span = document.getElementById("recapchaResponse");
	if (responseText == "#GOOD") {
		span.innerHTML = "Recapcha is valid!";
		span.setAttribute("style", "color:#A0B31E");
		span.removeAttribute("class");

		recapchaGood = true;

	} else {
		span.innerHTML = "Recapcha is invalid!";
		span.setAttribute("style", "color:red");
		span.removeAttribute("class");

		document.getElementById('recaptcha_response_field').value = "";
	}
}

function errorMSG(msg) {
	if (msg == "")
		return;

	var span = document.getElementById("recapchaResponse");
	span.innerHTML = msg;
	span.setAttribute("style", "color:red");
	span.removeAttribute("class");
}

function selectArea(td) {
	var i = td.getAttribute("i");
	var table = document.getElementById("slides");
	if (table.rows[1].cells[i].classList.contains("selectedTD")) {
		table.rows[1].cells[i].classList.remove("selectedTD");
		table.rows[0].cells[i].classList.remove("selectedBody");
		
	} else {
		table.rows[1].cells[i].classList.add("selectedTD");
		table.rows[0].cells[i].classList.add("selectedBody");
		
		
	}
}