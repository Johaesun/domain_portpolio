<?php
	require_once("config.php");
	if($_SESSION['user_id']==null){ ?>
		<script type="text/javascript">
			alert("로그인을 해주세요");
			location.replace("login.php");
		</script>
	<?php }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/free_notice_write.css">
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="wrap">
        <header>
          <div class="info_wrap">
              <div class="info_wrap_center">
                  <ul>
					  <?php if(isset($_SESSION['user_id'])){ ?>
					  <li><?php echo $_SESSION['user_name']; ?></li>
					  <li><a href="logout.php">Logout</a></li>
					  <?php }
					  else{ ?>
					  <li><a href="login.php">Login</a></li>
					  <li><a href="join.php">join</a></li>
					  <?php } ?>
                  </ul>
              </div>
          </div>
           <div class="header_wrap">
               <h1 class="logo"><a href="index.php"><img src="image/logo.png" alt=""></a></h1>
               <ul>
                   <li><a href="./intro.php">동아리소개</a></li>
                   <li><a href="./notice.php">공지사항</a></li>
                   <li><a href="./free_notice.php">자유게시판</a></li>
                   <li><a href="http://cafe.naver.com/sdhsss">공식카페</a></li>
               </ul>
           </div>
        </header>
        
        <div class="content">
           <div class="content_wrap">
               <form action="ck_add.php" method="post">
               	<ul class="sub_wrap">
               	    <li class="title">
               	        <p>title</p>
               	        <input type="text" name="title" id="title" required="required">
               	    </li>
               	    <li class="text">
               	        <textarea name="contents" id="contents" cols="110" rows="30" required="required" style="height:450px;"></textarea>
               	        <script type="text/javascript">
                            CKEDITOR.replace('contents',{
                                height:'350px'
                                //'filebrowserUploadUrl': 'upimg.php'
                            });
                        </script>
               	    </li>
               	</ul>
				<button type="submit">write</button>
               </form>
               <!--
			   <div id="upimg">
			   	<form action="upload.php" method="post" enctype="multipart/form-data">
			   		<input type="file" name="fileToUpload" id="fileToUpload"><br>
			   		<input type="submit" value="Upload Image" name="submit">
			   	</form>
                -->
			   </div>
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