<?php
include('common.php');

echo $video;
print_r($video);
$video = $_FILES['video']['name'];
$title = addslashes($_POST["title"]);
$tag = addslashes($_POST["tag"]);
$uploder = $_SESSION["email"];
$time = date("y-m-d h:i:s");

// $_FILES = "./video";

$sql_u = "insert into video_content set
        video = '$video',
        title = '$title',
        tag = '$tag',
        uploder = '$uploder',
        time = '$time'
        ";

$result_u = $conn -> query($sql_u);

if ($result_u) {
  print_r( $_FILES[ 'video' ] );
  echo "<br>";
  echo $_FILES[ 'video' ][ 'name' ];
  echo "<br>";
  echo $_FILES[ 'video' ][ 'type' ];
  echo "<br>";
  echo $_FILES[ 'video' ][ 'size' ];
  echo "<br>";
  echo $_FILES[ 'video' ][ 'tmp_name' ];
  echo "<br>";
  echo $_FILES[ 'video' ][ 'error' ];
}
//     if ($result_u) {
//   echo "
//   <script>
//   if (confirm('더 업로드 하시겠습니까?')) {
//     location.back
//   } else {
//     localhost.index.php
//   }
//   </script>";
// }

?>