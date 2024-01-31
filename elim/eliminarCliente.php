<?php 
    include '../conexion.php';
    $idCliente = $_POST['idCliente'];

    $sql = "DELETE FROM cliente WHERE ID_cliente = '" . $idCliente . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Cliente eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>