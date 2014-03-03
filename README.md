bluur
=====

Bluur is a pair of scripts that dynamically blur images. The bluur.js handles the front-end processing of what you want to blur and passes it to image_processor.php which actually blurs the image and creates the file. 

At the moment, jQuery is a dependency, so make sure that's referenced before bluur is called.

Note: When the image hits the image_processor.php script, the script checks to see if the image already exists and creates it if need be. If not, it just returns the existing URL. 

```

$(document).ready(function(){
	// First, tell bluur where to find the image processor
	bluur.config('image_processor.php');
	// This is just a standard jQuery .each, searching for .blur
	$('.blur').each(function(){
		// Blur depth is set here. It can be anywhere between 1 and 60.
		var depth = 50;
		// This gets the image we want to blur. In this case a src attribute, but it could be a data attribute or background image.
		var to_blur = $(this).attr('src');
		// We've set a data attribute to tell the script where to place the image, just as an example.
		var placement = $(this).data('target');
		// We'll also get the alt attribute and store that, just incase.
		var alt = $(this).attr('alt');
		// All we're doing here is sending the location of the image and a callback function to bluur.image();
		bluur.image(to_blur, depth, function(response){
			// This prepends the image is appended to a div (placement)
			var markup = '<img src="' + response + '" alt="' + alt + '" />';
			$(placement).prepend(markup);
			// This applies the image to a background.
			// Note: There are some styles being applied in the CSS to make it stretch.
			$('body').css('background-image', 'url(' + response + ')');
		});
	});
});

```