<?php

function connectToDatabase()
{
    $conn = mysqli_connect('localhost','root','','community'); 

    // Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

    return $conn;

}

?>