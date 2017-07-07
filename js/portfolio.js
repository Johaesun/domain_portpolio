/*content_bg*/
function content_pf_on() {
	$(".content_bg").css({
		"display": "block"
	});
	$(".pf_up").css({
		"display": "block"
	});
	$(".pf_up").animate({
		"opacity": "1",
		"top": "180" + "px"
	});
}

/*content_bg*/
function content_pf_close() {
	$(".content_bg").css({
		"display": "none"
	});
	$(".pf_up").css({
		"display": "none"
	});
	$(".pf_up").animate({
		"opacity": "0",
		"top": "-160" + "px"
	});
}

$(".content").click(function () {
	content_pf_on();
	var content_img = $(this).find(".content_img").text();
	var content_name = $(this).find(".content_name").text();
	var content_year = $(this).find(".content_year").text();
	var pf_explanation = $(this).find(".content_explanation").text();
	$(".pf_tt").html(content_name);
	$(".pf_year").html(content_year);
	$(".pf_Ex").html(pf_explanation);
	$(".pf_img").css({
		"background": "url('../img/" + content_img + ".jpg')",
		'background-repeat': 'no-repeat',
		'background-position': 'center center',
		'background-size': 'auto 100%'
	});
	$(".a_link").attr({"href": "./pf_list/" + content_img + ""});
});
$(".pf_close").click(function () {
	content_pf_close();
});
