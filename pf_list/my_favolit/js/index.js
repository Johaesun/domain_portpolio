var win_height = $(window).height(); //main_slide size
var win_width = $(window).width();
var bar_width = $('#menu_bar').width();
$('.main_slide_wrap').css({
	"width": win_width - bar_width + "px",
	"height": win_height + "px"
});

$(window).resize(function () { //main_slide size for slide
	var win_height = $(window).height(); //main_slide size
	var win_width = $(window).width();
	var bar_width = $('#menu_bar').width();
	$('.main_slide').css({
		"width": win_width - bar_width + "px"
	});
});

$(".pf_link").mouseover(function () { //pf_list hover
}).mouseout(function () {});

$('.desing_link').click(function () { // Do you want to see the desing?
	$("#content_wrap").children("div").css({
		'display': "none"
	});
	$(".desing_ok").css({
		"display": "block"
	});
	$('#content_wrap').css({
		'z-index': '45'
	});
	$('.icon').addClass('icon_de');
	$('.icon').addClass('icon_on');
	$('.favolit').removeClass('icon');
});

$('.btn').click(function (e) { // Do you want to see the desing?
	e.preventDefault();
	$("#content_wrap").children("div").css({
		'display': "none"
	});
	$(".info_box").css({
		"display": "block"
	});
	$(".favolit").addClass('icon_on');
	$(".favolit").removeClass('icon');
	$('#content_wrap').css({
		'z-index': '45'
	});
});

var no, now = 0, //슬라이드
	max = $(".main_slide li").length - 1; //slide
setInterval(function () {
	slide()
}, 3000);

function slide() {
	no = now != max ? now + 1 : 0;
	$(".main_slide li").eq(no).css({
		"left": "100%"
	}).stop().animate({
		"left": 0
	});
	$(".main_slide li").eq(now).stop().animate({
		"left": "100%"
	});
	now = no;
}

$(".favolit").click(function () { //favorit_list
	$("#content_wrap").children("div").css({
		'display': "none"
	});
	$(".like_wrap").css({
		"display": "block"
	});
	if ($(this).hasClass('icon_on')) {
		$(this).addClass('icon');
		$(this).removeClass('icon_on');
		$(this).removeClass('icon_de');
		$('#content_wrap').css({
			'z-index': '-99'
		});
	} else {
		$(this).addClass('icon_on');
		$(this).removeClass('icon');
		$('#content_wrap').css({
			'z-index': '45'
		});
	}
});

$(".btn_sycn").click(function () { //random fetch
	var data = new Array;
	var len = $('.like_list li').length;
	for (var i = 0; i < len; i++) {
		data.push($(".like_list li").eq(i).children("p").text());
	}
	like_list_clear();
	data = shuffle(data);

	for (var i = 0; i < len; i++) {
		$(".like_list").append("<li><span>" + (i + 1) + "</span><p>" + data[i] + "</p></li>");
	}
});

function shuffle(data) {
	var arr = [];
	data.sort(function () {
		return 0.5 - Math.random()
	});
	for (i = 0; i < data.length; i++) {
		arr.push(data[i]);
	}
	return arr;
}

function like_list_clear() {
	$(".like_list").html(" ");
}
