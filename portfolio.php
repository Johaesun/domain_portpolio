<?php
include "./db/db.php";
$sql = "select * from hyesun.pf";
$se = $pdo->prepare($sql);
$se->execute();
$result = $se->fetchAll();
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Web developer &#124; Johysun</title>
		<link rel="stylesheet" href="./css/font.css">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/portfolio.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	</head>

	<body>
		<div id="wrap">
			<?php include "./layout/header.php"?>
			<div class="section">
				<ul>
					<?php foreach($result as $row){ 
						$date = $row['pf_date'];
						$date_cut = substr($date,0,4);
					?>
					<li>
						<div class="content">
							<div class="content_text">
								<h3>
									<?=$row['pf_name']?>
								</h3>
								<p>
									<?=$date_cut?>
								</p>
							</div>
						</div>
					</li>
					<?php }?>
				</ul>
			</div>
			<?php include "./layout/footer.php"?>
		</div>
	</body>
	<script src="./js/script.js"></script>
	<script src="./js/portfolio.js"></script>

	</html>
