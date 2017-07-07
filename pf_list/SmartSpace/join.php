<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Smartspace</title>
    <link rel="stylesheet" href="./css/join.css">
</head>
<body>
    <div id="wrap">
       <?php
		include "header.php";
		?>
        <div id="content">
            <div class="login">
            <h1>Join</h1>
            <form action="./join_add.php" method="post">
            <input type="text" placeholder="ID" required="required" name="id"/>
            <input type="password" placeholder="Password" required="required" name="pwd"/>
            <input type="text" placeholder="Name" required="class" name="name"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">Join</button>
            </form>
           </div>
        </div>
    </div>
    <?php
	include "footer.php";
	?>
</body>
</html>