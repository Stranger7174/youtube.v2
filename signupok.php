<?php
include('common.php');

// print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];

$sql = "insert into member set
        email = '$email',
        password = '$password',
        nickname = '$nickname'
        ";
//conn으로 sql값을 넣어줌
$result = $conn -> query($sql);
echo $result;

if ($result) {
  echo "
  <script>
    console.log('가입성공');
    location.href = 'signin.html';
  </script>
  ";
} else {
  echo "
  <script>
    alert('회원가입에 실패했습니다');
    localhost.href = 'location.back()';
  </script>
  ";
}
?>