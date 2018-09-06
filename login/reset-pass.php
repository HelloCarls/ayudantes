<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reseteo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="#" id='form_reset'>
        <h3 class="form-signin-heading">Restablecer Contraseña</h3>
        <br>
        <h4>Ingresa tu Email</h4>        
        <input name="email_user" id="email_user" type="email" class="form-control" placeholder="E-mail" autofocus>
        <br>
        
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="reset" id="reset" class="btn btn-lg btn-success btn-block" type="button">Enviar</button>

        <div id="message"></div>

      </form>


    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/reset_pass.js"></script>

  </body>
</html>