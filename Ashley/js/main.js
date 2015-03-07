document.addEventListener('DOMContentLoaded',function(){init();},false);

function toggleScroll(state) {
	console.log(state);
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

function selectArea(td) {
	var i = td.getAttribute("i");
	var table = document.getElementById("slides");
	if (table.rows[0].cells[i].classList.contains("selectedTD")) {
		table.rows[0].cells[i].classList.remove("selectedTD");
		table.rows[1].cells[i].classList.remove("selectedBody");
	} else {
		table.rows[0].cells[i].classList.add("selectedTD");
		table.rows[1].cells[i].classList.add("selectedBody");
	}
}
function getSlide() {
	var elem = document.getElementById('slides');

	for (var i = 0; i < elem.rows.length; i++) {
		elem.rows[0].cells[i] = elem.rows[1].cells[i];
		console.log(elem.rows[0].cells[i].innerHTML);
	}
}
/*swap images homepage*/
function changeImage() {
  
  var img = document.getElementById("img");
  img.src = images[x];
  x++;
  
  if(x >= images.length) {
   x = 0;
  }
  /*fadeImg(img, 50, true);*/
 
 
  
}
// change image onclick
   function changeBack() {
    clearInterval(timer);
    timer = setInterval("changeImage()", 5000); //resets interval, everytime img is clicked the next img will start 5seconds after that
    var img = document.getElementById("img");
     img.src = images[x];
     x++;
  
  if(x >= images.length) {
   x = 0;
  }
}

var timer = 0;
var images = [];
x = 0;

images[0] = "img/monitor-energy.png";
images[1] = "img/img-report.png";


function init() {
  timer = setInterval("changeImage()", 5000);
}


/*expanding/shrinking header */
$(document).on("scroll", function(){
		if($(document).scrollTop() > 100){
			$("header").addClass("shrink");
			document.getElementsByClassName("product-list")[0].classList.add("product-shrink");
			document.getElementsByClassName("product-list")[0].classList.remove("product-grow");
			document.getElementById("ew-login").classList.add("ew-shrink");
			document.getElementById("ew-login").classList.remove("ew-grow");
			
			
		}else
		{
			$("header").removeClass("shrink");
			document.getElementsByClassName("product-list")[0].classList.remove("product-shrink");
			document.getElementsByClassName("product-list")[0].classList.add("product-grow");
			document.getElementById("ew-login").classList.remove("ew-shrink");
			document.getElementById("ew-login").classList.add("ew-grow");
			
		}
	})

