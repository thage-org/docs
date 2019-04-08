<!DOCTYPE html>
<html>
<head>
	<title>Db-builder</title>
</head>
<body>
	<?php

		$server="localhost";
		$user= "root";
		$psw= "";
		$db="thage";

		$conn= new mysqli($server,$user,$psw,$db);
		if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
		else {
			echo "connected successfully";
			$q= "
				CREATE TABLE IF NOT EXISTS users (
					username VARCHAR(255) NOT NULL,
					first_name VARCHAR(255) NOT NULL,
					last_name VARCHAR(255) NOT NULL,
					reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
					bio VARCHAR(255) DEFAULT 'Thage user',
					email VARCHAR(255) NOT NULL,
					psw_hash VARCHAR(255) NOT NULL,
					CONSTRAINT pk PRIMARY KEY(username, email)
				);
			";
			if ($conn->($q)===TRUE) echo "Table users created successfully";
		}


	?>
</body>
</html>