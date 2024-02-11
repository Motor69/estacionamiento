<?php
    include '../conexion.php';
    
    $descripcion = $_POST['descripcion'];
    $grados = $_POST['grados'];
    $estatus = $_POST['estatus'];

    $con = "INSERT INTO servo (ID_Servo, Descripcion, Grados, Estatus) VALUES (NULL, '". $descripcion ."', '". $grados ."', '". $estatus ."')";


    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Servo guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>