<?php 

require_once 'Config/db.php';

class User
{
    private $db;
    private $pdo;

    function __construct(argument)
    {
        $this->db new connection();
        $this->pdo = $this->pdo->connect();
    }

    public function register($usuario, $correo)
    {
        $password = password_hash('temporal123', PASSWORD_DEFAULT);
        try {
            $stmt=$this->pdo->prepare("INSERT INTO usuaios (ussername, email, password) VALUES (:username, :email, :password)");
            $stmt->execute(['username' => $usuario, 'password' => $password, 'email' => $correo]);
            // Enviar las credenciales por correo electrónico (Opcional)
            $this->sendCredentials($email, $username, 'temporal123');

            return "Usuario registrado exitosamente y las credenciales han sido enviadas.";
        } catch (PDOException $e) {
            return "Error al registrar el usuario: " . $e->getMessage();
        }
    }

    public function login($usuario, $password)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
            $stmt->execute(['username' => $usuario]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return "Error al realizar el login: " . $e->getMessage();
        }
    }
    public function changePassword($userId, $newPassword)
    {
        try {
            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("UPDATE usuarios SET password = :password, password_changed = 1 WHERE id = :id");
            $stmt->execute(['password' => $newPassword, 'id' => $userId]);

        } catch (PDOException $e) {
            return "Error al cambiar la contraseña: " . $e->getMessage();
        }
    }

    private function sendCredentials($email, $username, $password)
    {
        $subject = "Bienvenido a nuestro sistema";
        $message = "Tu nombre de usuario es: $username\nTu contraseña temporal es: $password";
        mail($email, $subject, $message);
    }
}

 ?>