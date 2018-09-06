<?php

spl_autoload_register(function ($className) {

    $className = strtolower($className);
    $path = dirname(__FILE__)."/class/{$className}.php";

    if (file_exists($path)) {

        require_once($path);

    } else {

        die("The file {$className}.php could not be found.".$path);

    }
});



?>