<?php
include "./htdocs/db.php";
$sql = "select * from pf";
$se = $pdo->prepare($sql);
$se -> execute();
$result = $se->fetchAll();
$sql_hyesun = "select * from hyesun";
$se = $pdo->prepare($sql_hyesun);
$se -> execute();
$result_hyesun = $se->fetchAll();
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="./css/index.css">
		<link rel="stylesheet" href="./css/desing_link.css">
		<link rel="stylesheet" href="./css/info.css">
		<link rel="stylesheet" href="./css/font.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	</head>

	<body>
		<div id="content_wrap">
			<div class="like_wrap">
				<p>My favorit list</p>
				<ul class="like_list">
					<?php foreach($result_hyesun as $row_1){?>
					<li>
						<span><?=$row_1['no']?></span>
						<p>
							<?=$row_1['Favorit']?>-</p>
					</li>
					<?php  }?>
				</ul>
				<img src="./img/icon_sync.png" alt="" class="btn_sycn">
			</div>
			<div class="desing_ok">
				<div class="desing_top"></div>
				<section>
					<ul class="photo">
						<li><img src="./img/what_your_name.jpg" alt=""></li>
					</ul>
				</section>
				<div class="desing_bot"></div>
			</div>
			<div class="info_box">
				<div class="info_left">
					<div class="info_me">
						<img src="./img/info_hyesun.jpg" alt="photo">
					</div>
					<ul class="info_text">
						<li>
							Johyesun <span>&#40;조혜선&#41;</span>
						</li>
						<li>
							WebDisineger &amp; WebProgrammer
						</li>
						<li>
							Education &#58; <a href="http://www.sdh.hs.kr/index.do">서울디지텍고등학교</a>
							<p>e-mail &#58; jo01026204706@gmail.com</p>
							<p>phon_num &#58; 010-2620-4706</p>
							<p>Design tools &#58; Photoshop</p>
						</li>
						<li>
							<P>I am proud of my skills &lang;3</P>
							<p>I have skills, for example<br><span>HTML/CSS JAVASCRIPT JQUERY AJAX PHP MYSQL</span></p>
						</li>
					</ul>
				</div>
				<div class="sns">
					<div class="sns_wrap">
						<ul>
							<li><img src="./img/icon_facebook_464646.png" alt="facebook"></li>
							<li><img src="./img/icon_pinterest_464646.png" alt="pinterest"></li>
							<li><img src="./img/icon_instar_464646.png" alt="instargram"></li>
						</ul>
						<a href="" class="school_video">
							school video <span>&rarr;</span>
						</a>
						<div class="sns_deco"></div>
					</div>
				</div>
			</div>

		</div>
		<div id="wrap">
			<header>
				<h1 class="logo">
					<a href=""></a>
				</h1>
				<div class="icon favolit"></div>
			</header>
			<div class="time_date_wrap">
				<p><span>My favolit is &#46;&#46;&#46;</span></p><br>
				<p class="date"></p>
				<p class="time"></p>
			</div>
			<div class="main_slide_wrap">

				<ul class="main_slide">
					<li>
						<img src="./img/main_slide_marian_c.jpg" alt="">
					</li>
					<li>
						<img src="./img/main_slide_dua_c.jpg" alt="">
					</li>
					<li>
						<img src="./img/main_slide_troye_c.jpg" alt="">
					</li>
				</ul>
				<!-- <button class="left"></button>
<button class="right"></button>-->
			</div>
		</div>
	</body>
	<script src="./js/ajax.js"></script>
	<script src="./js/index.js"></script>
	<script>
		//alert("");
	</script>
	</html>
