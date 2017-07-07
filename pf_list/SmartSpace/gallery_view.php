<?php
	require_once("config.php");
	$idx=$_GET['idx'];
	$q="SELECT * FROM gallery WHERE idx='$idx'";
	$result=$db->query($q);
	$row=$result->fetch_assoc();
	$q2="UPDATE gallery set hit=hit+1 WHERE idx='$idx'";
	$db->query($q2);
/*	$row['content']=htmlentities($row['content']); //html 제
	$row['content']=nl2br($row['content']);*/
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/free_notice_watch.css">
	<script type="text/javascript">
	function button_event(){
		if(confirm("정말 삭제하시겠습니까?") == true){
			location.replace("remove.php?idx=<?php echo $row['idx']?>");
		}else{
			return;
		}
	}
	</script>
</head>
<body>
    <div id="wrap">
        <?php
		  include "header.php";
		?>
        
        <div class="content">
           <div class="content_wrap">
              <div class="content_top">
                 <!--제목-->
                  <p class="title"><?php echo $row['title']?></p>
              </div>
              <ul class="content_top2">
              <li class="number">number : <?php echo $row['idx']?></li>
              <li class="name">name : <?php echo $row['name']?></li>
              <li class="date">date : <?php echo $row['date']?></li>
              </ul>
              
              <div class="text">
                 <!--본문-->
                  <p><?php echo $row['content']?></p>
              </div>
              <div class="btn">
				 <?php
				 if($_SESSION['user_idx']==$row['mem_idx']){
				 ?>
                 <a href="edit.php?idx=<?php echo $row['idx']?>"><button>edit</button></a>
				 <button onclick="button_event();">remove</button>
				 <?php
				 }
				 ?>
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