<!--Registro-->
<section class="reservation" id="reservation">

<form id="registro" name="registro">

    <div class="container">

        <div class="box">
            <p>VEHÍCULO: <span>*</span></p>
            <!-- <input type="text" class="input" placeholder="Ingrese el tipo de vehículo" name="vehiculo" id="vehiculo" required> -->
            <select name="idVehic" id="idVehic" class="input">
                <option selected disabled>Seleccione el automovil</option>
                <?php
                    include '../conexion.php';
                    $query = "SELECT ID_vehiculo, Matricula FROM vehiculos";
                    $ejecutar = $DB_conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo "<option value='". $result['ID_vehiculo']."'>". $result['Matricula']."</option>";
                    }
                ?>
            </select>
        </div>

        <div class="box">
            <p>CAJÓN: <span>*</span></p>
            <select name="idCajon" id="idCajon" class="input">
                <option selected disabled>Seleccione un cajón</option>
                <?php
                    include '../conexion.php';
                    $query = "SELECT ID_cajones, Numero_Cajon FROM cajones";
                    $ejecutar = $DB_conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo "<option value='". $result['ID_cajones']."'>". $result['Numero_Cajon']."</option>";
                    }
                ?>
            </select>
        </div>

        <div class="box">
            <p>TARIFA: <span>*</span></p>
            <!-- <input type="text" class="input" name="llegada" required> -->
            <select name="idTarifa" id="idTarifa" class="input">
                <option selected disabled>Seleccione una tarifa</option>
                <?php
                    include '../conexion.php';
                    $query = "SELECT Nombre_Tarifa, Monto FROM tarifas";
                    $ejecutar = $DB_conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo "<option value='". $result['Monto']."'>". $result['Nombre_Tarifa']."</option>";
                    }
                ?>
            </select>
        </div>

        <button type="submit" class="buton" onclick="regRegistro();">Registrar</button>
    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id " id="table_client">
        <thead>    
        <tr>
        <th>Vehiculo</th>
        <th>Fecha Ingreso</th>
        <th>Hora Ingreso</th>
        <th>Fecha Salida</th>
        <th>Hora Salida</th>
        <th>ID Empleado</th>
        <th>ID Tariifa</th>
        <th>ID Cajon</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM registro");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['ID_Vehiculo']; ?></td>
            <td><?php echo $fila['Fecha_Ingreso']; ?></td>
            <td><?php echo $fila['Hora_Ingreso']; ?></td>
            <td><?php echo $fila['Fecha_Salida']; ?></td>
            <td><?php echo $fila['Hora_Salida']; ?></td>
            <td><?php echo $fila['ID_Empleado']; ?></td>
            <td><?php echo $fila['ID_Tarifa']; ?></td>
            <td><?php echo $fila['ID_Cajon']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarRegistro.php?ID=<?php echo $fila['ID_Registro']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarRegistro(<?php echo $fila['ID_Registro']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>