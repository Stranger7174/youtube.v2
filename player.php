<?php
include('common.php');
include('main.html');

$no = $_GET['no'];
// $no = 5;
// $sql_u = "get from video_content * where no";
$sql = "select * from video_content where no = '$no'";


$result = $conn -> query($sql);

echo '<br>';
print_r ($result);


$row = mysqli_fetch_assoc($result);
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
    <?php echo $row['video'] ?>
    <video class="play" controls src = "./video/<?php echo $row['video'];?>"></video>
    <div id="title" class="info"><?php echo $row['title'];?></div>
    <div id="uploder" class="info"><?php echo $row['uploder'];?></div>
    <div id="tag" class="info"><?php echo $row['tag'];?></div>
    <div id="time"><?php echo $row['time'];?></div>
    <div id="viewcount"><?php echo $row['viewcount'];?></div>
  </form>
</body>
</html>
<script>
  console.log('aa');
</script>