

<?php include_once "db.php";
$insert = "insert into board set 
title='{$_POST["title"]}',
notice='{$_POST["notice"]}'";
$result=$pdo->query($insert);

$file_path=$_POST["upload"];
$img_insert="insert into member set
upload='{$upload}'"

$file=$_FILES['upload']['name'];
//print_r ($_SERVER); ['DOCUMENT_ROOT']를 가져오기위해 썼다.
$file_dir=$_SERVER ['DOCUMENT_ROOT']."\\f_up\\";
$file_path=$file_dir.md5(microtime()).$file;
//if($_FILES["upload"]["size"]<5000000){//1보다 작으면 업로드가 되게한다.
move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
//}else{
//    echo "<script>alert('파일 용량이 너무 큽니다.')</script>";
//}
;
$pdo->query($img_insert);
echo "<script>location.href='sub1.php'</script>";
?>