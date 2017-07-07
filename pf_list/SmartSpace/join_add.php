<?php
	require_once("config.php");
	//extract($_POST);
	$user_id=$_POST['id'];
	$user_pwd=$_POST['pwd'];
	$user_name=$_POST['name'];
	$q="INSERT INTO member(mem_idx, id, password, name) VALUES (null,'$user_id','$user_pwd','$user_name')";
	$q2="SELECT id FROM member WHERE id='$user_id'";
	$ck=$db->query($q2);
	$count=mysql_num_rows($ck);

if($count>0){ ?>
	<script type="text/javascript" charset="utf-8">
	alert("아이디 중복");
	location.replace("join.php");
	</script>
	<?php
}
else{
	$result=$db->query($q);
	if($result){
	?>
	<script type="text/javascript" charset="utf-8">
		alert("회원가입 완료");
		location.replace("index.php");
	</script>
	<?php
	}
	else { ?>
	<script type="text/javascript" charset="utf-8">
		alert("회원가입 실패(아이디 또는 이름 중복)");
		location.replace("join.php");
	</script>
<?php
	}
}
?>