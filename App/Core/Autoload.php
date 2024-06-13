<?php 

use Controllers\MainController;
use Controllers\AdminController;

spl_autoload_register(function ($className)
{
		if (file_exists(str_replace('\\', '/',  $className) . '.php')) {
			require_once str_replace('\\', '/',  $className) . '.php';
		}
		//var_dump($className);
});
$main=new MainController;
$main->Index();

$admin=new AdminController;
$admin->index();

//$obj2 = new MyClass2(); 

 ?>
