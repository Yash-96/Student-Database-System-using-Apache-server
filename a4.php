<?php
if(isset($_POST['sub']))
	{
	// attempt database connection
	$mysqli = new mysqli("localhost", "root", "", "StudentDB");
	if ($mysqli === false) 
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	// attempt query execution
	// iterate over result set
	// print each record and its fields
	$sql = "SELECT * FROM StudentTable WHERE 1";
	if ($result = $mysqli->query($sql)) 
	{
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_object()) 
			{
				echo $row->USN . "&emsp;:&emsp;" . $row->Name . " , ".$row->Dept." , ".$row->CGPA." , ".$row->Sem. "<br>";
			}
			$result->close();
		} 
		else 
		{
			echo "No records matching your query were found.";
		}
	} 
	else 
	{
		echo "ERROR: Could not execute $sql. " . $mysqli->error;
	}
	// close connection
	$mysqli->close();
}
?>
