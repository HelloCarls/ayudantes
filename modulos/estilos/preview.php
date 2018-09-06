<?php

	if(!empty($_POST['estilo'])){

		if($_POST['estilo']=='plantilla1'){

			include('plantilla1/plantilla.php');

		}else if($_POST['estilo']=='plantilla2'){

			include('plantilla2/plantilla.php');

		}else if($_POST['estilo']=='plantilla3'){

			include('plantilla3/plantilla.php');

		}else if($_POST['estilo']=='plantilla4'){

			include('plantilla4/plantilla.php');

		}else{

			echo "<h1>No hay plantilla Seleccionada</h1>";
		
		}
	}
?>