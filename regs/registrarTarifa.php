<?php
    include '../conexion.php';
    
    $nombreTar = $_POST['nombreTar'];
    $monTar = $_POST['monTar'];

    $con = "INSERT INTO tarifas (Nombre_Tarifa, Monto) VALUES ('" . $nombreTar ."','". $monTar ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>

