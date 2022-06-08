<?php
include('common.php');
include('main.html');

$no = $_GET['no'];
// $no = 5;
// $sql_u = "get from video_content * where no";
$sql = "select * from video_content where no = '$no'";
echo $sql;
print_r ($sql);

$result = $conn -> query($sql);

echo '<br>';
print_r ($result);

?>
<style>
  #mainenav, #bignav {
    display: none;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .play {
    /* height: 720px;
    width: 1280px; */
    min-height: 100%;
    min-width: 100%;
  }
</style>
<body>
  <form>
    <video class="play" controls src = <? echo $row['video'];?>></video>
    <div id="title"><? echo $row['title'];?></div>
    <div id="uploder"><? echo $row['uploder'];?></div>
    <div id="tag"><? echo $row['tag'];?></div>
    <div id="time"><? echo $row['time'];?></div>
    <div id="viewcount"><? echo $row['viewcount'];?></div>
  </form>
</body>
</html>
<script>
  console.log('aa');
</script>