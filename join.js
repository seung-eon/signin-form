$(function(){
    // 회원 가입 처리
    $('#join-submit').click(function(e){
        e.preventDefault();

        var user_id = $('#user_id').val();
        if(user_id ==''){
            alert('아이디를 입력하세요.');
            $("#user_id").focus();
            return false;
        } else {
            var user_idRegex = /^[a-z]+[a-z0-9]{6,}$/g;
            if(!user_idRegex.test(user_id)){
                alert('아이디는 영문자로 시작하는 6자리 이상의 영문자 또는 숫자이어야 합니다.');
                $("#user_id").focus();
                return false;
            }
        }
      
        if($("#nickname").val() ==''){
            alert('닉네임을 입력하세요.');
            $("#nickname").focus();
            return false;
        }

        var email = $('#email_address').val();
        if(email == ''){
            alert('이메일을 입력하세요.');
            $("#email_address").focus();
            return false;
        } else {
            var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailRegex.test(email)) {
                alert('이메일 주소가 유효하지 않습니다.');
                $("#email_address").focus();
                return false;
            }
        }

        var user_pw = $("#user_pw").val();
        if(user_pw ==''){
            alert('비밀번호를 입력하세요');
            $("#user_pw").focus();
            return false;
        } else {
            var user_pwRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,16}$/;
            if(!user_pwRegex.test(user_pw)) {
                alert('비밀번호는 8~16자이며 영문과 숫자, 특수문자를 반드시 포함해야 합니다.');
                $("#user_pw").focus();
                return false;
            }

        }

        if($("#check").val() ==''){
            alert('비밀번호 확인을 입력하세요');
            $("#check").focus();
            return false;
        } else {
            if($("#user_pw").val()!== $("#check").val()){
                alert('비밀번호가 일치하지 않습니다');
                return false;
            }
        }
        
        if($("#aggrement").is(":checked") == false){
            alert('약관에 동의하셔야 합니다');
            return false;      
        }
        
        alert('회원가입이 완료되었습니다.');
        return;
    });
    $("#join-submit").keydown(function(key) {
        //키의 코드가 13번일 경우 (13번은 엔터키)
        if (key.keyCode == 13) {
            $("#join-submit").click();
        }
    });
});