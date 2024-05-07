<?php

function conectarDB(): mysqli{
    $db = mysqli_connect('localhost:3306', 'root', 'admin', 'bienesraices_crud');
    
    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }

    return $db;
}
