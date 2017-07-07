        jQuery (function($) {
         //정규식을 변수에 할당
            var re_id = /^[a-z0-9_-]{3,16}$/;
            var re_pw = /^[a-z0-9_-]{6,18}$/;
            var re_mail = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/;
         //선택할 요소를 변수에 할당
            var form = $('form') , uid=$("#uid") , upw = $("#upw"), mail = $("#mail"); 
         //선택한 form에 submit 이벤트가 발생하면 실행 
            form.submit(function() {
                if (re_id.test(uid.val()) != true) {
                    //아이디 검사
                    alert('[ID입력 오류] 유효한 ID를 입력해 주세요.');
                    uid.focus();
                    return false; 
                } else if (re_pw.test(upw.val()) != true) {
                    //비밀번호 검사 
                    alert('[PW 입력 오류 ] 유효한 PW를 입력해 주세요.');
                    upw.focus();
                    return false; 
                } else if (re_mail.text(mail.val()) != true) {
                    alert('[Email 입력 오류] 유효한 이메일 주소를 입력해 주세요.'); 
                    mail.focus();
                    return false; 
                } 
            });
            
            $('#uid,#upw').after("<strong></strong>");
            
            uid.keyup(function(){
                var s = $(this).next('strong');
                if (uid.val().length = 0 ) {
                    s.text('');
                } else if (uid.val().length < 3 ) {
                    s.text('너무 짧아요');
                } else if (uid.val().length>10) {
                    s.text("너무 길어요"); 
                } else {
                    s.text('적당해요'); 
                }
            }); 
            
            upw.keyup(function(){
                var s = $(this).next('strong');
                if (upw.val().length = 0 ) {
                    s.text('');
                } else if (upw.val().length < 3 ) {
                    s.text('너무 짧아요');
                } else if (upw.val().length>16) {
                    s.text("너무 길어요"); 
                } else {
                    s.text('적당해요'); 
                }
            }); 
        });