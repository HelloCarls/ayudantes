
<?php
  include('config.php');
 
  session_start();

  if (isset($_SESSION['username'])) {

    $mod_session = MODULO_SESSION;
    $user = '<li><a href="index.php"><span class="glyphicon glyphicon-user"></span>'.$_SESSION['username'].'</a></li><li><a href="login/logout.php">Salir</a></li>';

  }else{

    $mod_session = MODULO_DEFECTO;
    $user = '<li><a href="login/main_login.php"><span class="glyphicon glyphicon-user"></span>Inicie sesión</a></li>';
  }

  
  if (!empty($_GET['mod'])) {
    $modulo = $_GET['mod'];
  }
  else {
    $modulo = $mod_session;
  }



  if (empty($conf[$modulo])) {
    $modulo = MODULO_404;
  }



  if (empty($conf[$modulo]['layout'])) {
    $conf[$modulo]['layout'] = LAYOUT_DEFECTO;
  }


  $path_layout = LAYOUT_PATH.'/'.$conf[$modulo]['layout'];
  $path_modulo = MODULO_PATH.'/'.$conf[$modulo]['archivo'];


  if (file_exists($path_layout)) {
    include( $path_layout );
  }
  else {
    if (file_exists( $path_modulo )) {
      include( $path_modulo );
    }
    else {
      die('Error al cargar el módulo **'.$modulo.'**. No existe el archivo **'.$conf[$modulo]['archivo'].'**');
    }
  }
  
?>
