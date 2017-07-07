<?php
	require_once("config.php");
	if($_SESSION['user_id']!=null){ ?>
		<script type="text/javascript">
			alert("이미 로그인되어있습니다.");
			location.replace("index.php");
		</script>
	<?php }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/login.css">
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
               <div class="block">
               <h1 class="logo"><a href="index.php"><img src="image/logo.png" alt=""></a></h1>
               <ul>
                   <li><a href="./intro.php">동아리소개</a></li>
                   <li><a href="./notice.php">공지사항</a></li>
                   <li><a href="./free_notice.php">자유게시판</a></li>
                   <li><a href="./imdex.php#gallery">갤러리</a></li>
                   <li><a href="http://cafe.naver.com/sdhsss">공식카페</a></li>
               </ul>
           </div>
            </div>
        </header>
        
        <div id="content">
            <div class="login">
            <h1>Login</h1>
            <form action="login_add.php" method="post">
            <input type="text" placeholder="   ID" required="required" name="id"/>
            <input type="password" placeholder="   Password" required="required" name="pwd"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
            
            </form>
           </div>
        </div>
    </div>
</body>
</html>