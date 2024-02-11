<?php 
    include '../conexion.php';
    $idServo = $_POST['idServo'];

    $sql = "DELETE FROM servo WHERE ID_Servo = '" . $idServo . "'";

    if($datos = mysqli_query($DB_conexion, $sql)) {
        echo 'Servo eliminado correctamente';
    } else {
        echo 'Error al eliminar';
    }
?>