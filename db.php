<?php 

	$host = 'localhost';
	$user = 'root';
	$password = '123456';
	$dbname = 'escuela';

	try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "Conexion fallida: " .$e->getMessage();
	}

 ?>