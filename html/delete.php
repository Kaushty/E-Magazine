
<?php
      $id = $_POST['id'];
        //Connect DB
        //Create query based on the ID passed from you table
        //query : delete where Staff_id = $id
        // on success delete : redirect the page to original page using header() method
        $db = mysqli_connect('localhost','root','','info.db');
        if($db -> connect_error){
          die("Connection failed : " . $db -> connection_error);
        }

        // sql to delete a record
        $sql = "DELETE FROM posts WHERE id = $id";

        if (mysqli_query($db, $sql)) {
            mysqli_close($db);
            echo "Deleted";
            //header('Location: book.php'); //If book.php is your main page where you list your all records
            exit;
        } else {
            echo "Error deleting record";
        }

    ?>
