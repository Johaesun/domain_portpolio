<?php
include "./db/db.php";
$sql = "select * from hyesun.pf where open = 'Y'";
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
							<img src="./img/<?=$row['pf_img']?>.jpg" alt="사이트 이미지">
							<p class="content_img">
								<?=$row['pf_img']?>
							</p>
							<div class="content_text">
								<h3 class="content_name">
									<?=$row['pf_name']?>
								</h3>
								<p class="content_year">
									<?=$date_cut?>
								</p>
							</div>
							<div class="content_explanation kr">
								<?=$row['pf_explanation']?>
							</div>
						</div>
						<!--content 닫는태그-->
					</li>
					<?php }?>
				</ul>
			</div>
			<div class="pf_up">
				<div class="pf_img"></div>
				<div class="pf_contents">
					<ul>
						<li>
							<h2 class="pf_tt">
							</h2>
							<a href="./pf_list/API/size.html" class="a_link">
								<p>&raquo;Click the link to go.</p>
							</a>
						</li>
						<li>
							<p>
								Year : <span class="pf_year"></span>
							</p>
							<p><span class="pf_Ex"></span></p>
						</li>
						<li>
							<button class="basic_btn_r">
								<a href="./portfolio.php">MY PORTFOLIO</a>
							</button>
						</li>
					</ul>
					<div class="pf_close contact_close">X</div>
				</div>
			</div>
			<?php include "./layout/footer.php"?>
		</div>
	</body>
	<script src="./js/script.js"></script>
	<script src="./js/portfolio.js"></script>

	</html>
