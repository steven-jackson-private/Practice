 
var _gaq = _gaq || [];
_gaq.push([ '_setAccount', 'UA-36354271-1' ]);
_gaq.push([ '_trackPageview' ]);

(function() {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl'
			: 'http://www')
			+ '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();

function $(id) {
	return document.getElementById(id);
}

var interval = null;
var scroll = true;

function pageInit(sub) {
	interval = setInterval(function() {
		if (!scroll)
			return;
		$('ad_slider').shuffleNext();
	}, 8000);

	if (sub != '') {
		switch (sub) {
		case 'ty':
			alert("Thank your for submitting your details! \r\nA rep will contact you soon.");
			window.location.href = "index.php";
			break;
		}
	}
}

function moveSlider(td) {
	var i = td.getAttribute("i");
	var slider = document.getElementById("ad_slider");
	
	slider.shuffleTo(i);
}

function toggleScroll(state) {
// 	console.log(state);
	scroll = state;
}

function hoverTab(td) {
	toggleScroll(false);
	var i = td.getAttribute("i");
	var table = document.getElementById("slides");

	table.rows[0].cells[i].classList.add("hover");
	table.rows[1].cells[i].classList.add("hover");
	
}

function unHoverTab(td) {
	toggleScroll(true);
	var i = td.getAttribute("i");
	var table = document.getElementById("slides");

	table.rows[0].cells[i].classList.remove("hover");
	table.rows[1].cells[i].classList.remove("hover");

}

// window.onscroll = function(event) {
// if (event.type == 'scroll') {
// if (event.pageY >= 57) {
// for ( var i = 0; i < $('line').classList.length; i++) {
// if ($('line').classList[i] == 'line_float_top') {
// return;
// }
// }
// $('line').classList.add('line_float_top');
// } else {
// for ( var i = 0; i < $('line').classList.length; i++) {
// if ($('line').classList[i] == 'line_float_top') {
// $('line').classList.remove('line_float_top');
// return;
// }
// }
// }
// }
// };
function getSlide() {
	var elem = document.getElementById('slides');

	for (var i = 0; i < elem.rows.length; i++) {
		elem.rows[1].cells[i] = elem.rows[0].cells[i];
		console.log(elem.rows[0].cells[i].innerHTML);
	}
}
