<div id="center">
	<div id="form">
		<form method="post">
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
				<a href="register.php">a</a>
		</form>
	</div>
</div>

<?php 
include 'db.php';

session_start();

if ($_SERVER['REQUEST_METHOD']  === 'POST' && isset($_POST['submit'])) {
	$email = trim($_POST['email']);
	$password = $_POST['password'];


	if (empty($email) || empty($password)) {
		$_SESSION['error'] = "Email and password are required.";
		header('Location : index.php');
		exit();
	}

	$stmt=$conn->prepare('SELECT * FROM usuarios WHERE email = :email');
	$stmt->execute([':email' => $email]);
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($user && password_verify($password, $user['password'])) {
        // Store user data in session (but don't store sensitive info)
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['logged_in'] = true;
        
        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);
		header('Location: main.php');
		exit();
	} else {
        $_SESSION['error'] = "Invalid email or password.";
        header('Location: login.php');
        exit();
	}
}
 ?>