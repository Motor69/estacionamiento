<?php
    include '../conexion.php';
    
    $nCajon = $_POST['nCajon'];
    $estat = 0;

    $con = "INSERT INTO cajones (Numero_Cajon, Estatus) VALUES ('" . $nCajon ."','". $estat ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>