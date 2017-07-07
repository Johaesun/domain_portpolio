<?php
// print_r($_POST);
// exit();
	include_once 'db.php'; 
	$file = $_FILES['upload']['name'];
		//print_r ($_SERVER);
	$file_dir = $_SERVER['DOCUMENT_ROOT']."/upload/";
	$file_name_enc = md5(microtime()).$file;
	$file_path=$file_dir.$file_name_enc;
	if ($_FILES["upload"]["size"] < 5000000) {
		move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
	} else {
		echo " <script> alert('파일 용량이 너무 큼 ')</script>"; 
	}
  $insert = "
  insert into board set
  title = '{$_POST['title']}',
  name = '{$_POST['name']}' ,
  content = '{$_POST['text']}',
  file='{$file}',
  file_enc='{$file_name_enc}'
  ";
  	$rs = $pdo ->query($insert); 
?>
<script>
	location.href ='sub1.php'; 
</script>
