<?php
    include_once './inc/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/join.css">
    <meta charset="UTF-8">
    <title>20601 송은지</title>
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/regularexpression.js"></script>
   <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
   
   <script src="js/post.js"></script>

</head>
<body>
    <div id="wrap" class="sub" >
      
        <div id="article">
            <div id="survise">
                <h2>회원서비스</h2>
                <nav>
                    <ul>
                        <li>로그인</li>
                        <li class="now">회원가입 <span>></span></li>
                        <li>아이디/비밀번호찾기</li>
                        <li>회원정보 수정</li>
                        <li>개인정보 취급방침</li>
                    </ul>
                </nav>
            </div>
            <div id="joinbox">
                <div id="join">
                <h4>홈 &nbsp; >&nbsp; 회원서비스&nbsp; > &nbsp;회원가입 <br/> &nbsp;</h4>
                <h1>회원가입</h1>
                <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
                <ul>
                    <li>약관동의</li>
                    <li>></li>
                    <li>본인인증</li>
                    <li>></li>
                    <li>회원정보입력</li>
                    <li>></li>
                    <li>가입완료</li>
                </ul>
                </div>
                <div id="in">
                    <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
                </div>
                <form action="insert_member.php" method="post">
                <div id="put">
                    
                     <table class="table">
                        <tr>
                            <td>한글이름&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="name_kr"  maxlength="5" required="한글이름을 입력해주세요"></td>
                        </tr>
                        <tr>
                            <td>영문이름<span class="star">*</span></td>
                            <td><input type="text" name="name_en" maxlength="30" required="영문이름을 입력하세요"></td>
                        </tr>
                        <tr>
                            <td>생년월일&nbsp;<span class="star">*</span></td>
                            <td><select name="year" class="year">
                                 <?php
                                    for ($i = 1917; $i < 2017;  $i ++) {
                                        echo "<option value=".$i.">".$i."</option>"; 
                                    }
                                ?>
                            </select>&nbsp;년</td>
                            <td><select name="month" class="month">
                                <?php
                                    for ($i = 1; $i<=12; $i++) {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                ?>
                            </select>&nbsp;월</td>
                            <td><select name="day" class="day">
                                 <?php
                                    for ($i = 1; $i<=31; $i++) {
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                ?>
                                </select>&nbsp;일    
                            </td>
                        </tr>
                        <tr>
                            <td>아이디&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="id" id="uid" maxlength="15" required="ID를 입력하세요"></td>
                            <td><input type="button" value="중복확인"></td>
                            <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호&nbsp;<span class="star">*</span></td>
                            <td><input type="password" name="pw" id="upw" maxlength="20" required="비밀번호를 입력하세요"></td>
                            <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                            <td><input type="text" name="pw_check" maxlength="20"></td>
                            <td><span class="ex">&nbsp; 비밀번호를 한번 더 입력하세요</span></td>
                        </tr>
                        <tr>
                            <td id="call">전화번호</td>
                            <td><select name="tel">
                                <option value="02">02</option>
                                <option value="031">031</option>
                                <option value="032">032</option>
                                <option value="033">033</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="tel2" maxlength="4" required="번호를 입력하세요">&nbsp;-</td>
                            <td><input type="text" name="tel3" maxlength="4">&nbsp; - </td>
                            <td><span class="ex">&nbsp; 예약시 휴대폰으로 문자가 발송됩니다.</span></td>
                        </tr>
                        <tr>
                            <td id="phone">휴대폰번호&nbsp;<span class="star">*</span></td>
                             <td><select name="phone" >
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" name="phone2" maxlength="4">&nbsp;-</td>
                            <td><input type="text" name="phone3" maxlength="4"></td>
                        </tr>
                        <tr>
                            <td id="sms">SMS 수신여부&nbsp;<span class="star">*</span></td>
                            <td><input type="radio" name="sms" value="1">&nbsp;예</td>
                            <td><input type="radio" name="sms" value="2">&nbsp;아니오</td>
                            <td><span class="ex">회원공지 알림에 대한 수신여부입니다.</span></td>
                        </tr>
                        <tr>
                        <td>E-MAIL</td>
                        <td>
                            <input type="text" name="email" id="mail" maxlength="20">
                        </td>
                        </tr>            
                        <tr>
                            <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                            <td>
                                <input type="text" id="sample6_postcode" placeholder="우편번호" name="post" maxlength="5">
                                <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호찾기" >
                            </td>
                        </tr>
                        <tr>
                            <td>자택주소&nbsp;<span class="star">*</span></td>
                            <td><input type="text" id="sample6_address" placeholder="주소" name="home">
                                <input type="text" id="sample6_address2" placeholder="상세주소" name="home2"></td>
                        </tr>
                        <tr>
                            <td>DM발송처<span class="star">*</span></td>
                            <td><input type="radio" value="2" name="dm" >자택</td>
                            <td><input type="radio" value="1" name="dm">회사</td>
                        </tr>
                    </table>
                    </div>
                    <div id="line2"></div>
                    <div id="put2">
                        <table class="table2">
                            <tr>
                                <td>직장명&nbsp;<span class="star">*</span></td>
                                <td><input type="text" name="company"></td>
                            </tr>
                            <tr>
                                <td>직종</td>
                                <td><input type="text" style="margin-left:42px;" name="work"></td>
                            </tr>
                            <tr>
                                <td>직위&nbsp;<span class="star">*</span></td>
                                <td><input type="text" style="margin-left:30px;" name="position"></td>
                            </tr>
                            <tr>
                                <td id="workpost">직장 우편번호<span class="star">*</span></td>
                                <td><input type="text" id="sample4_postcode" placeholder="우편번호" name="cp_post">&nbsp;</td>
                                <td><input type="button" onclick="sample4_execDaumPostcode()" value="우편번호 찾기"><br></td>
                            </tr>
                            <tr class="company_ad">
                                <td>직장주소<span class="star">*</span></td>
                                <td><input type="text" name="cp" id="sample4_roadAddress"  placeholder="도로명 주소"></td>
                                <td><input type="text" id="sample4_jibunAddress" name="cp2" placeholder="지번주소"></td>
                            </tr>
                            <tr>
                                <td id="number">직장전화번호<span class="star">*</span></td>
                                <td><select name="cp_tel">
                                <option value="1">010</option>
                                <option value="2">011</option>
                                <option value="3">016</option>
                                <option value="4">017</option>
                                <option value="5">018</option>
                                <option value="6">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" maxlength="4" name ="cp_tel2" style="width:su60px;">&nbsp;-</td>
                            <td><input type="text" maxlength="4" name ="cp_tel3" style="width:60px;"></td>
                            </tr>
                            <tr>
                            <td id="fax">팩스번호</td>
                                <td><select name="fax">
                                <option value="1">010</option>
                                <option value="2">011</option>
                                <option value="3">016</option>
                                <option value="4">017</option>
                                <option value="5">018</option>
                                <option value="6">019</option>
                            </select>&nbsp;-</td>
                            <td><input type="text" maxlength="4" name = "fax2" style="width:60px;">&nbsp;-</td>
                            <td><input type="text" maxlength="4" name = "fax3"  style="width:60px;"></td>
                            </tr>
                            <tr>
                                <td id="marry">결혼여부</td>
                                <td><input type="radio" value="1" name="marry">미혼</td>
                                <td><input type="radio" value="2" name="marry">기혼</td>
                            </tr>
                            <tr>
                                <td id="mdate">결혼기념일</td>
                            <td><select name="m_year" class="year">
                                 <?php
                                    for ($i = 1917; $i < 2017;  $i ++) {
                                        echo "<option value=$i>$i</option>;"; 
                                    }
                                ?>
                            </select>&nbsp;년</td>
                            <td><select name="m_month" class="month">
                               <?php
                                    for ($i = 1; $i <= 12;  $i ++) {
                                        echo "<option value=$i>$i</option>;"; 
                                    }
                                ?>
                            </select>&nbsp;월</td>
                            <td><select name="m_day" class="m_day">
                                <?php
                                    for ($i = 1; $i <= 31 ;  $i ++) {
                                        echo "<option value=$i>$i</option>;"; 
                                    }
                                ?>
                                </select>&nbsp;일
                            </td>
                            </tr>
                        </table>

                    </div>
                    <div id="line3"></div>
                    <div class="btn_wrap2">
                        <div class="pos">
                            <a href="#" id="back">이전</a>
                        </div>
                        <div class="pos">
                            <button>다음</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>
<?php
    include_once './inc/footer.php'; 
?>