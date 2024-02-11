<?php
    include '../conexion.php';

    $ID = $_POST['idEncargado'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['numero'];
    $correo = $_POST['correo'];
    $user = $_POST['userE'];
    $password = $_POST['contraE'];

    $con = "UPDATE empleados SET Nombre = '" . $nombre . "', Direccion = '" . $direccion . "', Telefono = '" . $telefono . "', Correo = '" . $correo . "', Usuario = '" . $user . "', Password = '" . $password . "' WHERE ID = '" . $ID . "'";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Encargado actualizado correctamente";
    }else{
        echo "Error no se actualizaron los datos";
    }

?>

