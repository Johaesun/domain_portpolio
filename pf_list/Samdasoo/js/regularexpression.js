        jQuery (function($) {
         //정규식을 변수에 할당
            var re_id = /^[a-z0-9_-]{3,16}$/;
            var re_pw = /^[a-z0-9_]{4,20}$/;;
            var re_mail = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/;
			var regExp = /\s/g;
			var re_name = /^[가-힣a-zA-Z]+$/;
         //선택할 요소를 변수에 할당
            var form = $('.send') , name=$('#name') , email_id=$('#email_id'), pw = $('pw'), company = $('company');
         //선택한 form에 submit 이벤트가 발생하면 실행 
            form.submit(function() {
                if (re_mail.test(email_id.val()) != true) {
                	alert('[email입력 오류] 유효한 이메일 양식이 아닙니다.');
					pw.focus();
                    return false;
				}
				if (re_pw.test(pw.val()) != true) {
                	alert('[pw입력 오류] 유효한 비밀번호가 아닙니다.');
					pw.focus();
                    return false;
				}
            });
        });