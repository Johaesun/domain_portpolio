<?php
	include_once 'db.php';
	$delete = "DELETE from board where idx = '{$_GET['idx']}'";
	$pdo -> query($delete); 
?>
<script>
	location.href='sub1.php'; 
</script>