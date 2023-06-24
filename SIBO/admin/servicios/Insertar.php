<?php 
require '../../includes/funciones.php';

$bd = conectar_db();


$errores = [];



    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nro_servicio = $_POST['nro_servicio'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $costo = $_POST['costo'];
        

        if(!$nro_servicio){
            $errores[] = 'El numero de servicio no fue ingresado';
        }
        if(!$nombre){
            $errores[] = 'El nombre no fue ingresado';
        }
        if(!$descripcion){
            $errores[] = 'La descripcion no fue ingresada';
        }
        if(!$costo){
            $errores[] = 'El costo no fue ingresado';
        }
        
        if(empty($errores)){
        
        
            $sql = "INSERT INTO servicios(nro_servicio,nombre,descripcion,costo) 
            VALUES ('$nro_servicio', '$nombre', '$descripcion', '$costo')" ;

            echo $sql;

            $resultado = mysqli_query($bd, $sql);

            if($resultado){
                
                header('location: ../../index-servicios.php');

            }
            }
            else{
                foreach($errores as $error){
                    echo '<br>' . $error;
                }
            }
        }        
?>
<div>
    <p>Nuevo servicio</p>

    <a href="../../index-servicios.php">Regresar</a>

    <form class="formulario" method="POST" action="Insertar.php">
        <fieldset>
            <legend>Servicios</legend>
            <label for="nro_servicio">no servicio:</label><br>
            <input type="text" id="nro_servicio" name="nro_servicio"><br>

            <label for="nombre">nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="descripcion">descripcion:</label><br>
            <input type="text" id="descripcion" name="descripcion" ><br>

            <label for="costo">costo:</label><br>
            <input type="text" id="costo" name="costo"><br>

            <input type="submit" id="enviar" name="enviar" value="Enviar datos">
        </fieldset>
        
    </form>

</div>

