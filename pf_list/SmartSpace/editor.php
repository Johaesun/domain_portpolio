<?php
	/*require_once("config.php");
	if($_SESSION['user_id']==null){ ?>
		<script type="text/javascript">
			alert("로그인을 해주세요");
			location.replace("index.php");
		</script>
	<?php }
    */
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style1.css" />
	<link rel="stylesheet" href="board.css" />
	<script type="text/javascript" src="./se/js/HuskyEZCreator.js" charset="utf-8"></script>
	<style type="text/css">
		.boardArticle{ text-align:center; padding:15px;}
	</style>
	<title>글쓰기</title>
    
</head>
<body>
	<p>스마트에디터</p>
	<form action="free_notice_write_add.php" method="post">
        <input type="text" name="title" id="title" required="required">
        <textarea name="content" id="content" class="form-control" cols="110" rows="30" required="required"></textarea>
        <script type="text/javascript">
            var oEditors = [];
            $(document).ready(function(){
              // 추가 글꼴 목록
              //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

              nhn.husky.EZCreator.createInIFrame({
                oAppRef: oEditors,
                elPlaceHolder: "content",
                sSkinURI: "./se/SmartEditor2Skin.html",  
                htParams : {
                  bUseToolbar : true,       // 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                  bUseVerticalResizer : true,   // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                  bUseModeChanger : true,     // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                  //aAdditionalFontList : aAdditionalFontSet,   // 추가 글꼴 목록
                  fOnBeforeUnload : function(){
                    //alert("완료!");
                  }
                }, //boolean
                fOnAppLoad : function(){
                  //예제 코드
                  //oEditors.getById["content"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
                },
                fCreator: "createSEditor2"
                function formSubmit() {
                    oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
                }
              });
            });
        </script>
        <!--<script type="text/javascript">
            var oEditors = [];
            nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "content",
            sSkinURI: "./se/SmartEditor2Skin.html",
            fCreator: "createSEditor2"
            });
            function submitContents(elClickedObj) {
            oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다. 
            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

            try {
            elClickedObj.form.submit();
            } catch(e) {}
            }
        </script>-->
        <input type="submit" value="전송" onclick="submitContents(this)" />
    </form>
	<footer>by.2016 Kim Junho</footer>
</body>