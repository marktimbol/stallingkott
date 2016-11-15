$(document).ready(function() {
	$('.Clients__carousel').owlCarousel({
		items: 3,
		autoPlay: true,
		pagination: false,
		loop: true,
	});

	$('.Hero__slider').owlCarousel({
    	navigation : false, // Show next and prev buttons
    	pagination: true,
    	autoPlay: false,
    	slideSpeed : 500,
    	paginationSpeed : 400,
    	singleItem: true
	});
});