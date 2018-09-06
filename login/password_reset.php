<?php
include 'config.php';
require 'includes/functions.php';

$id = $_GET['id'];
$key =$_GET['key'];

$e = new loginform;

$resp = $e->CheckId($id, $key);


if($resp){  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cambiar Contraseña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <script type="text/javascript">
      resetkey='<?php echo $key?>';
      resetid='<?php echo $id?>';
    </script>
  </head>

  <body>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="#" onsubmit="return false">
        <h3 class="form-signup-heading">Ingrese su Nueva Contraseña</h3>
        
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repita su Contraseña">

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/newpass.js"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
<?php

}else{
?>
  <!DOCTYPE html>
<html>
  <head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <meta charset="UTF-8">
    <title>Enlace Invalido</title>
  </head>
  <body>
	<?php echo 'El enlace no en valido';}?>
  </body>
  </html>

