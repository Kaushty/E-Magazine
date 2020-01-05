<?php
$db = mysqli_connect('localhost','root','','info.db');
if($db -> connect_error){
    die("Connection failed : " . $db -> connection_error);
}
  if(isset($_POST['image-form'])){
    $file = $_FILES['file'];
    $fileName =$_FILES['file']['name'];
    $fileType =$_FILES['file']['type'];
    $fileTmpname =$_FILES['file']['tmp_name'];
    $fileSize =$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileExt = explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    $uploadDate = date("Y-m-d H:i:s");
    if(in_array($fileActualExt,$allowed)){
      if($fileError===0){
        if($fileSize < 1000000){
          $fileNameNew = uniqid('', true).".".$fileActualExt;
          $fileDestination  = "Uploads/".$fileNameNew;
          move_uploaded_file($fileTmpname,$fileDestination);
          header("Location : galleryForm.php?uploadsuccess");
          $sql = "INSERT INTO photos (imgName,uploadDate)
          VALUES ('$fileNameNew','$uploadDate')";
          if (mysqli_query($db, $sql)) {
           header("Location : admin.php");
          }
          mysqli_close($db);
        }else{
          echo "Your file is too big";
        }
      }else{
        echo "There was an error uploading your file";
      }
    }
    else{
      echo "You cannot upload file of this type";
    }
  }
 ?>
