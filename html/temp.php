<?php
  session_start();

  include_once("config.php");
  $idPost=$_GET['id'];


  $query = "DELETE from posts where id= '$idPost'";
  $row = mysqli_query($con, $query);

header("Location:admin.php");
 ?>
