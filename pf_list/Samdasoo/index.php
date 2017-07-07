<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>다른 물과 다른 삼다수&#33;</title>
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/style.css">
	<!--메인슬라이드css-->
	<link rel="stylesheet" href="./css/flickity.css">
	<!--jquery등록-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--메인슬라이드js-->
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
	<!--nav-->
	<script src="./js/nav.js"></script>
	<script src="./js/header_transform.js"></script>

</head>

<body>
	<div id="wrap">
		<?php
		include('./layout/header_nav.php')
		?>

	</div>
	<!--슬라이드-->
	<div class="main_slide scroll_top">
		<div class="carousel" data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false }'>
			<div class="carousel-cell"></div>
			<div class="carousel-cell"></div>
			<div class="carousel-cell"></div>
		</div>


		<div class="main_text">
			<p>우리 몸에 화산암반수를 채워주세요</p>
			<h1>
				<a href="./index.php">
					<img src="./img/logo.png" alt="로고">
				</a>
			</h1>
			<div class="main_textBox">
				<p>&#35;제주도의 푸른 밤</p>
				<p>&#35;삼다수 소식</p>
			</div>
			<!--<img src="./img/bottle_1.png" alt="삼다수">-->
		</div>

		<a href="#box01" class="scroll_wrap">
			<div class="scroll">▼</div>
		</a>
	</div>

	<!--box01-->
	<div class="box01 container">
		<h2>다른 물과 다른 삼다수&#33;</h2>
		<div class="subText">
			<p>0-index&#40;맛있는 물의 지표로서 2이상이면 맛있는 물&#44; 값이 클수록 맛있는 물을 나타냄&#41;</p>
			<p>지표값이 7&#46;81로 국내외 타 먹는 샘물에 비해 높아 깨끗한 맛을 자랑합니다&#46;</p>
		</div>
		<img class="wather_img" src="./img/water1.png" alt="물">
		<a href="./carrer.php" class="more_btn">
			<p>more</p>
		</a>
		<ul class="box01_content">
			<li>
				<p>환원력이 강한 물</p>
			</li>
			<li>&#61;</li>
			<li>
				<p>산화력이 약한 물</p>
			</li>
		</ul>
	</div>
	<div class="box02 container">
		<div class="box02_subwrap">
			<h2>최근 삼다수 소식</h2>
			<div class="subText">
				<p>화산암반류가 빚어낸 맛있고, 건강한물 제주지하수의</p>
				<p>1등 물의 소식들을 전해드립니다.</p>
			</div>
			<a href="./news.php" class="more_btn">
				<p>more</p>
			</a>
			<div class="img_hover">
				<ul>
					<li>
						<a href="http://www.ihalla.com/read.php3?aid=1486393200557569010">&#91;한라일보&#93;</a>
					</li>
					<li>
						<a href="http://www.ihalla.com/read.php3?aid=1486479600557664010">&#91;한라일보&#93;</a>
					</li>
					<li>
						<a href="http://www.ihalla.com/read.php3?aid=1486652400557819010">&#91;한라일보&#93;</a>
					</li>
					<li>
						<a href="http://www.anewsa.com/detail.php?number=1129787&thread=09r02">&#91;아시아 뉴스통신&#93;</a>
					</li>
					<li>
						<a href="http://moneys.mt.co.kr/news/mwView.php?type=1&no=2017021411368092694&outlink=1">&#91;MoneyS&#93;</a>
					</li>
					<li>
						<a href="http://www.sisajeju.com/news/articleView.html?idxno=265935">&#91;시사제주&#93;</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="box03 container">
		<ul>
			<li>
				<a href=""></a>
			</li>
			<li>
				<a href=""></a>
			</li>
		</ul>
	</div>
	<?php
		include('./layout/footer.php')
		?>
</body>

</html>
