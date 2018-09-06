
	
	<div class="header_2" style="background: -webkit-linear-gradient(-45deg, <?php if (!empty($_POST['color_de_fondo'])){echo $_POST['color_de_fondo'];}?> 0%,#333 100%);">			
		<div class='contain'>
			<div class='slogan'>
				<div class='ten columns'>

					<?php if(!empty($_POST['logo'])){

						$logo = json_decode($_POST['logo']);

						if(is_null($logo)){

							echo '<img src="imagenes/logos_web/'.$_POST['logo'].'" class="P1_img_titulo" alt="img de perfil">';

						}else{

							$url_logo = $logo->tmp_name.$logo->name;
							
							echo '<img src="uploads/'.$url_logo.'" class="P1_img_titulo" alt="img de perfil">';

						}
					}
					
					?>
			
							<h1><?php 
								if (!empty($_POST['nombre'])) echo strtoupper($_POST['nombre']).'<br>'; 
								if (!empty($_POST['apellido'])){
									echo ' '.strtoupper($_POST['apellido']); 
								}
							?></h1>
					

				
					<!-- <h2>Bit smaller but still in need slogan</h2>-->
				</div>

				<div class='six columns'>
					<h4>Servicios:</h4>
					<p><?php if (!empty($_POST['descripcion'])) echo $_POST['descripcion']; ?></p>
					<!-- <a href='#' class='button medium green'>See the price</a> -->
				</div>
			</div>
		</div>	
	</div>


	<div class='clear'></div>
	<div class='clear'></div>


	<div class='contain'>

		<div class='one-third column'>
			<img src='images/misc/about_us.png'>
			<h3>Redes Sociales</h3>
			<p><?php 
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


		<div class='one-third column'>
			<img src='images/misc/team.png'>
			<h3>Direcciones de la Empresa</h3>
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
		</div>



		<div class='one-third column'>
			<img src='images/misc/goals.png'>
			<h3>Horarios de Atencion</h3>
			<p><?php 
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
		
	</div>
	<br>
	<br>
	<br>
		
	
