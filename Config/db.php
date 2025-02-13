<?php 

class connection
{
	private $host = "localhost";
	private $user = "root";
	private $password = "123456";
	private $dbname = "escuela";
	private $pdo = null;
	
	function __construct()
	{
		try {
			$this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			
		} catch (PDOException $e) {
			echo "Error en la conexion: " . $e->getMessage();
			exit;
		}
	}

	public function connect()
	{
		return $this->pdo;
	}

	public function close_connect()
	{
		$this->pdo=null;
	}
}

 ?>