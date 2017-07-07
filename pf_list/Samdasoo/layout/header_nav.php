<div class="bag">
	<div class="etcFix">
		<p class="etcFix_close">X</p>
		<div class="etc_text">
			<h2>개인정보 보호정책</h2>
			<h3>개인정보 수집이용에 대한 동의</h3>
			<p>회원님의 소중한 개인정보는 다음과 같은 정책에 따라 수집 및 이용됩니다. 저희 제주삼다수에서는 해당 목적에 연관되는 개인정보만을 수집하며, 수집된 정보를 투명하고 안전하게 보호 관리할 것을 약속합니다. 이에 개인정보 수집및 이용에 대한 동의를 구합니다.</p>
			<h3>개인정보의 수집·이용 목적</h3>
			<ul>
				<li>회원님의 프로젝트에 대한 견적, 기간, 개발방법 등의 문의에 대한 정보가 보다 정확한 답변을 위해 수집됩니다.</li>
				<li>상시 인력채용을 위한 인재풀 유지를 위해 지원자의 개인정보가 수집됩니다. 수집항목
				</li>
				<li>필수항목: 성명, 나이, 회사명, 웹사이트, 연락처, 이메일, 의뢰내용, 예산, 첨부파일</li>
				<li>선택항목: 홈페이지</li>
			</ul>
			<h3>보유이용기간</h3>
			<p>원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.</p>
			<ul>
				<li>보존 이유 : 회원님의 동의를 통한 인재정보 유지 - 보존 기간 : 회원정보 삭제 요청시까지</li>
			</ul>
			<h3>동의를 거부할 권리 및 동의를 거부할 경우의 이익</h3>
			<p>위 개인정보 중 필수적 정보의 수집•이용에 관한 동의는 채용 심사를 위하여 필수적이므로, 위 사항에 동의하셔야만 채용심사가 가능합니다. 위 개인정보 중 선택적 정보의 수집•이용에 관한 동의는 거부하실 수 있으며, 다만 동의하지 않으시는 경우 채용 심사시 불이익을 받으실 수 있으며, 「동의하지 않음」을 선택한 후 본인이 등록한 선택적 정보에 대해서는 수집 &#42; 이용에 대해 동의한 것으로 간주합니다.</p>
		</div>
	</div>
</div>
<div class="nav_wrap">
	<div class="provide">
		<form action="#">
			<label for="">성별</label>
			<input type="radio" name="gubun" value="m">남자
			<input type="radio" name="gubun" value="f">여자
			<br>
			<label for="">연령대</label>
			<input type="radio" size="10" name="age" value="10대">10대
			<input type="radio" size="10" name="age" value="20대">20대
			<input type="radio" size="10" name="age" value="30대">30대
			<input type="radio" size="10" name="age" value="40대">40대
			<br>
			<label>평소 삼다수에 대한 이미지</label>
			<br>
			<input type="checkbox" name="samda_img" value="별로다">별로다
			<input type="checkbox" name="samda_img" value="그냥 그렇다">그냥 그렇다
			<input type="checkbox" name="samda_img" value="좋다">좋다
			<input type="checkbox" name="samda_img" value="매우 좋다">매우 좋다
			<br>
			<label for="">삼다수에게 칭찬해주고 싶은 점</label>
			<br>
			<textarea name="feedback1" id="feedback1" cols="30" rows="10"></textarea>
			<br>
			<label for="">삼다수에게 해주고 싶은 말</label>
			<br>
			<textarea name="feedback2" id="feedback2" cols="30" rows="10"></textarea>
		</form>
	</div>
	<div class="nav">
		<div class="member">
			<?php
						if(!isset($_SESSION['email_id'])){
						?>
			<a href="./login.php">login</a><br>
			<a href="./join.php">join</a>
			<?php
						}else{
							?>
			<a href="./htdocs/logout_db.php">login out</a><br>
			<?php
						}
						?>
		</div>
		<p class="close">X</p>
		<ul class="mainMenu">
			<li>
				<a href="./index.php">제주삼다수</a>
			</li>
			<li>
				<a href="./jeju.php">삼다수의 고향</a>
			</li>
			<li>
				<a href="./carrer.php">브랜드 삼다수</a>
			</li>
			<li>
				<a href="./contact.php">Contact</a>
			</li>
		</ul>
		<ul class="subMenu">
			<li>
				<a href="./news.php">news</a>
			</li>
			<li>
				<a href="#" class="provide_click">provide feedback</a>
			</li>
		</ul>
	</div>
</div>
<header>
	<h1>
		<a href="index.php">
			<img src="./img/logo.png" alt="Logo">
		</a>
	</h1>
	<dl class="top-right">
		<dt>메뉴, 맨밑스크롤</dt>
		<dd class="menu_scroll"></dd>
		<dd class="menu_list">
			<span class="manu_ani"></span>
			<span class="manu_ani"></span>
			<span class="manu_ani"></span>
		</dd>
	</dl>
</header>
