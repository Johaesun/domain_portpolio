<?php
include 'db.php';
$file = $_FILES["upload"]['name'];
print_r ($file);
print_r (SERVER); 
// $file_dir = $_SERVER['DOCUMENT_ROOT']."\\fileupload\\";
// print $file_dir; 
// print microtime(); 
// $file_path=$file_dir.md5(microtime()).$file;
// print $file_path; 
// if($_FILES["upload"]["size"]<10)
// {
//     move_uploaded_file($_FILES['upload']['tmp_name'],$file_path); 
// } else { echo '<script>alert("용량초과입니다." )</script>' }
    
?>
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Priv