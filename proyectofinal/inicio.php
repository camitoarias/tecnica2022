<?php
include("menu.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
<video autoplay muted loop id="myVideo">
  <source src="img/video.mp4" type="video/mp4" wheight="3" width="3" height="3">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">
  <h1>Heading</h1>
  <p>Lorem ipsum...</p>
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>
</body>
</html>