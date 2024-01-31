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
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/registro.php')">Registro</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/cajon.php')">Cajones</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/cliente.php')">Clientes</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/vehiculo.php')">Vehículos</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/tarifa.php')">Tarifas</a>
            <a href="#" onclick="cargarDiv('#conteneitor', 'navs/encargado.php')">Encargados</a>
            <a href="logout.php" onclick="salir()">Salir</a>
            <div class="animation start-home"></div>
        </nav>
    </div>

    <div class="container-fluid" id="conteneitor">

        <!-- <h2>Hola <?php echo isset($_SESSION['name']) ?> </h2> -->

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">Gestione los usuarios del sistema.</p>
                        <a href="#" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">Gestione los usuarios del sistema.</p>
                        <a href="#" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">Gestione los usuarios del sistema.</p>
                        <a href="#" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">Gestione los usuarios del sistema.</p>
                        <a href="#" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">Gestione los usuarios del sistema.</p>
                        <a href="#" class="btn btn-primary">Usuarios</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="scripts/js/jquery.min.js"></script>
    <script src="scripts/js/funciones.js"></script>

</body>
</html>
