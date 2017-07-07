<?php
	include_once 'db.php';
	$update = "update board set title='{$_POST['up_title']}' , content ='{$_POST['up_text']}'  where idx='{$_GET['idx']}'";
	$rs = $pdo -> query($update); 

	// $file = $_FILES['upload']['name'];
	// $img_insert = "update member set upload='{$file}'"; 
	// $file_dir = $_SERVER['DOCUMENT_ROOT']."/upload/"; 
	// $file_path = $file_dir.md5(microtime()).$file;
	// if ($_FILES["upload"]["size"] < 500000) {
	// 	move_uploaded_file($_FILES['upload']['tmp_name'], $file_path); 
	// } else {
	// 	echo " <script> alert('파일 용량이 너무 큼 ')</script>"; 
	// }
	// $pdo -> query($img_insert); 
	




	// print_r ($_POST); 
	// print_r ($sql) ;
	// echo $sql; 
	?>
<script>
	location.href='sub1.php'; 
</script>