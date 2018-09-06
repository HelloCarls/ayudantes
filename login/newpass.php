<?php
require 'includes/functions.php';
include_once 'config.php';
 
//hash password
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];
$key = $_POST['key'];
$id = $_POST['id'];

$e = new loginform;

if ($e->CheckId($id, $key)) {
  
    //Validation rules
    if ($pw1 != $pw2) {

        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los campos de contraseña deben coincidir</div><div id="returnVal" style="display:none;">false</div>';

    } elseif (strlen($pw1) < 4) {

        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La contraseña debe tener al menos 4 caracteres</div><div id="returnVal" style="display:none;">false</div>';

    } else {
        //Validation passed
        if (isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

            //Tries inserting into database and add response to variable

            $a = new NewUserForm;

            $response = $a->cambiarPass($newpw, $id);

            //Success
            if ($response == 'true') {

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Has Cambiado tu contraseña de forma exitosa</div><div id="returnVal" style="display:none;">true</div><meta http-equiv="Refresh" content="3;url=index.php">';

                //Send verification email

            } else {
                //Failure
                mySqlErrors($response);

            }
        } else {
            //Validation error from empty form variables
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Se produjo un error en el formulario... intente de nuevo</div><div id="returnVal" style="display:none;">true</div>';
        }
    };
  
}else {

    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>El enlace ya no es valido...</div><div id="returnVal" style="display:none;">true</div>';;
}