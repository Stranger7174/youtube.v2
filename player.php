<?
include('common.php');
?>

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
    height: 100%;
    width: 100%;
  }
</style>
<body>
  <video class="play" controls src="./video/Nature - 111508.mp4"></video><? echo $row['video'];?>
</body>
</html>