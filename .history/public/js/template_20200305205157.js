jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 20,
		"offset": 50,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

});

// Star Carousel news
$(window).bind("load resize slid.bs.carousel", function() {
    var imageHeight = $(".active .holder").height();
    $(".controllers").height( imageHeight );
    console.log("Slid");
  });
// End Carousel news