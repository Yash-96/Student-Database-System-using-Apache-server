<?php
if(isset($_POST['sub']))
	{
		$usn = $_POST['usn'];

// Create connection
$mysqli = new mysqli("localhost", "root", "", "StudentDB");
// Check connection
if ($mysqli === false) 
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	} 

// sql to delete a record
$sql = "DELETE FROM StudentTable WHERE USN='$usn'";

if ($mysqli->query($sql) === true) 
		{
			echo 'record deleted<br>';
		}
		else
		{
			echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
		}


$mysqli->close();
}
?>
