<?php
	include_once 'db.php';
	include_once './inc/header.php'; 
	  $select = "select * from board where idx='{$_GET['idx']}'";
    $rs = $pdo->query($select);
    $rs->execute();
    $data = $rs -> fetch(); 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<title>KCC 금강컨트리클럽</title>
<link rel="stylesheet" type="text/css" href="css/kcc_style.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
  $('.banner').flexslider({
    animation: "slide",
    controlNav: true,
    directionNav: false,
    slideshow: true,
    slideshowSpeed: 3000,
    animationLoop: true
    });
	//jquery onload
	$(function(){
		//Html parsing 이 다 된 후 호출되는 영역.
	  $(".lnb li a").mouseover(function(){
	  	$(".lnb li a.selected").removeClass("selected");
	  	$(this).addClass("selected");
	  });
	});
</script>
</head>
<body>

	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="sub1.php" class="selected_hard">글쓰기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">커뮤니티</a>						
						<span>&gt;</span>
						<strong>글쓰기</strong>
					</p>

              <div class="join_wrap">
                 <form action="update.php?idx=<?=$data['idx']?>" method="POST">
                 		<input type="text" class="update_title" name="up_title" placeholder="<?=$data['title']?>">
                 		<textarea name="up_text" class="update_text" id="text" cols="30" rows="10" placeholder="<?=$data['content']?>"></textarea>
                 		<label for="file_upload">첨부파일</label>
                 			<input type="file" name="upload" id="file_upload">
                 		<input type="hidden" value="<?=$data['idx']?>" name="idx" >
                 		<button>수정하기</button>
                 </form>
               </div>
           
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>