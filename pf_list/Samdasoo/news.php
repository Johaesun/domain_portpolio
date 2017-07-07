<?php
    include ("./htdocs/db.php");
	if(isset($_SESSION['email_id'])){
		$sql1 = "select * from members where email_id ='{$_SESSION['email_id']}'";
		$se1 = $pdo->prepare($sql1);
		$se1->execute();
		$result1 = $se1->fetch();
	}
    $sql = "select * from news";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>다른 물과 다른 삼다수&#33;</title>
		<link rel="stylesheet" href="./css/news.css" type="text/css">
		<link rel="stylesheet" href="./css/style.css" type="text/css">
		<!--jquery등록-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
		<!--nav-->
		<script src="./js/nav.js"></script>
		<script src="./js/news.js"></script>
		<!--<script src='./js/regularexpression.js'></script>-->
		<script src="./js/header_transform.js"></script>
	</head>

	<body>
		<div id="wrap">
			<?php
            include('./layout/header_nav.php')
        ?>
				<p class="btn_news_close">X</p>
				<div class="news_form">
					<?php
                    //foreach($result as $row){
                    ?>
						<form action="./htdocs/insert_db.php?update=false" method="post" enctype="multipart/form-data" class="send">
							<table>
								<tr>
									<td>title &#58; <input type="text" name="title" required placeholder="제목"></td>
									<!--<td>
                                <?//=//$row['date']?>
                            </td>-->
								</tr>
								<tr>
									<td>subtitle &#58; <input type="text" name='subtitle' required placeholder="부제목"></td>

								</tr>
								<tr>
									<td>company &#58; <input type="text" name="company" required value="<?= $result1['company']?>" readonly></td>
								</tr>
								<tr>
									<td>name &#58; <input type="text" name="name" required value="<?= $result1['name']?>" readonly></td>
								</tr>
								<tr>

									<td><textarea name="notice" id="textarea" cols="30" rows="10" placeholder="내용" required></textarea></td>
								</tr>
								<tr>
									<td><label for="pw">pw &#58; </label><input type="text" name="pw" id="pw" placeholder="비밀번호" value="<?= $result1['pw']?>" readonly></td>
								</tr>
							</table>
							<div class="btn_wrap">
								<input type="submit" value="작성" class="button">
							</div>
						</form>
						<?php
                 //   }
                    ?>
				</div>
				<div class="top_bg scroll_top">
					<div class="top_bgOpacity">
						<div class="top_text">
							<h2>삼다수 소식</h2>
							<p>최근 삼다수의 소식을 전해드립니다.
								<p>
						</div>
					</div>
				</div>

				<div class="content container box01">
					<div class="btn_wrap">
						<?php
						if(isset($_SESSION['email_id'])){
						?>
						<button class="btn_news button">글쓰기</button>
						<?php
						}
						?>
					</div>
					<?php
                            foreach($result as $row){
                            ?>
						<ul class="notice">
							<li>
								<p>Notice<br>
									<?=$row['idx']?>
								</p>
								<dl>
									<p>
										<?=$row['title']?>
											<p>
												<dd>
													<?=$row['date']?>
												</dd>
								</dl>
								<span class="notice_btn"></span>
							</li>
							<div class="content_box">
								<div class="cB_wrap">
									<span>
                           <?=$row['company']." ".$row['name']."기자"?>
                        </span>
									<p class="tt">
										<?=$row['title']?>
									</p>
									<p class="st">
										<?=$row['subtitle']?>
									</p>
									<p class="cB_notice">
										<?=$row['notice']?>
									</p>
									<span class="close_btn"></span>
									<p>
						<?php
						if(isset($_SESSION['email_id']) == $row['id']){
										?>
										<button class="btn_edit" rel="<?=$row['idx']?>">수정</button>
										<a href="./htdocs/del.php?idx=<?=$row['idx']?>"><button class="btn_del">삭제</button></a>
						<?php
						}
										?>
									</p>
								</div>
							</div>
						</ul>
						<?php
                            }
                            ?>
				</div>
				<?php
            include('./layout/footer.php')
        ?>
		</div>
	</body>
	<script src="./js/news.js"></script>

	</html>
