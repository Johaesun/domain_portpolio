<?php
    require_once 'inc/header.php';
    include "db.php";
   // echo "업데이트 날립니다~~~";
    // UPDATE board SET asdfasdf=asdfasd
    $pdo->query("update board set hit = hit+1 where idx='{$_GET['idx']}'");	
    $select = "select * from board where idx='{$_GET['idx']}' ";
    $img_select = "select * from member where idx='{$_GET['idx']}'"; 
    $rs = $pdo->query($select); 
    $img = $pdo -> query($img_select); 
    $rs -> execute();
    // $se = $pdo->prepare($sql);
    // $se->execute();
    // $result = $se->fetchAll();
?>
<!-- //skip nav -->
<div id="wrap">
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
			<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">커뮤니티</h2>
					<ul class="lnb">
					<li><a href="#"  class="selected_hard">공지사항<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">Joinroom<span class="sp_sub select_ico"></span></a></li>
					</ul> 
				</div>		
				<div class="right_con">	
                                    <p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">회원서비스</a>						
						<span>&gt;</span>
						<strong>공지사항</strong>
					</p>
					<div class="join_wrap">	
						<h3 class="sp_sub join_title">공지사항</h3>
						<p class="join_txt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
               <table id="view">
                    <?php
                            $data = $rs -> fetch(); 
                            $img_data = $img -> fetch(); 
                         ?>
                    <tr class="view_tr" id="a">
                       <div class="td_wrap">
                       	<td id="view_title"><?=$data['title']?></td>
                      	<td id="view_hit">조회수 : <?=$data['hit']?></td> 
                       </div>
                    </tr>
                    <tr class="content">
  										<td><?=$data['content']?></td>  
  										<td><a href="/upload/<?=$data['file_enc']?>" download="<?=$data['file']?>" ><?=$data['file']?></a></td>
  								  </tr>
                    </table>
           <div class="btn">
            <div class="update_btn">
             <a href="./updateform.php?idx=<?=$data['idx']?>">수정하기</a>
              </div>
                <div class="delete">
                  <a href="./delete.php?idx=<?=$data['idx']?>">삭제하기</a>
                </div>
                <div class="list">
                 <a href="sub1.php">목록</a>
                 </div>
             </div>
			        </div>	
		          </div>	
	            </div>
            </div>
	<!-- //container -->
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>