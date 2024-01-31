<?php 
    include '../conexion.php';
    $idEncargado = $_POST['idEncargado'];

    $sql = "DELETE FROM empleados WHERE ID = '" . $idEncargado . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Empleado eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>