updateData(); //날짜

function updateData() {
    $.ajax({
        url: "./htdocs/today.php",
        type: "post",
        cache: "false",
        success: function (data) {
            $('.date').html(data);
        }
    });
    setTimeout("updateData()", 1000);
}

updateTime();	//시간
function updateTime(){
	$.ajax({
		url: "./htdocs/now_time.php",
		type: "post",
		cache: "false",
		success : function(data){
			$('.time').html(data);
		}
	});
	setTimeout("updateTime()",1000);
}

//$('.desing_link').click(function () {   //디자인
//    Desing(); 
//    function Desing() {
//        $.ajax({
//            url: "./htdocs/desing_link.php",
//            type: "post",
//            cache: "false",
//            success: function (data) {
//                $('#content_wrap').html(data);
//            }
//        });
//    }
//});
//
//$('.btn').click(function () { //info
//    Info();
//    function Info() {
//        $.ajax({
//            url: "./htdocs/info.php",
//            type: "post",
//            cache: "false",
//            success: function (data) {
//                $('#content_wrap').html(data);
//            }
//        });
//    }
//});