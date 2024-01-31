<!--Vehículo-->
<section class="reservation" id="reservation">

<form id="" name="" method="POST">

    <div class="container">

        <div class="box">
            <p>MATRÍCULA: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la matrícula del vehículo" id="matricula" required>
        </div>

        <div class="box">
            <p>MODELO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el modelo del vehículo" id="modelo" required>
        </div>

        <div class="box">
            <p>COLOR: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el color del vehículo" id="color" required>
        </div>

        <div class="box">
            <p>PUERTAS: <span>*</span></p>
            <select id="puertas" class="input">
                <option selected disabled>Puertas del vehículo</option>
                <option value="2">2 Puertas</option>
                <option value="4">4 Puertas</option>
            </select>
        </div>

        <div class="box">
            <p>TIPO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el tipo del vehículo" id="tipo" required>
        </div>

        <div class="box">
            <p>CLIENTE: <span>*</span></p>
            <select id="idCliente" class="input">
                <option selected disabled>Seleccione a que cliente pertenece</option>
                <?php
                    include '../conexion.php';
                    $query = "SELECT ID_Cliente, Nombre FROM cliente";
                    $ejecutar = $DB_conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo "<option value='". $result['ID_Cliente']."'>". $result['Nombre']."</option>";
                    }
                ?>
            </select>
        </div>

        <button type="submit" class="buton" onclick="regVehiculo();">Registrar</button>

    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id " id="table_client">
        <thead>    
        <tr>
        <th>Matrícula</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Puertas</th>
        <th>Tipo</th>
        <th>Cliente</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM vehiculos");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['Matricula']; ?></td>
            <td><?php echo $fila['Modelo']; ?></td>
            <td><?php echo $fila['Color']; ?></td>
            <td><?php echo $fila['Puertas']; ?></td>
            <td><?php echo $fila['Tipo']; ?></td>
            <td><?php echo $fila['ID_Cliente']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarVehiculo.php?ID_vehiculo=<?php echo $fila['ID_vehiculo']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarVehiculo(<?php echo $fila['ID_vehiculo']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>