<?php 
    include '../conexion.php';
    $idVehiculo = $_POST['idVehiculo'];

    $sql = "DELETE FROM vehiculos WHERE ID_vehiculo = '" . $idVehiculo . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Vehiculo eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>