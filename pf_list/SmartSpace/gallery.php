<?php
    @ini_set(‘display_error’, ‘On’);
    @error_reporting(E_ALL);
	require_once("config.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/ihover.css">-->
    <link rel="stylesheet" href="./css/gallery.css">
</head>
<body>
        <?php
		  include "header.php";
		?>
        
        <div class="banner">
        <img src="./image/sky.jpg" alt="">
        </div>
        
        <section>
           <?php
				if(isset($_GET['page'])) {
					$page=$_GET['page'];
				}else {
					$page=1;
				}
				$sql="select count(*) as cnt from gallery order by idx desc";
				$result=$db->query($sql);
				$row=$result->fetch_assoc();
                //$row=$db->fetch_assoc($result);
				
				$allPost=$row['cnt'];
				$onePage=16; //한페이지에 보여줄 글 개수
				$allPage=ceil($allPost/$onePage); //전체페이지수
				
				if($page<1 && $page>$allPage){?>
					<script type="text/javascript">
						alert("존재하지 않는 페이지입니다");
						history.back();
					</script>
				<? exit;}
				
				$sql="select * from gallery order by idx desc";
				$oneSection=10; //한번에 보여줄 페이지 개수
				$currentSection=ceil($page/$oneSection); //현재 섹션
				$allSection=ceil($allPage/$oneSection); //전체 섹션수

				$firstPage=($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션 처음페이지
				
				if($currentSection==$allSection){
					$lastPage=$allPage; //현재섹션이 마지막이면 전체페이지가 마지막페이지
				}else{
					$lastPage=$currentSection * $oneSection;
				}

				$prevPage = (($currentSection - 1) * $oneSection); //이전페이지
				$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection-1); //다음페이지
				$paging='<ul>';
				//첫 페이지가 아니라면 처음 버튼을 생성
				if($page != 1) { 
					$paging .= '<li class="page page_start"><a href="./gallery.php?page=1">처음</a></li>';
				}
				//첫 섹션이 아니라면 이전 버튼을 생성
				if($currentSection != 1) { 
					$paging .= '<li class="page page_prev"><a href="./gallery.php?page=' . $prevPage . '">이전</a></li>';
				}
				
				for($i = $firstPage; $i <= $lastPage; $i++) {
					if($i == $page) {
						$paging .= '<li class="page current">' . $i . '</li>';
					} else {
						$paging .= '<li class="page"><a href="./gallery.php?page=' . $i . '">' . $i . '</a></li>';
					}
				}
				
				//마지막 섹션이 아니라면 다음 버튼을 생성
				if($currentSection != $allSection) { 
					$paging .= '<li class="page page_next"><a href="./gallery.php?page=' . $nextPage . '">다음</a></li>';
				}
				
				//마지막 페이지가 아니라면 끝 버튼을 생성
				if($page != $allPage) { 
					$paging .= '<li class="page page_end"><a href="./gallery.php?page=' . $allPage . '">끝</a></li>';
				}
				$paging .= '</ul>';
				
				/* 페이징 끝 */
				$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
				$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문
				
				$sql = 'select * from gallery order by idx desc' . $sqlLimit; //원하는 개수만큼 가져온다
				$result = $db->query($sql);
			?>
            <div class="intro_list">
                <h2>CLUB INTRO</h2>
                <ul>
                    <li><a href="intro.php">동아리 소개</a></li>
                    <li class="gallery"><a href="gallery.php">갤러리</a></li>
                </ul>
            </div>
            
            <div class="intro_box">
                <h2>갤러리</h2>
                <div id="lol">
                    <div class="gallery_wrap">
                        <?php
                                while($row=$result->fetch_assoc())
                                {
                                    $datetime=explode(' ',$row['date']);
                                                    $date=$datetime[0];
                                                    $time=$datetime[1];
                                                    if($date==Date('Y-m-d'))
                                                        $row['date']=$time;
                                                    else
                                                        $row['date']=$date;
                                                ?>
                                <ul class="gallery_on">
                                    <a href="gallery_view.php?idx=<? echo $row['idx']?>"><li><img src="<?=$row['sum_img'] ?>" alt=""></li><!--이미지는 임시 첫번째로 들어오는 이미지가 섬네일이되게하기-->
                                        <li><?php echo $row['title']?></li>
                                        <li><p>작성일 <?php echo $row['date']?></p></li>
                                        <li><p>조회수 <?php echo $row['hit']?></p></li></a>
                                </ul>
                                <?}
                        ?>
                    </div>
                    <div class="paging">
				        <?php echo $paging?>
				    </div>
                    <div id="btn">
                        <a href="gallery_write.php"><button>글쓰기</button></a>
                   </div>
                </div>
            </div>
        
        </section>
         
        <?php
		include "footer.php"
		?>
</body>
    <script>
    </script>
</html>