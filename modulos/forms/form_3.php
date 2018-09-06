		<script type="text/javascript">
			
			
		</script>

		<div class="v-contenedor">
		<h3 class="centrar">Personaliza tu web</h3>
        <div class="conten">

	       	
		    <div class="caja_p">
		        <div class="caja_libre caja_logo">
		        	<div class="caja_libre logo_descrip">
			       		<h4>Ingresa un logo a tu web</h4>
			       		<p>
			       			Resolucion: 320*320<br>
			       			Formato: jpg/png
			       		</p>
			       	</div>	
			       	<div class="caja_libre img_logo">
			        		<label for="file" class="label_file " id="logo"><span class="glyphicon glyphicon-floppy-open"></span><img id="i"></label>
			        		<input type="file" id="file" name="file" style="display: none;" onchange="carga();">
			        		<input type="hidden" name="logo" id='input_file'>
			        		<div>
			        			<div id="barra_de_progreso">
			        				
			        			</div>
			        		</div>
			       	</div>
			       	
		       	</div>
			    <div class="conte-color centrar"> 
		        	<h4 class="centrar">Color de fondo</h4>

		        	<div class="caja_libre">
			         	
				        <div class="input_color" >
				        	<input type="color" name="color_de_fondo" value="#a6712d">
				        </div>
			        </div>
		        </div>
		    </div>
	       	<div class="texdescrip">
	 		 	<label for="txt_descripcion" >Ingrese una descripcion de tu Nueva Web <span class="indicador"><span id="conta_char">0</span></span></label>
	 		 	<textarea id="txt_descripcion" name="descripcion" class="form-control" onKeyUp="cuenta()" onKeyDown="cuenta()"></textarea>
 		 	</div>
        </div>
        <h4>Diseño de la pagina</h4>
		<div class="v-container">
				<div>
				    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				      <!-- Indicators -->
				      <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				        <li data-target="#myCarousel" data-slide-to="3"></li>
				      </ol>
				      <div class="carousel-inner" role="listbox">
				        <div class="item active">
				          	<label for="estilo1">
							<div class="div-relative">	
								<img src="imagenes/1.jpg" class="v-mult" >
								<div class="but mostrar" id="Estilo_uno"><span class="check_boton centrar"> Seleccionado</span></div>
							</div>
							</label>
							<input type="radio" name="estilo" id='estilo1' value="plantilla1" style="display: none;" checked="true">
				        </div>
				        <div class="item">
				          	<label for="estilo2">
							<div class="div-relative">	
								<img src="imagenes/2.jpg" class="v-mult">
								<div class="but" id="Estilo_dos"><span class="check_boton centrar"> Seleccionado</span></div>
							</div>
							</label>
							<input type="radio" name="estilo" id='estilo2' value="plantilla2" style="display: none;">
				        </div>
				        <div class="item">
				          	<label for="estilo3">
							<div class="div-relative">	
								<img src="imagenes/3.jpg" class="v-mult">
								<div class="but" id="Estilo_tres"><span class="check_boton centrar"> Seleccionado</span></div>
							</div>
							</label>
							<input type="radio" name="estilo" id='estilo3' value="plantilla3" style="display: none;">
				      	</div>
				      	<div class="item">
				          	<label for="estilo4">
							<div class="div-relative">	
								<img src="imagenes/4.jpg" class="v-mult">
								<div class="but" id="Estilo_cuatro"><span class="check_boton centrar"> Seleccionado</span></div>
							</div>
							</label>
							<input type="radio" name="estilo" id='estilo4' value="plantilla4" style="display: none;">
				      	</div>
				      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        <span class="sr-only">Previous</span>
				      </a>
				      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </div><!-- /.carousel -->
				</div>
			</div>
		<button type="button" class="btn btn-success centrar" onclick="validar_form_3();">Previzualizar</button>
	</div>

