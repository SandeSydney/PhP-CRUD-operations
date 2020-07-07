<?php
    $host = "localhost";
	$username = "root";
	$password = "";
    $dbname = "fatimaalmatawah";

    // create connection
    $conn = new mysqli($host, $username, $password, $dbname);

	#check whether the connection is successful
	if (!$conn) {
		die("Connection Failed! ".mysqli_error($conn));
    }
?>