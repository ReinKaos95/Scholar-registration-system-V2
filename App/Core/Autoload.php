<?php 


use Controllers\MainController;
use Controllers\EstudianteController;


spl_autoload_register(function ($className)
{
		if (file_exists(str_replace('\\', '/',  $className) . '.php')) {
			require_once str_replace('\\', '/',  $className) . '.php';
		}
		//var_dump($className);
});

$main=new MainController;
$main->Index();


$estudiante=new EstudianteController;
$estudiante->Index();

//$obj2 = new MyClass2(); 

 ?>
