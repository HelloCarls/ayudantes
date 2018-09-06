<?php

$tipo = $_FILES['file']['type'];
$name_tmp = uniqid(rand(), false);



if ($tipo  == 'image/jpg') {

	$neme = 'logo.jpg';

}else if($tipo == 'image/jpeg' ){

	$name = 'logo.jpeg';

}else if ($tipo == 'image/png') {
	
	$name = 'logo.png';

}

$carpeta = 'uploads';
       

 if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

$target_path = "uploads/";

$target_path = $target_path . $name_tmp . $name;

$resp['name'] = $name;
$resp['tmp_name'] = $name_tmp;


if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){ 
	
	$resp['success'] = 1;	
	echo json_encode($resp);

} else{

	$resp['success'] = 0;
	echo json_encode($resp);
}



?>