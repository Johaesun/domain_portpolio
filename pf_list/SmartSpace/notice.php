<?php
	require_once("config.php");
	$admin=$_GET['admin'];
	if($admin==null){ ?>
		<script type="text/javascript" charset="utf-8">
		alert("권한이 없습니다.");
		history.back();
		</script>
	<?php }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/notice.css">
</head>
<body>
    <div id="wrap">
        <header>
          <div class="info_wrap">
              <div class="info_wrap_center">
                  <ul>
                      <li><a href="login.html">Login</a></li>
                      <li>Logout</li>
                      <li><a href="join.html">join</a></li>
                  </ul>
              </div>
          </div>
           <div class="header_wrap">
               <h1 class="logo"><a href="index.html"><img src="image/logo.png" alt=""></a></h1>
               <ul>
                   <li><a href="./intro.php">동아리소개</a></li>
                   <li><a href="./notice.php">공지사항</a></li>
                   <li><a href="./free_notice.php">자유게시판</a></li>
                   <li><a href="http://cafe.naver.com/sdhsss">공식카페</a></li>
               </ul>
           </div>
        </header>
        
        <div class="write">
            <div class="write_wrap">
                <from method="write">
                <!-- 준호야 input은 쌤이랑 명욱오빠만 쓸수있게해죵 공지사항이니깐.!-->
                    <input type="text" MAXLENGTH=100>
                    <button>enter</button>
                </from>
                
                <ul class="write_list">
                    <li>
                       <!-- 준호야 wirte_content 에 input에서 받은 내용이들어가고-->
                        <p class="write_content"</p>
                        <!-- date 에는 날짜받아서 넣어주랑-->
                        <p class="date"></p>
                    </li>
                </ul>
            </div>
        </div>
        
        <footer>
        <div class="footer_wrap">
            <ul class="adress">
                <li>서울특별시 용산구 회나무로12길 27</li>
                <li>02-****-****</li>
                <li>010-****-****</li>
            </ul>
            <p>Copyright&copy; Club SMART SPACE All Rights Reserved.</p>
        </div>
        </footer>
    </div>
    <script src="./js/jquery-2.1.1.min.js"></script>
</body>
</html>