$(document).ready(function () {
    $(".flickity-viweport").css({
        "height": $(window).height() + "px"
    });
    $(".carousel-cell").css({
        "height": $(window).height() + "px"
    });
    /*menu_list 아이콘 클릭시 nav 출현*/
    $('.menu_list').click(function () {
        $('.nav').animate({
            right: '0px'
        });
        $(window).on('scroll', function () {
            return false;
        });
        $(".bag").addClass("bag_color");
    });

    /*nav close*/
    $('.close, .bodyStop').click(function () {
        $('.nav').animate({
            right: '-240px'
        });
        $('body').css({
            'overflow': 'visible'
        });
        $(window).on('scroll', function () {
            return true;
        });
        $("bag").removeClass("bag_color");
        $(".bag_color").css({
            'display': 'none'
        });
    });

    /*menu_scroll누를시 가장밑으로 스크롤*/
    var top = $("footer").offset().top;
    $(".menu_scroll").click(function () {
        $('body').animate({
            'scrollTop': top + "px"
        });
    });
	
	var top = $("footer").offset().top;
    $(".provide_click").click(function () {
        $('body').animate({
            'scrollTop': top + "px"
        });
    });

    /*개인정보정책*/
    $(".etcBtn").click(function () {
        $(".bag").addClass("bag_color");
        $(".etcFix").css({
            "display": "block",
        });
    });
    
    /*개인정보정책 close*/
    $(".etcFix_close").click(function(){
        $(".bag").removeClass("bag_color");
        $(".etcFix").css({
            "display": "none",
        });
    });


    $(this).click(function(){
        $(this).addClass("feedback");
    });

});
