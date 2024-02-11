<?php 
    session_start();
    if(!isset($_SESSION['LoggedIn'])){
        echo '<script languaje="javascript">
            alert("Tienes que acceder con usuario y contraseña"); location.href = "index.php"
        </script>';
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administración</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/stylesMotel.css"> -->
    
</head>
<body >

    <div class="topnav" id="topnav">
        <h1>ESTACIONAMIENTO</h1>
        <nav>
            <!-- <a href="#" onclick="cargarDiv('#conteneitor', '#topnav')"><h1>ESTACIONAMIENTO</h1></a> -->
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/registro.php')">Registro</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/cajon.php')">Cajones</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/cliente.php')">Clientes</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/vehiculo.php')">Vehículos</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/tarifa.php')">Tarifas</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/encargado.php')">Encargados</a>
            <a href="logout.php" onclick="salir()">Salir</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/servo.php')">Servo</a>
            <div class="animation start-home"></div>
        </nav>
    </div>

    <div class="container-fluid" id="conteneitor">
        <?php   
            include 'conexion.php';
            $query = "SELECT * FROM cajones ORDER BY Numero_Cajon";
            $ejecutar = $DB_conexion->query($query);
            echo "<div class='row'>";
            while($result = $ejecutar->fetch_array()) {
                    echo "<div class='card' style='width: 18rem; margin: 1rem;'>
                        <div class='card-body'>
                            <img src='imagenes/ing.jpg' alt='Foto' style='width:90%; height:auto; margin-bottom: 1rem;'>
                            <h5 class='card-tittle'>Cajon ". $result['Numero_Cajon'] ."</h5>";
                            if($result['Estatus'] == 1) {
                                $query2 = "SELECT * FROM registro INNER JOIN vehiculos ON vehiculos.ID_vehiculo = registro.ID_Vehiculo INNER JOIN cajones ON cajones.ID_cajones = registro.ID_Cajon INNER JOIN tarifas ON tarifas.ID_Tarifa = registro.ID_Tarifa INNER JOIN empleados ON empleados.ID = registro.ID_Empleado WHERE registro.ID_Cajon = '". $result['ID_cajones']."'";

                                $ejecutar2 = $DB_conexion -> query($query2);
                                while($result2 = $ejecutar2 -> fetch_array()) {
                                    echo "<h4>Matricula: ". $result2['Matricula'] ."</h4>";
                                    echo "<p>". $result2['Fecha_Ingreso'] ."  ". $result2['Hora_Ingreso'] ."</p>";
                                    echo "<p>". $result2['Nombre_Tarifa'] ."  ". $result2['Monto'] ." hora</p>";
                                    echo "<p>". $result2['Nombre'] ."</p>";
                                } 

                            } else {
                            echo "<p class='card-text'> No hay vehiculo ocupando este cajon</p>";
                            echo "<a href='#' class='btn btn-info' onclick='abrirModal(". $result['ID_cajones'] .")'>Ocupar</a>";
                            }
                        echo"
                        </div>
                </div>";
            }
        ?>

        <div class="modal" id="modalPromociones">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-tittle">Registro de uso de estacionamiento.</h4>
                        <button type="button" class="close" data-dismiss="modal" onclick="cerrarModal();">x</button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>

</body>
</html>
