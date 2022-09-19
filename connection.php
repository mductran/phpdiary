<?php
	$servername = "taskc-db.caqshf3dyoyx.us-east-1.rds.amazonaws.com";
	$username = "admin";
	$password = "password";
	$database = "taskc";
	
	// $link = mysqli_connect($servername, $username, $password, $database);
	$link = mysqli_connect($servername, $username, $password, $database);
	if(mysqli_connect_error()){
		die("Problem...!!");
	}

?>
