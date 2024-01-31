<?php
    include '../conexion.php';
    
    $ID = $_POST['idCliente'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['numero'];
    $correo = $_POST['correo'];

    $con = "UPDATE cliente SET Nombre = '" .$nombre . "', Direccion = '" . $direccion ."', Telefono = '" . $telefono ."', Email = '" . $correo . "' WHERE ID_Cliente = '" . $ID . "'";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos actualizados correctamente"; 
    }else{
        echo "Error, no se actualizaron los datos";
    }

?>