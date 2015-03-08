$(document).ready(function(){
   

	//click hide
    $(".product-1").click(function(){
        $(this).hide();
    });

    // hover hide - Working
	// $(".product-2").hover(function(){
 	//        $(this).hide();
 	//    });


	//Mouse enter and exit state
	$(".product-3").mouseenter(function(){
        $(this).hide(800);
    }),
	$(".product-3").mouseleave(function(){
        $(this).show(800);
    });

//Mouse enter and exit state
//Better to do overlay in Css
	// $(".product-4").mouseenter(function(){
 //        $('.overlay').css('opacity', '1').show(800);
 //    }),
	// $(".overlay").mouseleave(function(){
 //        $('.overlay').css('opacity', '0').hide(800);
 //    });

$(".product-4").mouseenter(function(){
 	$(this).animate({
 		height: "220px",
 		width: "270px"},
 		600, function() {
 		
 	}),
$(".product-4").mouseleave(function(){
 	$(this).animate({
 		height: "200px",
 		width: "250px"},
 		600, function() {
 		/* stuff to do after animation is complete */
 	});

  });
  });

//Animate to 500px
	$(".product-2").mouseenter(function(){
 	$(this).animate({
 		height: "500px",
 		width: "500px"},
 		600, function() {
 		
 	}),
$(".product-2").mouseleave(function(){
 	$(this).animate({
 		height: "200px",
 		width: "250px"},
 		600, function() {
 		/* stuff to do after animation is complete */
 	});
 	



    });
 });

 	







}); 
// End Doc ready