<?php
    include '../conexion.php';
    
    $idVehic = $_POST['idVehic'];
    $idCajon = $_POST['idCajon'];
    $idTarifa = $_POST['idTarifa'];

    $con = "INSERT INTO registro (ID_Vehiculo, ID_Cajon, ID_Tarifa) VALUES ('" . $idVehic ."','". $idCajon ."','". $idTarifa ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>