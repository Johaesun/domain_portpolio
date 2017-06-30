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

$(".content").click(function () {
	content_bg_on();
});
