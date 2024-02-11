<?php
    include 'conexion.php';
    session_start();

    if(!isset($_POST['usuario'], $_POST['contrasena'])){
        header('location:index.php');
    } /*else {
        echo $_POST['usuario'];
        echo $_POST['contrasena'];
    }*/

    //* EVITAR INYECCIÓN SQL
    if($stmt=$DB_conexion->prepare('SELECT Usuario, Password FROM empleados WHERE Usuario = ? ')){
        $stmt->bind_param('s', $_POST['usuario']);
        $stmt->execute();
    }

    //*VERIFICAR DATOS CON LOS DE LA BD
    $stmt->store_result();
    if($stmt->num_rows > 0){
        $stmt->bind_result($Usuario, $Password);
        $stmt->fetch();

        if($_POST['contrasena'] === $Password){
            session_regenerate_id();
            $_SESSION['LoggedIn'] = TRUE;
            $_SESSION['name'] = $_POST['Usuario'];
            $_SESSION['ID'] = $id;
            // $_SESSION['nombre'] = $Nombre;
            header('location:menu.php');
        } else {
            echo '<script languaje="javascript"> alert("Contraseña Incorrecta");
                window.location.href="index.php";
            </script>';
        }
    } else {
        echo '<script languaje="javascript"> alert("Usuario Incorrecto");
            location.href="index.php";
        </script>';
    }
    $stmt->close();

?>