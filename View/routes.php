<?php 
include 'Controllers/'.$controller.'.php';
include 'Models/Model.php';

switch ($controller) {
	case 'Student':
	include 'Models/Student.php';
	$controllers = new Student();
	break;
	case 'Class':
	include 'Models/Class.php';
	$controllers = new ClassController();
	break;
	default:
	$controllers = new Home();
	Home::index();
	break;
	
}
$controllers->{ $action }();

?>
