var win_width = $(window).width(); //bg_deco 사이즈 구해줌
var win_height = $(window).height();
$(".bg_deco").css({
	"width": win_width + "px",
	"height": win_height + "px"
});

$(window).resize(function () {
	var win_width = $(window).width(); //bg_deco 사이즈 구해줌
	var win_height = $(window).height();
	$(".bg_deco").css({
		"width": win_width + "px",
		"height": win_height + "px"
	});
});

$(".menu_icon_nav").click(function () { //menu icon click
	$('.nav').animate({
		right: "0px"
	});
	$(".menu_icon_nav").children("i").animate({
		"height": "0px",
		"margin-bottom": "0px",
		"opacity": "0"
	});
	setTimeout(function () {
		set();
	}, 300);
});

$(".menu_icon_nav").mouseover(function () {
	$(".menu_icon_nav i").css({
		"background": "#fd5e28"
	});
}).mouseleave(function () {
	$(".menu_icon_nav i").css({
		"background": "#c52f00"
	});
});

$(".close_icon_nav").click(function () { //close icon click
	clear();
	$('.nav').animate({
		right: "-285px"
	});
	$(".menu_icon_nav").children("i").animate({
		"height": "4.5px",
		"margin-bottom": "4px",
		"opacity": "1"
	});
});

function clear(){	//nav menu 되돌리기
	$(".close_icon_nav").children("i").css({
		"transform": "rotate(0deg)"
	});
}

function set() {	//nav menu 변신
	$(".close_icon_nav").children("i").eq(0).css({
		"transform": "rotate(50deg)"
	});
	$(".close_icon_nav").children("i").eq(1).css({
		"transform": "rotate(130deg)"
	});
}

/*content_bg*/
function content_bg_on(){
	$(".content_bg").css({
		"display" : "block"
	});
}

/*content_bg*/
function content_bg_close(){
	$(".content_bg").css({
		"display" : "none"
	});
}