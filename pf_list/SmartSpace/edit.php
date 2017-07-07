<?php
	require_once("config.php");
	$idx=$_GET['idx'];
	$q = "SELECT * FROM board WHERE idx='$idx'";
	$result=$db->query($q);
	$row=$result->fetch_assoc();
	if($_SESSION['user_idx']!=$row['mem_idx']){ ?>
		<script type="text/javascript">
			alert("오류!");
			location.replace("index.php");
		</script>
	<?php
	}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/free_notice_write.css">
</head>
<body>
    <div id="wrap">
        <?php
		include "header.php";
		?>
        
        <div class="content">
           <div class="content_wrap">
               <form action="edit_add.php?idx=<?php echo $row['idx']?>" method="post">
               	<ul class="sub_wrap">
               	    <li class="title">
               	        <p>title</p>
               	        <input type="text" name="title" id="title" value="<?php echo $row['title'];?>" required="required">
               	    </li>
               	    <li class="text">
               	        <textarea name="content" id="content" cols="110" rows="30" required="required"><?php echo $row['content'];?></textarea>
               	    </li>
               	</ul>
				<button type="submit">edit</button>
               </form>
           </div>
        </div>
        
        <?php
		include "footer.php"
		?>
    </div>
    <script src="./js/jquery-2.1.1.min.js"></script>
</body>
</html>