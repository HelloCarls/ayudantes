<?php
require 'functions.php';

 
//Pull username, generate new ID and hash password

$newuser = $_POST['newuser'];

$newemail = $_POST['email'];




//Validation rules

    //Validation passed
        if (isset($newuser) && !empty(str_replace(' ', '', $newuser)) && isset($newuser) ){

            //Tries inserting into database and add response to variable

            $a = new DbConsult;

            

            if($a->User($newuser, 'username')){

                echo 'El usuario ya esta registrado';


            }else if($a->User($newemail, 'email')){

                echo 'El E-mail ya esta registrado';

            }else{

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div><div id="returnVal" style="display:none;">true</div>';
            }
            //Success
            
        } else {
            //Validation error from empty form variables
            echo 'An error occurred on the form... try again';
        }
    