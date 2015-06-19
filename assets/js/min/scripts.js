jQuery(document).foundation({
	equalizer : {
	    // Specify if Equalizer should make elements equal height once they become stacked.
	    equalize_on_stack: true
 	}
 });

jQuery(document).ready(function() {

	jQuery('.scroll-to-anchor').each( function() {
		jQuery(this).click( function() {
			var target = jQuery(this).attr('href');
			jQuery('html, body').animate({
		        scrollTop: jQuery(target).offset().top
		    }, 750);
		});
	});

});