<?php

	$host = 'mysql';
	$user = 'root';
	$password = 'root';
	$db = 'test_db';

	$conn = mysqli_connect($host, $user, $password, $db);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	} else {
	    echo "Connection Successful";
	}

?>
