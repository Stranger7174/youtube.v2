<?php
include('common.php');

$no = 3;

$sql = "select * from video_content where no = '".$no."'";

$result_u = $conn -> query($sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="contein">
    <?php while ($row = mysqli_fetch_assoc($result_u)) { ?>
      <div id="items">
        <!-- <div style="display: hiden;"><?php $row['no'] ?></div> -->
        <div><?php echo $row['video'];?></div>
        <div>
          <div id="title"><?php echo $row['title'] ?></div>
          <div id="uploder"><?php echo $row['uploder'] ?></div>
          <div id="viewcount"><?php echo $row['viewcount'] ?></div>
          <div id="uplodetime"><?php echo $row['time'] ?></div>
        </div>
      </div>
    <?php } ?>
  </div>
</body>
</html>