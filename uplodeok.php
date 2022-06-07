<?php
include('common.php');

print ($_POST);
$video = $_POST["video"];
$title = addslashes($_POST["title"]);
$tag = addslashes($_POST["tag"]);
$uploder = $_SESSION["email"];
$time = date("y-m-d h:i:s");

$sql_u = "insert into video_content set
        video = '$video',
        title = '$title',
        tag = '$tag',
        uploder = '$uploder',
        time = '$time'
        ";

$result_u = $conn -> query($sql);

if ($result_u) {
  echo "
  <script>
  if (confirm('더 업로드 하시겠습니까?')) {
    location.back
  } else {
    localhost.index.php
  }
  </script>";
}
?>