<?php
    include '../conexion.php';
    
    $ID = $_POST['idVehiculo'];
    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];
    $puertas = $_POST['puertas'];
    $tipo = $_POST['tipo'];
    $idCliente = $_POST['idCliente'];

    $con = "UPDATE vehiculos SET Matricula = '" .$matricula . "', Modelo = '" . $modelo ."', Color = '" . $color ."', Puertas = '" . $puertas . "', Tipo = '" . $tipo . "', ID_Cliente = '" . $idCliente . "' WHERE ID_vehiculo = '" . $ID . "'";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Vehiculo actualizado correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>