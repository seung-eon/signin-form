<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
  <body>
  <?php
  $conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'tmddjssql19',
  'rustmqtod');
  mysqli_query("SET NAMES utf8");

  echo '<h1>User Database List</h1>';

  $sql = "SELECT * FROM d_user";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
    echo $row['user_id'].' '.$row['user_pw'].' '.$row['nickname'].' '.$row['email_address'].'<br>';
    echo $row['sign_up_ip'].' '.$row['current_ip'].'<br>'.'<br>';
  }
  ?>
  </body>
</html>