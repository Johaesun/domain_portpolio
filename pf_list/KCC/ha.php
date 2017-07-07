<?php
	$file = $_FILES["upload"]['name'];
	$img_sinert = "insert into member set upload='{$file}'"; 
	$file_dir = $_SERVER['DOCUMENT_ROOT']."/upload/";
	$file_path = $file_dir.md5(microtime()).$file; 
	if ($_FILES["upload"]["size"] < 500000) {
		move_uploaded_file($_FILES["upload"]["tmp_name"],$file_path);
	} else {
		echo "<script>alert("big")</script>"; 
	}
	$pdo -> query($img_insert); 
?>

<?php
	$file = $_FILES["upload"]["name"];
	$fileinsert = "insert into member set upload = '{$file}' ";
	$file_dir = $_SERVER["DOCUMENT_ROOT"]."/upload/";
	$file_path = $file_dir.md5(microtime()).$file;
	if ($_FILES["upload"]["size"] < 500000 ) {
		move_uploaded_file($_FILES['upload']['tmp_name'],$file_path); 
	} else {
		echo 
	}
?>

<?php
	$file = $_FILES['upload']['name'];
	$fileinset = "insert into mebmer set upload = '{$file}'"; 
	$file_dir = $_SERVER["DOCUEMENT_ROOT"]."/upload/";
	$file_path = $file_dir.md5(microtime()).$file; 
	if ($_FILES["upload"]["size"] < 50000) {
		move_uploaded_file($_FILES['upload']['tmp_name'],$file_path); 
	} else {
		echo "a"; 
	}
?>
<?php
	$file = ['upload']['name'];
	$file_inset = "insert into member set file = '{$file}'"; 
	$file_dir = $_FILES['upload']."/upload/"; 
	$file_path = $file_dir.md5(microtime()).$file; 
	if ($_FILES['upload']['size'] < 50000) {
		move_uploaded_file($_FILES['upload']['tmp_name'], $file_path); 
	} else {
		echo "A"
	}
?>