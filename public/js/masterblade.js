$(document).ready(function() {

	// footer adjustment
        
 	var height = $('footer').height();

    $('body').css({

        "margin-bottom": height
        
    });

    // slideshow function call
  	$(function() {
  
	$(".rslides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "", 
		  maxheight: "500",          // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
  	});




	// Multiple images preview in browser

    $(function() {
	    
	    var imagesPreview = function(input, placeToInsertImagePreview) {

	        if (input.files) {

	            var filesAmount = input.files.length;

	            for (i = 0; i < filesAmount; i++) {

	                var reader = new FileReader();

	                reader.onload = function(event) {

	                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
	                
	                }

	                reader.readAsDataURL(input.files[i]);
	            }
	        }

	    };

	    $('#gallery-photo-add').on('change', function() {

	        imagesPreview(this, 'div.gallery');

	    });

	});

});




