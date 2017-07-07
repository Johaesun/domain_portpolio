<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>다른 물과 다른 삼다수&#33;</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/login.css">
	<!--jquery등록-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--nav-->
	<script src="./js/nav.js"></script>
	<script src="./js/regularexpression.js"></script>
</head>

<body>
	<div id="wrap">
		<?php
			include('./layout/header_nav.php')
			?>
		<div class="section container">
			<form action="./htdocs/join_db.php" method="post" enctype="multipart/form-data" class="send">
				<p class="login_title">join</p>
				<div class="input_wrap">
					<p class="line">or</p>
					<ul>
						<li>
							<label for="name">NAME</label>
							<input type="text" name="name" id="name" required>
						</li>
						<li>
							<label for="email_id">Email Address</label>
							<input type="text" name="email_id" id="email_id" required>
						</li>
						<li>
							<label for="pw">PASSWORD</label>
							<input type="text" name="pw" id="pw" required>
						</li>
						<li>
							<label for="company">COMPANY</label>
							<input type="text" name="company" id="company" required>
						</li>
					</ul>
					<p class="sign_in"><a href="./login.php">Do you ant to login&#63;</a></p><br>
					<input class="btn_login" value="login" type="submit">
				</div>
			</form>
		</div>
		<?php
			include('./layout/footer.php')
			?>
	</div>
</body>
<script src="js/login.js"></script>

</html>
