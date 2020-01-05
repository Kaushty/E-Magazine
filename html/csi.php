
<?php
$servername = "localhost";
$database = "info.db";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn)
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	$result=mysqli_query($conn,"select * from photos")
		or die("failed to query database".mysqli_error($conn));
	echo "<table border='1'>
	<tr>

	<th style='color:red; font-size:30px;'>-::- PHOTOS -::-</th>
	</tr>";

			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";


				echo "<td><img src='Uploads/".$row['imgName']."' ></td>";

				echo "</tr>";


			}



		echo "failed";
	    mysqli_close($conn);

}
?>
