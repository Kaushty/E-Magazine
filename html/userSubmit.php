<?php
  session_start();
?>
<!DOCTYPE html>
<?php include('server.php')?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Submit your article</title>
    <link rel = "stylesheet" type = "text/css" href = "styl.css">
    <script>
          function myFunction(){
            var x = document.getElementById("myFile");
            var txt = "";
            if ('files' in x) {
              if (x.files.length == 0) {
                txt = "Select one or more files.";
              } else {
                for (var i = 0; i < x.files.length; i++) {
                  txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                  var file = x.files[i];
                  if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                  }
                  if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
                  }
                }
              }
            }
            document.getElementById("demo").innerHTML = txt;
          }
    </script>
  </head>
  <body onload="myFunction()">

      <form action = "server.php" method="post" enctype="multipart/form-data" class="upload-form">
        <h2>Submit your Post</h2><br><br>
        <h3>Title :</h3>
        <br>
        <input class="input" width="300px" type = "text" name="title"/><br>
        <br>
        <h3>Express</h3>
            <br>
            <input class="blogtext" type = "text" name = "blog"/>
          </div>
          <br>
          <br><br>
          <button type = "submit" class = "btn" name = "upload-form">SUBMIT</button>
  </body>
</html>
