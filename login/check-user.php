<?php
include 'config.php';
require 'includes/functions.php';

$email = $_POST['email_user'];
$vdb= new selectemail;
$enviar = new MailSender;
$e = $vdb->verify($email); 

$user = $e['username'];
$id = $e['id'];
$type = 'Reset_pass';

if ($e){

	echo 'true<br>';
    echo 'LINK: <a styles = "z-index: 1000;" >'.$enviar->sendMail($email, $user, $id, $type).'<a/>';
    echo '<br>Usuario:'.$user;

}else{
	$response = 'false';
	echo 'No existe el Correo Eletronico Ingresado';
}


?>