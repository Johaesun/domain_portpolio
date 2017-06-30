var win_height = $(window).height();
$(".content").css({
	"height": win_height + "px"
});

$(window).resize(function () {
	var win_height = $(window).height();
	$(".content").css({
		"height": win_height + "px"
	});
});

/*content_bg*/
function content_bg_on() {
	$(".content_bg").css({
		"display": "block"
	});
}

/*content_bg*/
function content_bg_close() {
	$(".content_bg").css({
		"display": "none"
	});
}

$(".basic_btn").click(function(){
	content_bg_on()
});