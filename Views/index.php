<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Public/CSS/style.css">
	<title>SIGEA Version</title>
</head>
<body>
	<center>
		<div class="login">
			<h1>login</h1>
			<form method="post" action="">
			<label for="usuario">Usuario</label>
			<br>
			<input type="text" name="usuario">
			<br>
			<br>
			<label for="password">Contraseña</label>
			<br>
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="submit" value="Registrar">
			<br>
			<br>
			<a href="#">Olvide mi contraseña</a>
			</form>
		</div>
	</center>
</body>
</html>

<?php 
//$user = new User();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	//verificar credenciales



}

 ?>