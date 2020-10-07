<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ujianonline";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		# code...
		die ("COnnection failed: " . $conn->connect_error);
	}
 ?>