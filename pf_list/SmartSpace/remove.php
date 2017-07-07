<?php
	require_once("config.php");
	$idx=$_GET['idx'];
	$q="DELETE FROM board where idx='$idx'";
	$result=$db->query($q);
	if($result){ ?>
	<script type="text/javascript">
		alert("삭제완료");
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