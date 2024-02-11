<!--Servo-->
<section class="reservation" id="reservation">

<form id="frmservo" name="frmservo">

    <div class="container">

        <div class="box">
            <p>DESCRIPCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la descripción del servo" id="Descripcion" required>
        </div>

        <div class="box">
            <p>GRADOS: <span>*</span></p>
            <input type="number" class="input" placeholder="Ingrese los grados del servo" id="Grados" required>
        </div>

        <div class="box">
            <p>ESTATUS: <span>*</span></p>
            <select name="Estatus" id="Estatus">
                <option value="0" disabled selected>Selecciona un estatus</option>
                <option value="1">Encendido</option>
                <option value="0">Apagado</option>
            </select>
        </div>

        <button type="submit" class="buton" onclick="regServo();">Registrar</button>

    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id " id="table_client">
        <thead>    
        <tr>
        <th>Descripción</th>
        <th>Grados</th>
        <th>Estatus</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM servo");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['Descripcion']; ?></td>
            <td><?php echo $fila['Grados']; ?></td>
            <td><?php echo $fila['Estatus']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarServo.php?ID_Servo=<?php echo $fila['ID_Servo']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarServo(<?php echo $fila['ID_Servo']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>