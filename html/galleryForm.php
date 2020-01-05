<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Submit your article</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data" class="image-form">
        Select image to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload Image" name="image-form">
    </form>

  </body>
</html>
