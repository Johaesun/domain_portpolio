<?php
include "./db.php";
$del="delete from news where idx='{$_GET['idx']}'";
$pdo -> query($del);
echo "<script>location.href='../news.php'</script>";
?>