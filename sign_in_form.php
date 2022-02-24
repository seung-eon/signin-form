<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'tmddjssql19',
  'rustmqtod'); // 데이터베이스 이름

$sql = "SELECT * FROM d_user";
$result = mysqli_query($conn, $sql);
?>

<html> 
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>이차원</title>

    <!-- Bootstrap CSS -->
    <!-- 부트스트랩 CDN 추가 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../config/js/join.js"></script>

    <script defer src="join.js"></script>

    <style>
    body {
        min-height: 100vh; 
        background: -webkit-gradient(linear, left bottom, right top, from(#ba92db), to(#1d466c)); 
        background: -webkit-linear-gradient(bottom left, #ba92db 0%, #1d466c 100%);
        background: -moz-linear-gradient(bottom left, #ba92db 0%, #1d466c 100%);
        background: -o-linear-gradient(bottom left, #ba92db 0%, #1d466c 100%);
        background: linear-gradient(to top right, #ba92db 0%, #1d466c 100%);
    }
    .input-form {
        max-width: 680px; 
        margin-top: 80px; 
        padding: 32px; 
        background: #fff; 
        -webkit-border-radius: 10px; 
        -moz-border-radius: 10px; 
        border-radius: 10px; 
        -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15); 
        -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15); 
        box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
    } 
    </style> 
</head>
<body>
    <div class="container">   
        <div class="input-form-backgroud row">
            <div class="input-form col-md-12 mx-auto">
                <h4 class="mb-3">회원가입</h4>
                <form name="join-form" method="POST" action="process_sign_in.php">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="user_id">아이디</label>
                            <input type="text" class="form-control" id="user_id"  placeholder="" value="" required> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nickname">닉네임</label>
                            <input type="text" class="form-control" id="nickname" placeholder="" value="" required>
                        </div>
                    </div>

                    <div class="mb-3"> 
                        <label for="user_pw">비밀번호</label>
                        <input type="password" class="form-control" id="user_pw" placeholder="" value="" required>   
                    </div>

                    <div class="mb-3"> 
                        <label for="check">비밀번호 확인</label>
                        <input type="password" class="form-control" id="check" placeholder="" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="email_address">이메일</label>
                        <input type="email" class="form-control" id="email_address" placeholder="echawon@example.com" value="" required>
                    </div>

                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="aggrement" required>
                        <label class="custom-control-label" for="aggrement">개인정보 수집 및 이용에 동의합니다.</label>
                    </div>

                    <div class="mb-4"></div>
                    <button class="btn btn-warning btn-lg btn-block" type="submit" id="join-submit" >
                        등록
                    </button>
                </form>
            </div>
        </div>
        <footer class="my-3 text-center text-small">
            <p class="mb-1">&copy; 2CHAWON 2차원</p>
        </footer>
    </div>

    <!-- 유효성 검사 기능 ->form 태그 안에 class="validation-form" 추가
    <script>
        window.addEventListener('load', () => {
            const forms = document.getElementsByClassName('validation-form'); 

            Array.prototype.filter.call(forms, (form) => { 
                form.addEventListener('submit', function (event) { 
                    if (form.checkValidity() === false) { 
                        event.preventDefault(); 
                        event.stopPropagation(); 
                    } 
                    form.classList.add('was-validated');
                }, false); 
            }); 
        }, false); 
    </script> -->
</body>

</html>
