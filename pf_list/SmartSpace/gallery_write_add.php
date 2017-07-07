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
    preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $content, $match);
    
    $sum_img=$match[1];

	$mem_idx=$_SESSION['user_idx'];
	$mem_name=$_SESSION['user_name'];
	$ip=$_SERVER['REMOTE_ADDR'];
    
    $q="INSERT INTO gallery (mem_idx, name, sum_img, title, content, date)
    VALUES('$mem_idx', '$mem_name', '$sum_img', '$title', '$content', now())";

	$result=$db->query($q);

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
		location.replace("gallery.php");
		</script>
		<?php
?>