
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="centrar">La web fue creada con exito</h1>
<h5 class="centrar">Vizualiza tu web en: <a href="<?php echo 'http://104.223.96.147/'.$_POST['nombre_web'] ?>"><?php echo 'http://104.223.96.147/'.$_POST['nombre_web'] ?></a></h5>

<?php 



$url = '/'.$_POST['nombre_web'];

include DIR_PATH.'/includes/functions.php';

$newid = uniqid(rand(), false);
$newuser = $_POST['usuario'];
$newpw = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pw1 = $_POST['password'];
$newemail = $_POST['email'];

$insert = new DbInsert;


echo 'Usuario Creado: ';
echo $response = $insert->User($newuser, $newid, $newemail, $newpw);
echo '<br/>';


if ($response == 'true') {

    $m = new MailSender;
    $m->sendMail($newemail, $newuser, $newid, 'Verify');

    $_POST['id_usuario'] = $newid;
    $_POST['URL'] = $url;

    $web = $insert->Web($_POST);
    echo 'web creada: '.$web.'<br>';
    if ($web == 'true') {
        
        if(isset($_POST['red']) && $_POST['red'] != ''){


            for ($i=0; $i < count($_POST['red']) ; $i++) {

                if ($_POST['red'][$i] != '') {

                    $pos = strpos($_POST['red'][$i], ':');

                    $red = substr($_POST['red'][$i], $pos+1);

                    $redtipo = substr($_POST['red'][$i], 0, (strlen($red)+1)*(-1));

                    echo 'red social '.$i.' cargada: '.$insert->Redes($_POST['nombre_web'], $red, $redtipo).'<br/>';
                }

            }
        }
        

        if(isset($_POST['direccion_add'])){

            for ($i=0; $i < count($_POST['direccion_add']) ; $i++) { 

               if ($_POST['direccion_add'][$i] != '') {

                    echo 'direccion '.$i.' cargada: '.$insert->Dir($_POST['nombre_web'], $_POST['direccion_add'][$i]).'<br/>';

                }
               
        
            }
        }

        if(isset($_POST['agg_horario']) && $_POST['agg_horario'] != ''){

            for ($i=0; $i < count($_POST['agg_horario']) ; $i++) {

                if ($_POST['agg_horario'][$i] != '') {

                    echo 'Horario '.$i.' cargado: '.$insert->Horario($_POST['nombre_web'], $_POST['agg_horario'][$i]).'<br/>';

                }
            }
        
        }

        if(isset($_POST['telefono_add'])){

            for ($i=0; $i < count($_POST['telefono_add']) ; $i++) { 

               if ($_POST['telefono_add'][$i] != '') {

                    echo 'telefono '.$i.' cargado: '.$insert->Tlf($_POST['nombre_web'], $_POST['telefono_add'][$i]).'<br/>';

                }
               
        
            }
        }
    }

}else if(substr($response, 0, 22) == 'Error: SQLSTATE[23000]'){

    echo 'El usuario ya existe en la base de datos.';

}


?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>