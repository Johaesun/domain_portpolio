<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>다른 물과 다른 삼다수&#33;</title>
	<link rel="stylesheet" href="./css/contact.css">
	<link rel="stylesheet" href="./css/style.css">
	<!--jquery등록-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--nav-->
	<script src="./js/nav.js"></script>
	<script src="./js/header_transform.js"></script>
</head>

<body>
	<div id="wrap">
		<?php
		 include("./layout/header_nav.php")
		 ?>
			<div class="top_bg scroll_top">
				<div class="top_bgOpacity">
					<div class="top_text">
						<h2>CONTACT</h2>
						<p>저희는 늘 준비되어 있습니다.
							<p>
					</div>
				</div>
			</div>

			<div class="box01 container box01_content">
				<ul class="ul_wrap">
					<li>
						<ul class="user_info">
							<li>
								<p>ADDRESS</p>
								<p>제주특별자치도 제주시 조천읍 남조로 1717-35</p>
							</li>
							<li>
								<p>TEL</p>
								<p>064)780-3300, 1636 <br>
								(제주개발공사 또는 삼다수를 말하세요)</p>
							</li>
							<li>
								<p>FAX</p>
								<p>(064)784-5020</p>
							</li>
							<li>
								<p>E-mail</p>
								<p>samdasoo@gmail.com</p>
							</li>
						</ul>
					</li>

					<li>
						<p>메세지를 보내주세요(*필수입력)</p>
						<div class="form_wrap c1">
							<form action="#">
								<input type="text" value= "메일">
								<input type="text" value= "연락받을 번호">
								<input type="text" value= "문의제목">
								<textarea name="textarea" cols="30" rows="10">
							</textarea>
								<p>
									<input type="checkbox" value="1" id="check_protect">
									<label for="check_protect"><span class="etcBtn">개인보호정책</span>에 동의합니다.</label>
								</p>
								<input type="submit" class="btn_them">
							</form>
						</div>
					</li>
				</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22400.472910679353!2d126.6644160975324!3d33.427149075556045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350d030a620155d9%3A0x61b96c053a8d02ab!2z7KCc7KO87Yq567OE7J6Q7LmY64-EIOygnOyjvOyLnCDsobDsspzsnY0g64Ko7KGw66GcIDE3MTctMzU!5e0!3m2!1sko!2skr!4v1490058294548" allowfullscreen></iframe>
			<?php
		 include("./layout/footer.php")
		 ?>
	</div>
</body>

</html>
