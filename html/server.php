<?php
session_start();
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect('localhost','root','','info.db');
if($db -> connect_error){
    die("Connection failed : " . $db -> connection_error);
}
  if(isset($_POST['login_user'])){
      $username =  $_POST['username'];
      $password =  $_POST['password'];
      $usernameErr = $passwordErr = "";
      if(empty($username)){
          $usernameErr = "Username is required";
      }
      else{
          $username =  $_POST['username'];
      }
      $sql = "SELECT username, pwd FROM user WHERE username = '$username' AND  pwd = '$password' ";
      $result = mysqli_query($db, $sql);
          if(mysqli_num_rows($result) > 0 )
          {
              $_SESSION["logged_in"] = true;
              $_SESSION["name"] = $username;
              header("location: index.html ");   //redirecting
          }
          else
          {
              echo 'The username or password are incorrect!';
          }
          mysqli_close($db);
  }
  if(isset($_POST['login_admin'])){
      $username =  $_POST['username'];
      $password =  $_POST['password'];
      $sql = "SELECT usernameAdmin, passwordAdmin FROM admin WHERE usernameAdmin = '$username' AND  passwordAdmin = '$password' ";
      $result = mysqli_query($db, $sql);
          if(mysqli_num_rows($result) > 0 )
          {
              $_SESSION["logged_in"] = true;
              $_SESSION["adminName"] = $username;
              header("location: admin.php ");   //redirecting
          }
          mysqli_close($db);
  }
  if(isset($_POST['register_user'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    if (empty($username)) {
        array_push($errors, "Username is required");
      }
    if (empty($email)) {
        array_push($errors, "Email is required");
      }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
      }
    if ($password_1 != $password_2) {
  	array_push($errors, "The two passwords do not match");
    }
    if(strlen($username)<6){
        array_push($errors, "Username cannot be less than 6 characters");
    }
    else{
      $sql = "INSERT INTO user (username,email,pwd)
      VALUES ('$username','$email','$password_1')";
      if (mysqli_query($db, $sql)) {
       header("location : index.html");
      } else {
       echo "Error: " . $sql . "". mysqli_error($db);
    }
    mysqli_close($db);
  }
  }
  if(isset($_POST['upload-form'])){
        $username = $_SESSION['name'];
        $title = $_POST['title'];
        $post = $_POST['blog'];
        $sql = "INSERT INTO posts (username,title,post,approve)
        VALUES ('$username','$title','$post', 0)";
        if (mysqli_query($db, $sql)) {
         header("location : userSubmit.php");
        }
        else{
          echo "Error: " . $sql . "". mysqli_error($db);
        }
        mysqli_close($db);
    }
?>
