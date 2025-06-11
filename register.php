<?php include 'def.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrate - <?php echo Title; ?></title>
		<link rel="stylesheet" type="text/css" href="CSS/app.css">
</head>
<body>
	<div id="center">
		<div id="form">
		<p>placeholder para imagen</p>
		<form method="post">
			<br>
			<label>User</label>
			<br>
			<input type="text" name="usuario">
			<br>
			<br>
			<label>Correo</label>
			<br>
			<input type="email" name="email">
			<br>
			<br>
			<label>Password</label>
			<br>
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="submit" value="Registrar">
			<br>
			<br>
			<p>Ya estas registrado? <a href="index.php">Inicia sesion</a></p>
		</form>
		</div>
	</div>
</body>
</html>


<?php 

include 'db.php';

if (isset($_POST['submit'])) {
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$password = base64_encode($_POST['password']);


	$sql = "INSERT INTO usuarios (username, email, password) VALUES ('$usuario', '$email', '$password')";
	if (mysqli_query($conn, $sql)) {
		echo "<script>window.confirm('Registro exitoso');</script>";
	}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

 ?>