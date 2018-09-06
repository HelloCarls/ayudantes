	<?php 
		
		if (!empty($_POST['nombre_web'])){
		$nombre_web = ($_POST['nombre_web']); 
		}else{
			$nombre_web = '';
		}
	?>	
	<section class="sect-sty hidden_2">
		<form class="mod-form opacit"  name="formulario" id='formulario' action="?mod=page-create" method="post">			
			<ul class="contenedor-sect">
				<li class="sect focus" id="form_1" <?php include('modulos/forms/form_1.php'); ?></li>

				<li class="sect no-focus" id="form_2"><?php include('modulos/forms/form_2.php'); ?></li>

				<li class="sect no-focus" id="form_3"><?php include('modulos/forms/form_3.php'); ?></li>
			</ul>
			
		</form>
	</section>

	<div class="proceso" id="carga-tema">
		<div style="position: fixed; width: 100%; z-index: 100; bottom: 20px;">
			<div class="modal_info" id="modal" style="display: none;">
					<label for="nombre-web">Nombre de tu web</label>
					<input type="text" name="nombre_web" form="formulario" class="form-control" id="name_web" value="<?php echo $nombre_web ?>" required >
					<div>
						<button type="submit" class="btn btn-success" onclick="validar_nombre_web(1)" form="formulario">Confirmar</button>
						<button class="btn btn-success" onclick="volver();">Volver</button>	
					</div>
			</div>
		</div>
	</div>
    
