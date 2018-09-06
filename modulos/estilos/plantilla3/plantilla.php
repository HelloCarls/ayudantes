	<div class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p3_caja" style="background: -webkit-linear-gradient(-45deg, <?php if (!empty($_POST['color_de_fondo'])){echo $_POST['color_de_fondo'];}?> 0%,#333 100%);">
            <h1 class="display-3 text-center text-white mt-4">
            	<?php 
					if (!empty($_POST['nombre'])) echo strtoupper($_POST['nombre']).'<br>'; 
					if (!empty($_POST['apellido'])){
						echo ' '.strtoupper($_POST['apellido']); 
					}
				?>
			
			</h1>
            <div class="row">
            	
            	<div class="col-lg-4 col-lg-offset-2">
            		<?php if(!empty($_POST['logo'])){

						$logo = json_decode($_POST['logo']);

						if(is_null($logo)){

							echo '<img src="imagenes/logos_web/'.$_POST['logo'].'" class="P3_img_titulo" alt="img de perfil">';

						}else{

							$url_logo = $logo->tmp_name.$logo->name;
							
							echo '<img src="uploads/'.$url_logo.'" class="P3_img_titulo" alt="img de perfil">';

						}
					}
					
					?>
            	</div>
            	<div class="col-lg-4 col-lg-offset-1">
	            	<h2 class="mt-4">Servicios: </h2>
	          		<p><?php if (!empty($_POST['descripcion'])) echo $_POST['descripcion']; ?></p>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="container">
		<div class="row">

	        <div class="col-sm-4">
	          <h2 class="mt-4 text-center">Horarios de antencion: </h2>
	          <p class="text-center"><?php 
					if (!empty($_POST['agg_horario'])) {

						$horario = $_POST['agg_horario'];
						for ($i=0; $i < sizeof($horario); $i++) { 
							echo  $horario[$i].'<br>';
						}
					}

					if (!empty($_POST['Horario'])) {

						for ($i=0; $i < count($_POST['Horario']); $i++) {


							$h = $_POST['Horario'][$i]['Horario'];

							echo  $h.'<br>';			
						}	
					}
				?></p>
	        </div>

	        <div class="col-sm-4 p3_border">
	          <h2 class="mt-4 text-center">Redes Sociales</h2>
	          <p class="text-center"><?php 
					if (!empty($_POST['red'])){

						$red = $_POST['red'];
						for ($i=0; $i < sizeof($red); $i++) { 
							echo $red[$i].'<br>';
						}
				}

				if (!empty($_POST['redes'])) {

		
						for ($i=0; $i < count($_POST['redes']); $i++) {


							$h = $_POST['redes'][$i]['nombre_red'];
							$t = $_POST['redes'][$i]['tipo_red'];

							echo  $t.': '.$h.'<br>';
								
						}
						
					}

					//echo var_dump($_POST['nombre_red']);
				?></p>
	        </div>

	        <div class="col-sm-4">
	          <h2 class="mt-4 text-center">Contacto</h2>
	          <div class="row">
	          	<div class="col-sm-7">
		          <address>
		            <strong>Direciones:</strong>
		           	<p><?php 
					

						if (!empty($_POST['direccion_add'])) {

							if (is_array($_POST['direccion_add'])) {
								$h = $_POST['direccion_add'];
								for ($i=0; $i < sizeof($h); $i++) { 
									echo  $h[$i].'<br>';
									
								}
							}else{
								echo  $_POST['direccion_add'];
							}
							
						}
						if (!empty($_POST['dir'])) {

							for ($i=0; $i < count($_POST['dir']); $i++) {


								$h = $_POST['dir'][$i]['direccion'];

								echo  $h.'<br>';			
							}	
						}

					?></p>
		          </address>
	          	</div>
	          	<div class="col-sm-5">
	          		  <address>
	     	  	<strong >Telefonos:</strong>
	          	<p><?php

	          		if (!empty($_POST['telefono_add'])) {

						if (is_array($_POST['telefono_add'])) {
							$h = $_POST['telefono_add'];
							for ($i=0; $i < sizeof($h); $i++) { 
								echo  $h[$i].'<br>';
								
							}
						}else{
							echo  $_POST['telefono_add'];
						}
					}
					

					if (!empty($_POST['tlf'])) {

						for ($i=0; $i < count($_POST['tlf']); $i++) {


							$h = $_POST['tlf'][$i]['telefono'];

							echo  $h.'<br>';			
						}	
					}
					
	          	 ?></p>
	          </address>
	          	</div>
	          </div>
	         
	     	
	        </div>

      </div>
    </div>
    <div class="clean"></div>