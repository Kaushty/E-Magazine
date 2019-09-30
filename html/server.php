<?php 
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','','info.db');
if($db -> connect_error){
    die("Connection failed : " . $db -> connection_error);
}

//LOGIN USER

if(isset($_POST['login_user'])){
    $username =  $_POST['username'];
    $password =  $_POST['password'];

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    $sql = "SELECT username, pwd FROM user WHERE username = '$username' AND  pwd = '$password' ";
    $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0 )
        {   
            $_SESSION["logged_in"] = true; 
            $_SESSION["name"] = $username;
            echo "Logged in" ;
            //header("location : index.php ");   //redirecting
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
        mysqli_close($db);
}


//REGISTER USER

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
    //$password_1 = md5($password_1);
    //echo $username, $email, $password_1, $password_2;
    $sql = "INSERT INTO user (username,email,pwd)
    VALUES ('$username','$email','$password_1')";
    if (mysqli_query($db, $sql)) {
     echo "New record created successfully !";
    } else {
     echo "Error: " . $sql . "". mysqli_error($db);
      
  }
  mysqli_close($db);

}
}
?>