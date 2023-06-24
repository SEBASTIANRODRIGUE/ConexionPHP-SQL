<?php



function conectar_db(){

    $db = mysqli_connect('localhost', 'root', '', 'sibo');

    if(!$db){
        'No se hubo conexion con la base de datos "sibo"';
        exit;
    }else{
        echo 'Conexión exitosa';

    }

    return $db;
}

