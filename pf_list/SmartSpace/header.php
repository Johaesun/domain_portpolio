<link rel="stylesheet" href="./css/page.css">
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
               <h1 class="logo"><a href="./index.php"><img src="image/logo.png" alt=""></a></h1>
               <ul>
                   <li><a href="./intro.php">동아리소개</a></li>
                   <li><a href="./notice.php">공지사항</a></li>
                   <li><a href="./free_notice.php">자유게시판</a></li>
                   <li><a href="http://cafe.naver.com/sdhsss">공식카페</a></li>
                   <li><a href="./location.php">오시는길</a></li>
               </ul>
               </div>
           </div>
        </header>