<?php
	include "./db.php";
	if(isset($_POST['email_id'])){
	$email_id = "select * from members where email_id = '{$_POST['email_id']}'";
	$result = $pdo -> query($email_id);
	$row = $result -> fetch();
		if($_POST['pw'] == $row['pw']){
			$_SESSION['email_id'] = $_POST['email_id'];
			echo "<script>alert('로그인이 완료되었습니다.')</script>";
			echo "<script>location.href='../index.php'</script>";
			//location("/pf_list/Samdasoo/news.php");
		}else{
			echo "<script>alert('비밀번호가 잘못되었습니다.')</script>";
			back();
		}
	}else{
		echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.')</script>";
		back();
	}
?>