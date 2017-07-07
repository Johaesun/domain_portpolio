<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
	require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <link rel="stylesheet" href="./css/gallery.css">
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
     <?php
		include "header.php";
		?>
        
        <div class="banner">
        <img src="./image/sky.jpg" alt="">
        </div>
        
        <section>
            <div class="intro_list">
                <h2>CLUB INTRO</h2>
                <ul>
                    <li><a href="intro.php">동아리 소개</a></li>
                    <li class="gallery"><a href="gallery.php">갤러리</a></li>
                </ul>
            </div>
            
            <div class="intro_box">
                <h2>갤러리</h2>
                <div class="gallery_wrap">
                    <ul class="gallery_on">
                                <li><img src="" alt=""></li><!--이미지는 임시 첫번째로 들어오는 이미지가 섬네일이되게하기-->
                                <li>제목띠</li>
                                <li><p>작성일 : 앙</p></li>
                                <li><p>조회수 </p></li>
                    </ul>
                </div>
                <a href="gallery_write.php"><button>글쓰기</button></a>
            </div> 
        </section>
        
        <?php
		include "footer.php"
		?>
</body>
    <script>
    </script>
</html>