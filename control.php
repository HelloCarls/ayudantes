<?php
include dirname(__FILE__).'/includes/functions.php';


$consult = new DbConsult; 

$base_url = substr($_SERVER["PHP_SELF"], 0, -11);

//$url_web = $base_url.'pages/'.substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1);

$url_web = substr(strrchr($_SERVER["REQUEST_URI"], '/'), 1);

if($base_url.$url_web == $_SERVER['REQUEST_URI']){

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

}


//die($base.'  // ¿Son iguales? //  '.$_SERVER["REQUEST_URI"].' ===== '.var_dump($prueba));




if (isset($_POST['URL'])) {

	$_GET['mod'] = 'preview';

	include 'index.php';
	
}else if($base_url.'dashboard' == $_SERVER["REQUEST_URI"]){
 	
 	$_GET['mod'] = 'session';
 	include 'index.php';
 	
}else{

	$_GET['mod'] = '404';
	include 'index.php';

}


?>