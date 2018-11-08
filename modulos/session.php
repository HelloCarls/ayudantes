<?php  

if (isset($_SESSION['username'])) {

	if (isset($_SESSION['admin'])) {
		
		switch ($_SESSION['admin']) {
			case 1:
				include('modulos/session/admin/inicio.php');
				break;
			
			default:
				include('modulos/session/user/inicio.php');
				break;
		}
	}else{
		session_destroy();
		die('Error al iniciar Sesion');
	}
	
}else{
	header('location: /login');
}




?>