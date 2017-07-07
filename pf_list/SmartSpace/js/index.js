$("#slide1_button li").hover(
    function(){
        var temp = $(this).attr('id');
      $("#slide1_button li").css("background-color","white");
      $("#slide1_button").children().eq(temp-1).css("background","#0948db");
      $(".slide li").css("display","none");
      $(".slide").children().eq(temp-1).css("display","block");
    });

setInterval(function(){
	for(var i=0; i<4; i++){
		$(".sub_slide li").eq(i).addClass("img_on");
		if (i==4){
			i = 0;
		}
	}
},2000);

for(var num=0; num<4; num++){

$(".sub_slide li").eq(num).click(function(){
	$(".main_img img").eq(num).addClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
});
$(".sub_slide li").eq(num).click(function(){
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).addClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
});
$(".sub_slide li").eq(num).click(function(){
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).addClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
});
$(".sub_slide li").eq(num).click(function(){
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
	$(".main_img img").eq(num).addClass("img_on");
	$(".main_img img").eq(num).removeClass("img_on");
});
$(".sub_slide li").eq(4).click(function(){
	$(".main_img img").eq(0).removeClass("img_on");
	$(".main_img img").eq(1).removeClass("img_on");
	$(".main_img img").eq(2).removeClass("img_on");
	$(".main_img img").eq(3).removeClass("img_on");
	$(".main_img img").eq(4).addClass("img_on");
});
/*$("#binfo").hover(
  function () {
    $("#b2").css("display","none");
    $("#b1").css("display","block");
  }, 
  function () {
    $("#b2").css("display","block");
    $("#b1").css("display","none");
  }
);*/

}
jQuery(function($)
{
    var ticker = function()
    {
        timer = setTimeout(function(){
            $('.notice_box li:first').animate( {marginTop: '-20px'}, 400, function()
            {
                $(this).detach().appendTo('ul.notice_box').removeAttr('style');
            });
            ticker();
        }, 2000);         
      };
// 0번 이전 기능
      $(document).on('click','.prev',function(){
        $('.notice_box li:last').hide().prependTo($('.notice_box')).slideDown();
        clearTimeout(timer);
        ticker();
        if($('#pause').text() == 'Unpause'){
          $('#pause').text('Pause');
        };
      }); // 0번 기능 끝
  
// 1. 클릭하면 다음 요소 보여주기... 클릭할 경우 setTimeout 을 clearTimeout 해줘야 하는데 어떻게 하지..
      $(document).on('click','.next',function(){
            $('.notice_box li:first').animate( {marginTop: '-20px'}, 400, function()
                    {
                        $(this).detach().appendTo('ul.notice_box').removeAttr('style');
                    });
            clearTimeout(timer);
            ticker();
            //3 함수와 연계 시작
            if($('#pause').text() == 'Unpause'){
              $('#pause').text('Pause');
            }; //3 함수와 연계
          }); // next 끝. timer 를 전연변수보다 지역변수 사용하는게 나을 것 같은데 방법을 모르겠네요.



  //3 재생정지 함수 끝
  //4 마우스를 올렸을 때 기능 정지
  var tickerover = function()
  {
    $('.notice_box').mouseover(function(){
      clearTimeout(timer);
    });
    $('.notice_box').mouseout(function(){
      ticker();
    });  
  };
  tickerover();
  // 4 끝
    ticker();
    
});