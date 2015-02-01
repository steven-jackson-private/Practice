
var jmain = function(){


$('p').fadeOut(300).fadeIn(300);

//Mouse Enter state
$('.hover')

.mouseenter(function(){
$('#hover').html('Mouse over state');
})

.mouseleave(function(){
$('#hover').html('Mouse leave state');
});
//Mouse Enter end



//Fade
$('.fadeto')

.mouseenter(function(){
$('.fadeto').fadeTo("slow", 0.5);
})

.mouseleave(function(){
$('.fadeto').fadeTo("slow", 1);
});
//Fade End

//Slide
$('.slide')

.click(function(){
$('#slidedown .panel-body').slideDown('slow').slideUp('slow');
});
//Slide End

//Explode
$('.boom')

.click(function(){
  $('img').hide('explode');
});
//Explode End

//animate
$('.animate')

.click(function(){
  $('.animate').animate({
    width: "100px",
}, 2000);

});

//animate End

//Accordion

//Accordion End

}

$(document).ready(jmain);
