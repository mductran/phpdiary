<?php

	$servername = $_SESSION['ep'];
	$username = $_SESSION['un'];
	$password = $_SESSION['pw']
	$database = $_SESSION['db'];

	$link = mysqli_connect($servername, $username, $password, $database);
	if(mysqli_connect_error()){

		die("Problem...!!");
	}

?>
