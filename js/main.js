
	// Attach Smoove to elements and set default options
jQuery(document).ready(function($) {
    // dentro de esta función $() funcionará como un álias de jQuery()
	$(".u-image").smoove({
    	offset  : '15%',
    	// moveX is overridden to -200px for ".bar" object
    	moveX   : '100px',
    	moveY   : '0',
	});
});

