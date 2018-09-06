<?php

	define('MODULO_DEFECTO', 'home');
	define('MODULO_SESSION',  'session');
	define('MODULO_404',  '404');
	define('LAYOUT_DEFECTO', 'layout_simple.php');
	define('MODULO_PATH', realpath('./modulos/'));
	define('LAYOUT_PATH', realpath('./layouts/'));


	$conf['home'] = array(
	       'archivo' => 'home.php',
	       'layout' => LAYOUT_DEFECTO 
	);
	$conf['session'] = array(
	       'archivo' => 'home_session.php',
	       'layout'  => 'dashboard/index.php'
	);
	$conf['404'] = array(
	       'archivo' => '404.php',
	       'layout'  => '404.php'
	);
	$conf['new-page'] = array(
	       'archivo' => 'form.php',
	       'layout' => 'layout_form.php'
	);
	$conf['page-create'] = array(
	       'archivo' => 'create-web.php',
	       'layout'  => 'layout_preview.php'
	);
	/*$conf['proceso2'] = array(
	       'archivo' => 'plantilla.php',
	       'layout'  => 'layout_limpio.php'
	);*/
	/*$conf['form3'] = array(
	       'archivo' => 'form_3.php',
	       'layout' => 'layout_form.php'
	);*/
	$conf['preview'] = array(
	       'archivo' => 'estilos/preview.php',
	       'layout' => 'layout_preview.php'
	);

	/*--------------DATOS DB---------------*/
	
		define('NAME_DB', 'usuarios');
		define('USER_DB', 'root');
		define('PASS_DB', '');
		define('HOST_DB', 'localhost');
		define('CHARSET_DB', 'utf8mb4');
		define('COLLATE_DB', '');
		define('DIR_PATH', dirname(__FILE__));
		
	

?>