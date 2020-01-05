<!DOCTYPE html>
<?php
  $db = mysqli_connect('127.0.0.1','root','','info.db');
  if($db -> connect_error){
    die("Connection failed : " . $db -> connection_error);
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "stylAdmn.css">
    <title>Admin</title>
    <script type="text/javascript" src = "jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.action').click(function(){
                    var action = $(this).attr('name');
                    $('#action').val(action);
                    $(this).closest('form').submit();
                })
            })
     </script>
  </head>
  <body>
    <div class ="header">
        <h5>Vidyavardhini's College of Engineering and Technology</h5>
                <a href ="https://www.vcet.edu.in"><img src="..\img\vcetlogoW-150x150.png" alt="Image not found"></img></a>
        <h1><span>WE-</span>MAG</h1>
        <h6>VCET's Magazine for Tech, Sports and Expression</h6>
    </div>
    </script>
    <?php
      $sql = "SELECT * FROM posts WHERE approve=0";
      $result = mysqli_query($db, $sql);
      ?>
      <div class = "container">
        <?php include 'config.php';
          ?>
         <!-- <?php include 'action.php';?> -->
         <a href = "galleryForm.php">Add to Gallery</a>
         <?php
         $i = 1;
         echo "<form action='' method='post'>";
         echo "<table border='1'>
           <tr>
           <th>ID</th>
           <th>Username</th>
           <th>Title</th>
           <th>Post</th>
           <th colspan = '2'>Action</th>
           </tr>";
          if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_array($result)) {
               echo '<tr>';
               echo '<td>' . $row['id'] . '</td>';
               echo '<td>' . $row['username'] . '</td>';
               echo '<td>' . $row['title'] . '</td>';
               echo '<td>' . $row['post'] . '</td>';
               $idd=$row['id'];
               echo "<td><a href='temp.php?id=$idd' >DELETE</a></td>";
               echo "<td><a href= 'temp1.php?id=$idd'>APPROVE</a></td>";
               echo '</tr>';
               $i++;
          }
           }
          echo '</table>';
          echo '</form>' ;
        ?>
    </body>
  </html>
