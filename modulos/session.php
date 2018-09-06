<?php  

if (isset($_SESSION['username'])) {

	switch ($_SESSION['admin']) {
		case 1:
			include('modulos/session/admin/inicio.php');
			break;
		
		default:
			include('modulos/session/user/inicio.php');
			break;
	}
}else{
	header('location: index.php');
}




?>