<!DOCTYPE html>
<?php include('server.php')?>
<html>
  <head>
      <meta charset="utf-8">
      <title>LOGIN</title>
      <link rel = "stylesheet" type = "text/css" href = "styl.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
  </head>
  <body>
    <div class="HomeButton">
      <ul>
        <li> <a href="index.html">HOME</a> </li>
      </ul>
    </div>
      <form id="login" method ="post" action ="server.php" class = "login-form" >
          <?php include('errors.php'); ?>
          <h2>LOGIN</h2>
          <div class = "input-group">
              <input id="username" type = "text" onfocus="this.value=''" name = "username" required>
              <span data-placeholder="Username"></span>
          </div>
          <div class = "input-group">
              <input id="password" type = "password" onfocus="this.value=''" name = "password" required>
              <span data-placeholder="Password"></span>
          </div>
              <button type = "submit" class = "btn" name = "login_user">LOGIN</button>
          <div class = "bottom-text">
              Not registered yet? <a href = "register.php">REGISTER</a>
          </div>
      </form>
      <script type="text/javascript">
    $(".input-group input").on("focus",function(){
      $(this).addClass("focus");
    });
    $(".input-group input").on("blur",function(){
      if($(this).val() == "")
      $(this).removeClass("focus");
    });
    </script>
    <script>
    function validateForm() {
      var username = document.forms["login"]["username"].value;
      var password = document.forms["login"]["password"].value;
      if (username == "") {
        alert("Name must be filled out");
        return false;
      }
    }
    </script>
  </body>
</html>
