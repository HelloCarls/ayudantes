<?php
include dirname(__FILE__).'/includes/functions.php';


$consult = new DbConsult; 


$_POST = $consult->web(substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1));

$buffer = $consult->Dir($_POST["nombre_web"]);


if ($buffer["dir"]) {
	$_POST += $buffer;
	$buffer = null;
}

$buffer = $consult->Horario($_POST["nombre_web"]);

if ($buffer["Horario"]) {
	$_POST += $buffer;
	$buffer = null;
}

$buffer = $consult->Redes($_POST["nombre_web"]);

if ($buffer["redes"]) {
	$_POST += $buffer;
	$buffer = null;
}

$buffer = $consult->Tlf($_POST["nombre_web"]);


if ($buffer["tlf"]) {
	$_POST += $buffer;
	$buffer = null;
}

if (isset($_POST['URL'])) {

	$_GET['mod'] = 'preview';

	include 'index.php';
	
}else{

	$_GET['mod'] = '404';
	include 'index.php';

}


?>