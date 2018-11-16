$(document).ready(function(){
	//Carousel gallery
	$(".owl-gallery").owlCarousel({
		navigation : false,
		slideSpeed : 300,
		paginationSpeed : 400,
		navigationText: [
        "<span aria-hidden='true' class='arrow_left'></span>",
        "<span aria-hidden='true' class='arrow_right'></span>"
        ],
		pagination : true,
		singleItem : true,
		autoPlay : true,
		stopOnHover : true
	});
	// Hover menu
	$(".dropdown").on("mouseover",function(){
		var t = $(this);
		if(!t.hasClass("open")){
			t.addClass("open");
		}
	});
	$(".dropdown").on("mouseout",function(){
		var t = $(this);
		if(t.hasClass("open")){
			t.removeClass("open");
		}
	});
	if($(window).width() <= 767){
		$(".dropdown").off("mouseover, mouseout");
	}
	// Focus search input when click search text
	$(".search-text").click(function(){
		$(this).next("input").focus();
	});
});