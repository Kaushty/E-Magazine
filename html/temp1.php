<?php
  session_start();
  include_once("config.php");
  $idPost=$_GET['id'];
  $query = "UPDATE posts set approve = 1 where id= '$idPost'";
  $row = mysqli_query($con, $query);
  header("Location:admin.php");
  ?>
