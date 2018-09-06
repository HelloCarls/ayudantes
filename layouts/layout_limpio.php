
 	<?php 

 		include('header.php');	
 	
	    if (file_exists( $path_modulo )) include( $path_modulo );
	    else die('Error al cargar el módulo <b>'.$modulo.'. No
	    existe el archivo <b>'.$conf[$modulo]['archivo'].'</b>');
 
 		include('footer.php');	
 	?>