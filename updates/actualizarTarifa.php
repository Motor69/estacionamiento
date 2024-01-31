<?php
    include '../conexion.php';

    $ID = $_POST['idTarifa'];
    $nombreTar = $_POST['nombreTar'];
    $monTar = $_POST['monTar'];

    $con = "UPDATE tarifas SET Nombre_Tarifa = '" . $nombreTar . "', Monto = '" . $monTar . "' WHERE ID_Tarifa = '" . $ID . "'";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Tarifa actualizada correctamente";
    }else{
        echo "Error no se actualizaron los datos";
    }

?>

