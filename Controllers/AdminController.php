<?php 

namespace Controllers;

class AdminController
{
	public function index()
	{
		require 'Views/Admin/index.php';
	}

	public function crearAdmin()
	{
		require 'Views/Admin/crear.php';
	}
}
 ?>