<?php
	// attempt database connection
	$mysqli = new mysqli("localhost", "root", "", "StudentDB");
	if ($mysqli === false) 
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	if(isset($_POST['sub']))
	{
		$usn = $_POST['usn'];
		$name = $_POST['name'];
		$sem = $_POST['sem'];
		$dept = $_POST['dept'];
		$cgpa = $_POST['cgpa'];
		// attempt query execution
		// add a new record
		$sql = "INSERT INTO StudentTable 
					VALUES ('$usn','$name','$sem','$dept','$cgpa')";
		if ($mysqli->query($sql) === true) 
		{
			echo 'New student  added<br>';
		}
		else
		{
			echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
		}
		// close connection
		$mysqli->close();
	}
?>
