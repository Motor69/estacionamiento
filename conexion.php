<?php

    $DB_host = "localhost";
    $DB_user = "root";
    $DB_name = "estacionamiento";
    $DB_password = "";
    
    $DB_conexion = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);

    if(mysqli_connect_error()){
        exit('Error en la conexión a la BD'.mysqli_connect_error());
    } else {
        //echo "Conexión exitosa";
    }

?>