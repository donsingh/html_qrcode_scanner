<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "iec_usc";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM volunteers WHERE id = ".$_GET['user_id']."";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		echo $row["id"]. "||" . $row["name"]. "||" . $row["org"]. "||" . $row["status"];
	} else {
		echo "NA";
	}

	mysqli_close($conn);
?>