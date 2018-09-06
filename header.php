
<?php
 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
 
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Sin titulo aun!</title>
    <!-- Required meta tags -->
 
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <style type="text/css" id="carga_css">
    <?php if (isset($_POST['estilo'])){
      include 'modulos/estilos/'.$_POST['estilo'].'/estilos.css';
    } ?>
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Mis estilos-->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <link href="css/carousel.css" rel="stylesheet">

    
  </head>

  <body onpageshow='<?php if(!empty($modulo)){ echo 'loading("'.$modulo.'");';}?>'>
    <header>
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegation-fm">
              <span class="sr-only">Desplegar / Ocultar Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="imagenes/logo.png"></a> 
          </div>

            <!-- inicia menu -->
          <div class="collapse navbar-collapse" id="navegation-fm">
            <div class="navbar-left">  
              <ul class="nav navbar-nav">
                <li id="inicio"><a href="index.php">Inicio</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Boton 1 <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu menu" role="menu">
                    <li><a href="#">Opcion_1</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Opcion_2</a></li>
                    <li><a href="#">Opcion_3</a></li>
                    <li><a href="#">Opcion_4</a></li>
                  </ul>
                </li>
                <li ><a href="#">Boton 2</a></li>
                <li><a href="#">Boton 3</a></li>
                <li><a href="#">Boton 4</a></li>
              </ul>
            </div>
          
            <div class="navbar-right"> 
              <ul class="nav navbar-nav">
                <?php echo $user; ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id='title_sms'>Modal Header</h4>
          </div>
          <div class="modal-body" >
            <p id="body_sms">Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
        
      </div>
    </div>