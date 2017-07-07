<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>Smartspace</title>
	<link rel="stylesheet" href="./css/index.css">
</head>

<body>
	<div id="wrap">
		<?php
		include "header.php";
		?>

			<div class="slide_banner">
				<ul class="slide">
					<li><img src="./image/person-984236_1920.jpg" alt="slide1" title="slide1"></li>
					<li><img src="./image/architect-791707_1920.jpg" alt="slide2" title="slide2"></li>
					<li><img src="./image/person-731148_1920.jpg" alt="slide3" title="slide3"></li>
				</ul>
				<ul id="slide1_button">
					<li id="1"></li>
					<li id="2"></li>
					<li id="3"></li>
				</ul>
			</div>
			<div class="cast">
				<div class="contents cast_wrap">
					<p class="title">SMART SPACE CAST</p>
					<p class="sub_title">동아리의 최근 활동입니다.</p>
					<div class="cast_bx_wrap">
						<article class="cast_box"><img src="./image/network.png" alt=""></article>
						<div class="btn"><img src="./image/checkbox-mark2.png" alt="check"></div>
						<h2>그룹과제</h2>
						<p class="hye">그룹과제를 통한 <br> 동아리원들의 팀워크 향상.</p>
					</div>
					<div class="cast_bx_wrap">
						<article class="cast_box"><img src="./image/administrator.png" alt=""></article>
						<div class="btn"><img src="./image/checkbox-mark2.png" alt="check"></div>
						<h2>파트별 수업</h2>
						<p class="hye">체계적인 교육시스템으로 <br> 학생들의 뛰어난 전공지식을 완성.</p>
					</div>
					<div class="cast_bx_wrap">
						<article class="cast_box"><img src="./image/boss.png" alt=""></article>
						<div class="btn"><img src="./image/checkbox-mark2.png" alt="check"></div>
						<h2>자격증 관리</h2>
						<p class="hye">자격증을 딸 수 있도록<br>동아리내에서의 최대한의 지원.</p>
					</div>
				</div>
			</div>
			<div class="news">
				<div class="contents news_wrap">
					<p class="title">SMART SPACE NEWS</p>
					<p class="sub_title">동아리의 소식과 커뮤니티 게시판 입니다.</p>
					<ul class="news_box">
						<li>
							<a href="./intro.php"><img src="./image/sample.png" alt=""></a>
							<p>동아리 소개</p>
							<ul>
								<li><img src='./image/list.png'><a href='./intro.php'>교육대상</a></li>
								<li class='date'></li>
								<li><img src='./image/list.png'><a href='./intro.php'>동아리 활동시간</a></li>
								<li class='date'></li>
								<li><img src='./image/list.png'><a href='./intro.php'>동아리 교육내용</a></li>
								<li class='date'></li>
							</ul>
						</li>
						<li>
							<a href="./notice.php"><img src="./image/sample.png" alt=""></a>
							<p>공지사항</p>
						</li>
						<li>
							<a href="http://cafe.naver.com/sdhsss"><img src="./image/sample.png" alt=""></a>
							<p>자유게시판</p>
							<ul>
								<?php
                    $c=0;
                    $sql = 'select * from board order by idx desc';
                    $result=$db->query($sql);
			while($row=$result->fetch_assoc()){
			$date_e = $row['date'];
			$date=substr($date_e,0,10);

		        echo"<li><img src='./image/list.png'><a href='./free_notice_watch.php?idx= {$row['idx']}'>{$row['title']}</a></li>";
				echo"<li class='date'>{$date}</li>";
		
		    	$c++;
                        if($c==3)
                            break;
                        }
		?>

							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="study">
				<div class="contents study_wrap">
					<p class="title">SMART SPACE STUDY</p>
					<p class="sub_title">우리는 이러한 것 들을 배웁니다.</p>
					<div class="ul_wrap">
						<ul class="study_box">
							<li>
								<img src="./image/html.png" alt="">
								<p>HTML</p>
							</li>
							<li>
								<img src="./image/css.png" alt="">
								<p>CSS</p>
							</li>
							<li>
								<img src="./image/php.png" alt="">
								<p>PHP</p>
							</li>
							<li>
								<img src="./image/jsp.png" alt="">
								<p>JSP</p>
							</li>
						</ul>
						<ul class="study_box">
							<li>
								<img src="./image/mysql.png" alt="">
								<p>MYSQL</p>
							</li>
							<li>
								<img src="./image/android.png" alt="">
								<p>ANDRIOID SUDIO</p>
							</li>
							<li>
								<img src="./image/python.png" alt="">
								<p>PYTHON</p>
							</li>
							<li>
								<img src="./image/java.png" alt="">
								<p id="gallery">JAVA</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="gallery">
				<div class="gallery_wrap">
					<p class="title">SMART SPACE GALLERY</p>
					<p class="sub_title">동아리 활동 사진들 입니다.</p>
					<div class="main_img">
						<img src="./image/128-128-34de4cfcd13c83a4f7e2e48415c6938a.png" alt="" class="img_on">
						<img src="./image/128-128-8b61de4c84033266e15317a6eb9fda2d-css3.png" alt="">
						<img src="./image/128-128-8b61de4c84033266e15317a6eb9fda2d-jqury3.png" alt="">
						<img src="./image/128-128-d7a08928e83fc060f8244625009c2254-html5.png" alt="">
						<img src="./image/1468967004_MySQL.png" alt="">
					</div>
					<div class="sub_slideWrap">
						<button type="button" onclick="prev">&lt;</button>
						<ul class="sub_slide">
							<li><img src="./image/128-128-34de4cfcd13c83a4f7e2e48415c6938a.png" alt="" class="img_on"></li>
							<li><img src="./image/128-128-8b61de4c84033266e15317a6eb9fda2d-css3.png" alt=""></li>
							<li><img src="./image/128-128-8b61de4c84033266e15317a6eb9fda2d-jqury3.png" alt=""></li>
							<li><img src="./image/128-128-d7a08928e83fc060f8244625009c2254-html5.png" alt=""></li>
							<li><img src="./image/1468967004_MySQL.png" alt=""></li>
						</ul>
						<button type="button" onclick="next">&gt;</button>
					</div>
				</div>
			</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<?php
	include "footer.php";
	?>
</body>

</html>
