<?php 
    include '../conexion.php';
    $idTarifa = $_POST['idTarifa'];

    $sql = "DELETE FROM tarifas WHERE ID_Tarifa = '" . $idTarifa . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Tarifa eliminada correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>