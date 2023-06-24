<?php 

function conectar_db(){

    $db = mysqli_connect('localhost', 'root', '', 'sibo');

    if(!$db){
        'No se pudo conectar a la base de datos';
        exit;
    }
    return $db;
}
function obtener_clientes(){
    try{
        require 'database.php';
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql);
        return $consulta;
        
    }
    catch(\Throwable $th){
        echo('<pre>');
        var_dump($th);
        echo('</pre>');
    }
}    


?>