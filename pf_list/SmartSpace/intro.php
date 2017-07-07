<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/intro.css">
</head>
<body>
    <div id="wrap">
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
                    <li><a href="intro.html">동아리 소개</a></li>
                    <li class="gallery"><a href="gallery.php">갤러리</a></li>
                </ul>
            </div>
            
            <div class="intro_box">
                <h2>동아리 소개</h2>
                <div class="introBox1">
                    <p>『 SMART SPACE 』</p>
                    <ul>
                        <li><img src="./image/967820_960_720.jpg" alt="이미지1"></li>
                        <li><img src="./image/hands-600497_1280.jpg" alt="이미지2"></li>
                        <li><img src="./image/11223_4486_339.jpg" alt="이미지3"></li>
                        <li><img src="./image/tumblr_o8nz72jCIX1slhhf0o1_1280.jpg" alt="이미지4"></li>
                    </ul>
                    <p>공간정보 개발자를 개발하는 SMART SPACE는 학생들의 실력 향상을 돌보며 자습과 수업을 통해 더욱 뛰어난 실력을 기르는 것을 목표로 합니다.</p>
                </div>
                
                <div class="introBox2">
                    <h2>교육대상</h2>
                    <ul>
                        <li>서울디지텍고등학교를 재학중이여야함</li>
                        <li>공간정보학과 , 유비쿼터스과 학생들 중</li>
                    </ul>
                </div>
                
                <div class="introBox3">
                    <h2>동아리 활동시간</h2>
                    
                    <h4>학기중</h4>
                    <ul>
                        <li>종례 후 저녁식사</li>
                        <li>방과후수업이 있을 시 7시 동아리 활동시작</li>
                        <li>방과후수업이 없을 시 5시 동아리 활동시작</li>
                        <li>오후 9:00시에 동아리 활동 끝</li>
                    </ul>
                    
                    <h4>방학기간</h4>
                    <ul>
                        <li>오전 10:00까지 교실 입실 후 활동시작</li>
                        <li>오후 3:00시에 동아리 활동 끝</li>
                    </ul>
                </div>
                
                <div class="introBox4">
                    <h2>동아리 교육내용</h2>
                    
                    <h4>프로그래밍 언어들</h4>
                    <ul>
                        <li>Java</li>
                        <li>Html/Css</li>
                        <li>Javascript/Jqury</li>
                        <li>V-world</li>
                        <li>Jsp/Php</li>
                        <li>Python</li>
                        <li>Android Studio</li>
                    </ul>
                </div>
            </div> 
        </section>
        
        <?php
		include "footer.php"
		?>
    </div>
</body>
    <script>
    $(".member").click(function(){
        alert ("준비중입니다.");
    });
    </script>
</html>