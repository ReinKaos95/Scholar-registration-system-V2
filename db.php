<?php 

	$host = 'localhost';
	$user = 'root';
	$password = '123456';
	$dbname = 'escuela';

	try {
		$conn=mysqli_connect($host, $user, $password, $dbname);
		
	} catch (Exception $e) {
		echo "Failed to connect MYSQL" . $e->getMessage();
	}

 ?>