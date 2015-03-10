$(document).ready(function(){
   
 $('.product-4').hide();


 $(window).scroll(function(event) {


// Testing purposes
        var y = $(this).scrollTop();

        if (y <= 400) {

            $('.product-4').hide();
            $('.product-5').animate({height: "0px"}, 200);

             }});
// Testing end

// Page scroll with Jquery events
    $(window).scroll(function(event) {

        var y = $(this).scrollTop();

        if (y >= 400) {

            $('.product-4').show(200, function() {});
            $('.product-5').animate({height: "250px"}, 200);
            

    }});
// Page scroll with Jquery events end







}); 
// End Doc ready