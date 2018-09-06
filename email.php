<?php
$titulo = 'proceso de prueba';
$direccion = 'carlosplata416@gmail.com';
$mensaje = '!Buenos días!, en este sencillo tutorial vamos a ver como usar la función mail() incluida en el paquete de funciones de PHP5. Este TIP nos puede parecer interesante si pretendemos automatizar el envío de mails de nuestra aplicación, ya sea una aplicación Web o una aplicación Android/iOS/WindowsPhone que se comunique con PHP.';

$bool = false;
try {
			// Connect to server and select database.
			$bool = mail($direccion,$titulo,$mensaje);
		} catch (\Exception $e) {
			echo $e->getMessage();

		}


if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}

?>