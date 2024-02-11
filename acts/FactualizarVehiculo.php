<?php 
    $ID_vehiculo= $_GET['ID_vehiculo'];
    include '../conexion.php';
    $query = mysqli_query($DB_conexion,"SELECT * FROM vehiculos WHERE ID_vehiculo = $ID_vehiculo");
    $vehiculo = mysqli_fetch_assoc($query);
?>

<section class="reservation" id="reservation">

<form id="" name="" method="">

    <div class="container">

        <div class="box">
            <p>MATRÍCULA: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la matrícula del vehículo" id="matricula" value="<?php echo $vehiculo['Matricula']?>" required>
        </div>

        <div class="box">
            <p>MODELO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el modelo del vehículo" id="modelo" value="<?php echo $vehiculo['Modelo']?>" required>
        </div>

        <div class="box">
            <p>COLOR: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el color del vehículo" id="color" value="<?php echo $vehiculo['Color']?>" required>
        </div>

        <div class="box">
            <p>PUERTAS: <span>*</span></p>
            <select id="puertas" class="input">
                <option selected value="<?php echo $vehiculo['Puertas'] ?>"><?php echo $vehiculo['Puertas'] ?> Puertas</option>
                <option value="2">2 Puertas</option>
                <option value="4">4 Puertas</option>
            </select>
        </div>

        <div class="box">
            <p>TIPO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el tipo del vehículo" id="tipo" value="<?php echo $vehiculo['Tipo']?>" required>
        </div>

        <div class="box">
            <p>CLIENTE: <span>*</span></p>
            <select id="idCliente" class="input" required>
                <option selected value="<?php echo $vehiculo['ID_Cliente']?>"><?php echo $vehiculo['ID_Cliente']?></option>
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

        <button type="submit" class="buton" onclick="actVehiculo(<?php echo $vehiculo['ID_vehiculo']?>);">Actualizar</button>

    </div>

</form>

</section>