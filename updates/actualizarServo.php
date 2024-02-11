<?php
    include '../conexion.php';
    
    $ID = $_POST['idServo'];
    $descripcion = $_POST['descripcion'];
    $grados = $_POST['grados'];
    $estatus = $_POST['estatus'];

    $con = "UPDATE servo SET Descripcion = '" .$descripcion . "', Grados = '" . $grados ."', Estatus = '" . $estatus ."' WHERE ID_Servo = '" . $ID . "'";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Servo actualizados correctamente"; 
    }else{
        echo "Error, no se actualizaron los datos";
    }

?>