<?php
    include '../conexion.php';
    
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['numero'];
    $correo = $_POST['correo'];

    $con = "INSERT INTO cliente (Nombre, Direccion, Telefono, Email) VALUES ('" . $nombre ."','". $direccion ."','". $telefono ."','". $correo ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>