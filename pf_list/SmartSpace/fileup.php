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
    <link rel="stylesheet" href="./css/free_notice_write_2.css">
</head>
<body>
    <div id="wrap">
        <?php
		include "header.php";
		?>
        
        <div class="content">
           <div class="content_wrap">
               <form action="free_notice_write_add.php" method="post" class="write">
               	<ul class="sub_wrap">
               	    <li class="title">
               	        <p>title</p>
               	        <input type="text" name="title" id="title" required="required">
               	    </li>
               	    <li class="text">
               	        <textarea name="content" id="content" cols="110" rows="30" required="required"></textarea>
               	    </li>
               	</ul>
				<button type="submit">write</button>
               </form>
			   <div id="upimg">
			   	<form action="upload.php" method="post" enctype="multipart/form-data" class="imgup">
			   		<input type="file" name="fileToUpload" id="fileToUpload"><br>
			   		<input type="submit" value="Upload Image" name="submit">
			   	</form>
			   </div>
           </div>
        </div>
        
        <?php
		include "footer.php"
		?>
    </div>
    <script src="./js/jquery-2.1.1.min.js"></script>
</body>
</html>