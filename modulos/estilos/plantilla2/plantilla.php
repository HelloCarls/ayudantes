
	<style type="text/css">
		body{
			background: #fff;
		}
	</style>	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2><?php 
							if (!empty($_POST['nombre'])) echo strtoupper($_POST['nombre']).' '; 
							if (!empty($_POST['apellido'])){
								echo ' '.strtoupper($_POST['apellido']); 
							}
						?></h2>
					<?php if (!empty($_POST['descripcion'])) echo '<br/><h4>Servicios: <h4/>'; echo '<p>'.$_POST['descripcion'].'</p>'; ?>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<h4>Redes Sociales</h4>					
							<div class="icon">
								<i class="fa fa-hand-o-right fa-3x"></i>
							</div>						
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
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<h4>Direcciones</h4>
						<div class="icon">
							<i class="fa fa-building-o fa-3x"></i>
						</div>
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
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<h4>Horarios de Atencion</h4>
						<div class="icon">
							<i class="fa fa-clock-o fa-3x"></i>
						</div>
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
				
			</div>
		</div>
	</div>
	