$(document).ready(function () {
	$(window).on("scroll mousewheel", function () {
		var top = $(".box01").offset().top;
		var scroll = $(window).scrollTop();
		if (scroll >= top) {
			header_scroll();
		}
		if (top > scroll) {
			$("header").removeClass("header_scroll");
			$("header").css({
				"padding-top": "20px"
			});
		}
	});
	
	$(".scroll").click(function () {
        var top = $(".box01").offset().top;
        header_scroll();
        $('body').animate({
            'scrollTop': top + "px"

        });
    });

	function header_scroll() {
		$("header").addClass("header_scroll");
		$("header").css({
			"padding-top": "0px"
		});
	};
	
	 /*스크롤 버튼*/
    $('.scroll').click(function () {
        var scroll_top = $(".scroll_top").outerHeight();
        $('html').smoothScroll(scroll_top, 500);
    });
});
