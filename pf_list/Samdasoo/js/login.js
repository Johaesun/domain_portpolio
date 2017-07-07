$(document).ready(function () {
	var win_height = $(window).height(); //main_slide size
	var footer_height = $('footer').height();
	$('.section').css({
		"height": win_height - footer_height + "px"
	});

	$(window).on("scroll mousewheel", function () {
		return false;
	});
});
