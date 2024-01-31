<?php
    include '../conexion.php';
    
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['numero'];
    $correo = $_POST['correo'];
    $user = $_POST['userE'];
    $password = $_POST['contraE'];

    $con = "INSERT INTO empleados (Nombre, Direccion, Telefono, Correo, Usuario, Password) VALUES ('" . $nombre ."','". $direccion ."','". $telefono ."','". $correo ."', '". $user ."', '". $password ."')";

    if($datos = mysqli_query($DB_conexion, $con)){
        echo "Datos guardados correctamente";
    }else{
        echo "Error no se guardaron los datos";
    }

?>

