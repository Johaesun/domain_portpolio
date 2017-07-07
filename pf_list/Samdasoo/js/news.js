$(document).ready(function () {
    $(".notice_btn").click(function () {
		var m = $(this).parents(".notice").index()-1;
		console.log(m);
		if ($(".notice").eq(m).find(".notice_btn").hasClass("box_off")) {
			display(m);
            $(".notice").eq(m).find(".notice_btn").removeClass("box_off");
		} else {
			none(m);
           $(".notice").eq(m).find(".notice_btn").addClass("box_off");
		}
		$(".notice").css({
			"overflow": "hidden"
		});
		/*$(".notice").animate({"height":"500px"})*/
	});

	function display(m) {
		$(".notice").eq(m).find(".content_box").css({
			"padding": "50px 0px",
			"height": "auto",
		});
	}

	function none(m) {
		$(".notice").eq(m).find(".content_box").css({
			"padding": "0px",
			"height": "0px",
		});
	}
	$(".close_btn").click(function () {
		var m = $(this).parents(".notice").index()-1;
		none(m);
	});
    $(".btn_news").click(function () {
        $('.bag').addClass("bag_color");
    });

    /*news글쓰기*/
    $(".btn_news").click(function () {
        $(".bag").addClass("bag_color");
		$(".send").attr("action","./htdocs/insert_db.php?update=false");
        $(".news_form").css({
            "display": "block",
        });
		$(".btn_news_close").css({
            "display": "block",
        });
    });

	/*news글쓰기 close*/
	$(".btn_news_close").click(function () {
		$(".bag").removeClass("bag_color");
		$(".news_form").css({
			"display": "none",
		});
		$(".btn_news_close").css({
			"display": "none",
		});
	});
	
	/*수정버튼*/
    $(".btn_edit").click(function () {
        $(".bag").addClass("bag_color");
		//prompt("글쓸때 입력한 번호를 입력해주세요");
		var idx =$(this).attr("rel");
		$(".send").attr("action","./htdocs/insert_db.php?idx="+idx);
        $(".news_form").css({
            "display": "block",
        });
		$(".btn_news_close").css({
            "display": "block",
        });
    });
});
