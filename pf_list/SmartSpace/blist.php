<?php
	require_once("config.php");
	/*$page_size=10;
	$page_list_size=10;*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
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
					$q="SELECT * FROM board order by idx desc";
					$result=$db->query($q);
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
	</article>
	<?php  if(isset($_SESSION['user_id'])){ ?>
	<?php } ?>
</body>
</html>