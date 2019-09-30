<?php include('server.php') ?>
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <body>
        <form method ="post" action ="server.php" class = "login-form">
            <?php include('errors.php'); ?>
            <h2>LOGIN</h2>

            <div class = "input-group">
                <input type = "text" onfocus="this.value=''" name = "username">
                <span data-placeholder="Username"></span>
            </div>
            <div class = "input-group">
                <input type = "password" onfocus="this.value=''" name = "password">
                <span data-placeholder="Password"></span>
            </div>

                <button type = "submit" class = "btn" name = "login_user">LOGIN</button>

            <div class = "bottom-text">
                Not registered yet? <a href = "register.php">REGISTER</a>
            </div>
        </form>

        <script type="text/javascript">
      $(".input_group input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".input_group input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
    </body>

</html>
