<?php 
    include '../conexion.php';
    $idCajon = $_POST['idCajon'];

    $sql = "DELETE FROM cajones WHERE ID_cajones = '" . $idCajon . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Cajon eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>