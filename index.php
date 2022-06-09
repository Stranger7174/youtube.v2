<?php
include('common.php');
include('main.html');

$sql = "select * from video_content";

$result = $conn -> query($sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  #contein {
    float: left;
    top: 50px;
    left: 150px;
    min-width: 100%;
    display: flex;
    flex-flow: wrap;

  }
  #items {
    margin: 5px;
  }
  #items iframe {
    overflow-y: hidden;
    overflow-x: hidden;
  }
  #tocontent {
    color: black;
    text-decoration: none;
  }
</style>
<body>
  <div id="contein" onclick="location.href = 'player.php'">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div id="items">
        <a id="tocontent" href="player.php?no=<?php echo $row['no'] ?>">
        <script>
          // location.;
        </script>
          <iframe src="video.php" scrolling="no"><?php echo $row['video'];?></iframe>
          <div>
            <div id="title"><?php echo $row['title'] ?></div>
            <div id="uploder"><?php echo $row['uploder'] ?></div>
            <div id="viewcount"><?php echo $row['viewcount'] ?></div>
            <div id="uplodetime"><?php echo $row['time'] ?></div>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</body>
</html>