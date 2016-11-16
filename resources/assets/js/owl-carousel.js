$(document).ready(function() {
	$('.Clients__carousel').owlCarousel({
		items: 3,
		autoPlay: true,
		pagination: false,
		loop: true,
	});

	$('.Hero__slider').owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem: true
	});
});