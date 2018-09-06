<?php


  if (isset($_SESSION['username'])) {

    include('inicio.php');

  }else{

    header('location: index.php');

  }

 ?>