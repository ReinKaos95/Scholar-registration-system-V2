<link rel="stylesheet" type="text/css" href="app.css">

	<div id="center">
		<div id="form">
			<form method="post">
				<label>usuario</label>
				<br>
				<input type="text" name="username">
				<br>
				<br>
				<label>Correo</label>
				<br>
				<input type="email" name="email">
				<br>
				<br>
				<label>Contraseña</label>
				<br>
				<input type="password" name="password">
				<br>
				<br>
				<input type="submit" name="submit">
				&nbsp;
				<a href="index.php">a</a>
			</form>
		</div>
	</div>


<?php
include 'db.php'; 

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	// $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = '$email'");
	//$stmt->execute();
	//$stmt->fetchall();

	//	Consulta para comprobar si el correo fue registrado
	$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
	$stmt->execute([':email' => $email]);
	$results = $stmt->fetchAll();

	// $rowcount = mysqli_num_rows($stmt);

	if (!empty($results)) {
		echo "<script>window.confirm('Ese correo ya existe');</script>";
	}else{
		$stmt = $conn->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
		if ($stmt->execute([$username, $email, $hashedPassword])) {
			echo "<script>window.confirm('Registro exitoso');</script>";
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

?>