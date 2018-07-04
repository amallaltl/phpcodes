<?php
	session_start();
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
?>