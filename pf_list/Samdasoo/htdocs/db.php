<?php
session_start();
    try{
        $pdo = new PDO ('mysql:host = 127.0.0.1; dbname=samdasoo; charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $Exception){
        die("연결실패".$Exception->getMessage());
    }
	function back(){
		echo "<script>window.history.go(-1)</script>";
	}
	function location($url){
		echo "<script>location.href='{$url}'</script>";
	}
?>
