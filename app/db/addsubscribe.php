<?php

	session_start();


	include_once 'connect.php';

	// params
	$email           = $_POST['email'];
	$adate          = date("Y-m-d H:i:s",time());

	if ($conn)
	{
		$query = "INSERT INTO subscribes (email, adate) VALUES('$email', '$adate')";
		mysqli_query($conn , $query) or die("Error in query: $query. ".mysql_error());

		echo json_encode(["result"=>"success"]);
	}else
	{
		echo json_encode(["result"=>"fail"]);
	}
	mysqli_close($conn);