<?php include('server.php') ?>
<!DOCTYPE html>

<html>
    <head>
        <title>SIGN UP</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    </head>
    <body>

        <form method = "post" action = "server.php" class = "register-form">
            <?php include('errors.php') ?>
            <h2>SIGN UP</h2>
            <div class = "input-group">
                <input type = "text" name = "username">
                <span data-placeholder="Username"></span>

            </div>

            <div class = "input-group">
                <input type = "email" name = "email">
                <span data-placeholder="Email"></span>
            </div>

            <div class = "input-group">
                <input type = "password" text = "password_1" name = "password_1">
                <span data-placeholder="Password"></span>
            </div>

            <div class = "input-group">
                <input type = "password" text = "password_2" name = "password_2">
                <span data-placeholder="Confirm Password"></span>
            </div>

                <button type = "submit" class = "btn" name="register_user">REGISTER</button>

            <div class = "bottom-text">
                Already a member? <a href = "login.php">LOGIN</a>
            </div>
        </form>
    </body>
</html>
