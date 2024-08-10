<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Database connection settings
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'mydatabase';
	
	// Database connection establish
	$conn = new mysqli($hostname, $username, $password, $dbname);
	
	// User data ko store karne ke liye query
	$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
	
	// Query ko execute
	if ($conn->query($query) === TRUE) {
		echo "User data stored successfully";
	} else {
		echo "Error: " . $query . "<br>" . $conn->error;
	}
	
	// Database connection close
	$conn->close();
?>
