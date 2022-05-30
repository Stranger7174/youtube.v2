<?php
include('common.php');

print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

//사용자가 입력한 id에 해당하는 쿼리
$sql = "select password, email, no from member
        where email = '$email'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

//쿼리에 대한 return값이 있다면
if ($db_pw) {
  //세션에 값을 저장한다
  if ($password == $db_pw['password']) {
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['password'] = $db_pw['password'];
    $_SESSION['email'] = $db_pw['email'];  
    echo "
      <script>
        alert('로그인 성공');
        location.href='index.html';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('비밀번호가 맞지 않습니다');
        history.back();
      </script>
    ";
  }
} else {
  echo "
    <script>
      alert('아이디가 존재하지 않습니다');
      histroy.back();
    </script>
  ";
}
?>