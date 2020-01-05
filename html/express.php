<!DOCTYPE html>
<?php
  $db = mysqli_connect('localhost','root','','info.db');
  if($db -> connect_error){
    die("Connection failed : " . $db -> connection_error);
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "expstyl.css">
    <title>Express</title>
  </head>
  <body>
    <h1>Posts</h1>
    <?php
      $sql = "SELECT * FROM posts where approve = 1";
      $result = mysqli_query($db, $sql);
      ?>
      <div class = "container">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="post">
          <h3 class="title">Title : <?php echo $row['title']; ?></h3>
          <h4 class="username">Username : <?php echo $row['username']; ?></h4>
          <div class = "article">
            <p><?php echo $row['post']; ?> <br><br> </p>
          </div>
        </div>
            <?php
        }
      }?>
      </div>
  </body>
</html>
