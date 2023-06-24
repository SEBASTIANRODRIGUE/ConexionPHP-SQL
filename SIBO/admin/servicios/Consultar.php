<?php


require '../../includes/funciones.php';

$bd = conectar_db();
$consulta = "SELECT * FROM servicios";
$resultado_consulta = mysqli_query($bd, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Clientes</title>
</head>
<body>
<h3>Gestion de servicios - Consultar</h3>  

<table>
    <th>
        <tr>
            <td>nro_servicio</td>
            <td>nombre</td>
            <td>descripcion</td>
            <td>costo</td>
        </tr> 
    </th>
    <?php while($servicio = mysqli_fetch_assoc($resultado_consulta)){?>
    <tr>
        <td> <?php echo $servicio['nro_servicio'];?> </td>
        <td> <?php echo $servicio['nombre'];?> </td>
        <td> <?php echo $servicio['descripcion'];?> </td>
        <td> <?php echo $servicio['costo'];?></td>
        <?php } ?>
    </tr>
    <a href="../../index-servicios.php">Regresar...</a>
</table>
</body>
</html>