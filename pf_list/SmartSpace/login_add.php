<?php
	require_once("config.php");
	//extract($_POST);
	$user_id=$_POST['id'];
	$user_pwd=$_POST['pwd'];
	$q="SELECT * FROM member WHERE id='$user_id' AND password='$user_pwd'";
	$result=$db->query($q);
    $row=$result->fetch_assoc();
	if(eregi(' ', $user_id)){ 
    echo"<script>alert('공백입력')</script>";
    echo"<script>location.href='login.php'</script>";
    }
	else if($row['password']==$user_pwd){
        $_SESSION['user_id']=$user_id;
        $_SESSION['user_pwd']=$user_pwd;
        $_SESSION['user_name']=$row['name'];
        $_SESSION['user_idx']=$row['mem_idx'];
        $_SESSION['admin']=$row['admin'];
        
	echo"<script>alert('로그인완료')</script>";
    echo"<script>history.go(-2);</script>";
	}
	else{ 
        echo"<script>alert('아이디나 비밀번호틀림')</script>";
        echo"<script>location.href='login.php'</script>";
    }

?>