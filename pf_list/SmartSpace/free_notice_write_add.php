<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require_once("config.php");

		if($_SESSION['write_limit']>=10){ ?>
		<script type="text/javascript">
			alert("잦은 글쓰기는 타인에게 불편함을 줍니다.");
			location.replace("free_notice.php");
		</script>
		<? exit;
		}

//	$reg_date = date("Y-m-d",time(0));

	$title=$_POST['title'];
	$content=$_POST['contents'];

	$mem_idx=$_SESSION['user_idx'];
	$mem_name=$_SESSION['user_name'];
	$ip=$_SERVER['REMOTE_ADDR'];

	if(isset($_SESSION['up_img'])){
		$img=$_SESSION['up_img'];
		$q="INSERT INTO board (mem_idx, name, title, content, img, date)
		VALUES('$mem_idx', '$mem_name', '$title', '$content', '$img', now())";
	}
	else{
		$q="INSERT INTO board (mem_idx, name, title, content, date)
		VALUES('$mem_idx', '$mem_name', '$title', '$content', now())";
	}
	$result=$db->query($q);
	$_SESSION['up_img']=NULL;

	if(result==false){
		?>
		<script type="text/javascript">
			alert("글등록실패");
		</script>
		<?php
		exit;
	}
		/*$q2="insert into ss_ip (mem_idx, name, ip) VALUES('$mem_idx', '$mem_name', '$ip')";
		$db->query($q2);*/
		$_SESSION['write_limit']+=1;
		?>
		<script type="text/javascript">
		location.replace("free_notice.php");
		</script>
		<?php
?>