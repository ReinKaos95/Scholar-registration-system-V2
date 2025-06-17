<?php

   session_start();
   if (isset($_SESSION['variable'])) {
   	// code...
   }
   header('Location: ../index.php');
  exit();
   

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventana de entrada</title>
</head>
<body>
	<h1>Hola :D</h1>


	<a href="../exit.php">Salir</a>
</body>
</html>