$(document).ready(function() {

	// footer adjustment
        
 	var height = $('footer').height();

    $('body').css({

        "margin-bottom": height
        
    });

    // slideshow function call

     $('#myCarousel').carousel({

		pause: 'none'
		
	})

});





