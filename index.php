<?php include 'def.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo Title; ?></title>
	<link rel="stylesheet" type="text/css" href="CSS/app.css">
</head>
<body>
	<div id="center">
		<div id="form">
		<p>placeholder para imagen</p>
		<form action="" method="post">
			<br>
			<label>Email</label>
			<br>
			<input type="email" name="email">
			<br>
			<br>
			<label>Password</label>
			<br>
			<input type="password" name="password">
			<br>
			<br>
			<button>Iniciar sesion</button>
			<br>
			<br>
			<p>No estas registrado? <a href="register.php">Registrate</a></p>
		</form>
		</div>
	</div>
</body>
</html>


<?php
include 'db.php';
session_start();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email =  $_POST['email'];
	$password = base64_encode($_POST['password']);

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		
		header("location: View/main.php");
	}else {
         $error = "Your Login Name or Password is invalid";
      }

	}

?>