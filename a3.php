<?php
if(isset($_POST['sub']))
	{
		$usn = $_POST['usn'];
		$name = $_POST['name'];
		$sem = $_POST['sem'];
		$dept = $_POST['dept'];
		$cgpa = $_POST['cgpa'];
	// attempt database connection
	$mysqli = new mysqli("localhost", "root", "", "StudentDB");
	if ($mysqli === false) 
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// update an existing  record
	$sql = "UPDATE StudentTable SET Name='$name', Sem='$sem',Dept='$dept',CGPA='$cgpa' WHERE USN='$usn'";
	if ($mysqli->query($sql) === true) 
	{
		echo $mysqli->affected_rows.' row(s) updated.<br>';
	}
	else
	{
		echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
}
?>
