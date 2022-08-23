<?php
include('common.php');

// echo $video;
// print_r($video);
$path = "./video/";
$video = $_FILES['video']['name'];
$error = $_FILES['video']['error'];
$tmp_file = $_FILES['video']['tmp_name'];
$title = addslashes($_POST["title"]);
$tag = addslashes($_POST["tag"]);
$uploder = $_SESSION["email"];
$time = date("y-m-d h:i:s");
$video_file = array('mp4', 'avi', 'webM', 'AV1');



$sql_u = "insert into video_content set
        video = '$video',
        title = '$title',
        tag = '$tag',
        uploder = '$uploder',
        time = '$time'";

$result_u = $conn -> query($sql_u);


if ($result_u) {
  print_r( $_FILES[ 'video' ] );
  echo "<br>";
  echo $video;
  echo "<br>";
  echo $_FILES[ 'video' ][ 'type' ];
  echo "<br>";
  echo $_FILES[ 'video' ][ 'size' ];
  echo "<br>";
  echo $tmp_file;
  echo "<br>";
  echo $error;
}

move_uploaded_file($tmp_file, $path.$video);
if ($result_u) {  
  echo "
  <script>
  if (confirm('더 업로드 하시겠습니까?')) {
    location.href = 'uplode.php';
  } else {
    location.href = 'index.php';
  }
  </script>";
}

?>