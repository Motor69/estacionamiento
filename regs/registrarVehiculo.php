<?php
    include '../conexion.php';
    
    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $puertas = $_POST['puertas'];
    $tipo = $_POST['tipo'];
    $idCliente = $_POST['idCliente'];

    $con = "INSERT INTO vehiculos (Matricula, Modelo, Color, Puertas, Tipo, ID_Cliente) VALUES ('" . $matricula ."','". $modelo ."','". $color ."','". $puertas ."', '". $tipo ."', '". $idCliente ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>