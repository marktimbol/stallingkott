$(document).ready(function() {
	$('.Clients__carousel').owlCarousel({
		items: 3,
		autoPlay: true,
		pagination: false,
		loop: true,
	});

	$(".Hero__slider").owlCarousel({
		paginationSpeed : 1000,
		goToFirstSpeed : 2000,
		singleItem : true,
		autoHeight : true,
		margin: 0,
	});	
});