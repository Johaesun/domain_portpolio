<?php
include "./db.php";
$today = date("y-m-d");
	if(isset($_GET['update'])){
		$insert = "insert into news set 
		title='{$_POST["title"]}',
		subtitle='{$_POST["subtitle"]}',
		company='{$_POST["company"]}',
		notice='{$_POST["notice"]}',
		pw='{$_POST["pw"]}',
		date='{$today}',
		id = '{$_SESSION["email_id"]}'";
		$result = $pdo->query($insert);
		echo "<script>location.href='../news.php'</script>";
	}else{
		$update="update news set 
		title='{$_POST["title"]}',
		subtitle='{$_POST["subtitle"]}',
		company='{$_POST["company"]}',
		notice='{$_POST["notice"]}',
		pw='{$_POST["pw"]}' 
		where idx='{$_GET['idx']}'";
		$result = $pdo->query($update);
		echo "<script>location.href='../news.php'</script>";
	}
?>