$(document).ready(function() {

	// footer adjustment
        
 	var height = $('footer').height();

    $('body').css({

        "margin-bottom": height
        
    });

    // slideshow function call
    $('.carousel').carousel();

});





