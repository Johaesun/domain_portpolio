<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	require_once("config.php");
	$idx=$_GET['idx'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$q="UPDATE board SET title='$title',content='$content' WHERE idx='$idx'";
	$result=$db->query($q);
	if($result){ ?>
	<script type="text/javascript">
		alert("수정완료");
		location.replace("free_notice.php");
	</script>
	<?php
	}
	else{ ?>
	<script type="text/javascript">
		alert("오류");
		location.replace("free_notice.php");
	</script>
	<?php
	}
?>