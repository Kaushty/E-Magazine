<?php
$con = mysqli_connect('localhost','root','','info.db');
if($con -> connect_error){
    die("Connection failed : " . $con -> connection_error);
  }
 ?>
