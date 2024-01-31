<!--Tarifa-->
<section class="reservation" id="reservation">

<form id="frmtarifas" name="frmtarifas">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre de la tarifa" id="nombreTar" required>
        </div>

        <div class="box">
            <p>Monto: <span>*</span></p>
            <input type="number" class="input" placeholder="Ingrese el monto de la tarifa" id="monTar" required>
        </div>


        <button type="submit" class="buton" onclick="regTarifa();">Registrar</button>

    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id " id="table_tarifa">
        <thead>    
        <tr>
        <th>Nombre Tarifa</th>
        <th>Monto</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM tarifas");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['Nombre_Tarifa']; ?></td>
            <td><?php echo $fila['Monto']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarTarifa.php?ID_Tarifa=<?php echo $fila['ID_Tarifa']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarTarifa(<?php echo $fila['ID_Tarifa']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>