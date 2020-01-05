<?php
 $adminUsername = "";
 $db = mysqli_connect('localhost','root','','info.db');
 if($db -> connect_error){
     die("Connection failed : " . $db -> connection_error);
 }
     if(isset($_POST['approve'])){
                  $sql = "UPDATE posts SET approve = 1";
                  mysqli_query($db,$sql) or die (mysqli_error());
              }
     if(isset($_POST['delete'])){
       $sql = "UPDATE posts SET approve = -1";
       mysqli_query($db,$sql) or die (mysqli_error());
    }
mysqli_close($db);
?>
