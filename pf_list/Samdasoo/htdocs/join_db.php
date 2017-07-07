<?php
include "./db.php";
$insert = "insert into members set name='{$_POST["name"]}', email_id='{$_POST["email_id"]}', pw='{$_POST["pw"]}', company='{$_POST["company"]}'";
$result=$pdo->query($insert);
echo "<script>alert('회원가입이 완료되었습니다.');</script>";
echo "<script>location.href='../index.php'</script>";
?>