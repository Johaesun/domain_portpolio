<?php
	require_once("config.php");
	if(isset($_GET['page'])) {
		$page=$_GET['page'];
	}else {
		$page=1;
	}
	$sql="select count(*) as cnt from board order by idx desc";
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
	
	$allPost=$row['cnt'];
	$onePage=10; //한페이지에 보여줄 글 개수
	$allPage=ceil($allPost/$onePage); //전체페이지수
	
	if($page<1 && $page>$allPage){?>
		<script type="text/javascript">
			alert("존재하지 않는 페이지입니다");
			history.back();
		</script>
	<? exit;}
	
	$sql="select * from board order by idx desc";
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
	$nextPage = (($currentSection + 1) * $oneSection) - ($onceSection-1); //다음페이지
	$paging='<ul>';
	//첫 페이지가 아니라면 처음 버튼을 생성
	if($page != 1) { 
		$paging .= '<li class="page page_start"><a href="./free_notice.php?page=1">처음</a></li>';
	}
	//첫 섹션이 아니라면 이전 버튼을 생성
	if($currentSection != 1) { 
		$paging .= '<li class="page page_prev"><a href="./free_notice.php?page=' . $prevPage . '">이전</a></li>';
	}
	
	for($i = $firstPage; $i <= $lastPage; $i++) {
		if($i == $page) {
			$paging .= '<li class="page current">' . $i . '</li>';
		} else {
			$paging .= '<li class="page"><a href="./free_notice.php?page=' . $i . '">' . $i . '</a></li>';
		}
	}
	
	//마지막 섹션이 아니라면 다음 버튼을 생성
	if($currentSection != $allSection) { 
		$paging .= '<li class="page page_next"><a href="./free_notice.php?page=' . $nextPage . '">다음</a></li>';
	}
	
	//마지막 페이지가 아니라면 끝 버튼을 생성
	if($page != $allPage) { 
		$paging .= '<li class="page page_end"><a href="./free_notice.php?page=' . $allPage . '">끝</a></li>';
	}
	$paging .= '</ul>';
	
	/* 페이징 끝 */
	$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문
	
	$sql = 'select * from board order by idx desc' . $sqlLimit; //원하는 개수만큼 가져온다
	$result = $db->query($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="board.css" />
</head>
<body>
	<article class="boardArticle">
		<table style="background-color:white;">
			<thead>
				<tr>
					<th scope="col" class="no">번호</th>
					<th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
					<th scope="col" class="date">작성일</th>
					<th scope="col" class="hit">조회</th>
				</tr>
			</thead>
			<tbody>
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
				<tr>
					<td class="no"><?php echo $row['idx']?></td>
					<td class="title"><a href="free_notice_watch.php?idx=<?php echo $row['idx']?>"><?php echo $row['title']?></a></td>
					<td class="author"><?php echo $row['name']?></td>
					<td class="date"><?php echo $row['date']?></td>
					<td class="hit"><?php echo $row['hit']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
		</table>
		<div class="paging">
			<?php echo $paging?>
		</div>
	</article>
</body>
</html>