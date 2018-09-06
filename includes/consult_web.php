<?php
require 'functions.php';


//Pull username, generate new ID and hash password

$name_web = $_POST['name_web'];


//Validation rules

    //Validation passed
   

        //Tries inserting into database and add response to variable

        $a = new DbConsult;

        

        if(!$a->Web($name_web)){

            echo 'true';


        }else {

            echo 'El Nombre de la web ya existe...';

        }
        //Success
        
    