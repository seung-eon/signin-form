<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'tmddjssql19',
  'rustmqtod');
  
  #사용자가 입력한 정보를 그대로 php에 입력하는 행위는 보안에 취약, 따라서 관리 필요
  $filtered = array(
    'user_id'=>mysqli_real_escape_string($conn, $_POST['user_id']),
    'user_pw'=>mysqli_real_escape_string($conn, $_POST['user_pw']),
    'nickname'=>mysqli_real_escape_string($conn, $_POST['nickname']),
    'email_address'=>mysqli_real_escape_string($conn, $_POST['email_address'])
  );

$sql = "
  INSERT INTO d_user (user_id, user_pw, nickname, email_address, sign_up_ip, current_ip)
  VALUES(
      '{$filtered['user_id']}',
      '{$filtered['user_pw']}',
      '{$filtered['nickname']}',
      '{$filtered['email_address']}',
      CURRENT_TIMESTAMP(),
      CURRENT_TIMESTAMP()
  )";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '가입하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="sign_in_form.php">뒤로가기</a>';
}
?>