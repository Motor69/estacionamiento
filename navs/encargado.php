<!--Encargado-->
<section class="reservation" id="reservation">

<form id="frmencargados" name="frmencargados">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre del cliente" id="nombreE" required>
        </div>

        <div class="box">
            <p>DIRECCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la dirección del cliente" id="direcE" required>
        </div>

        <div class="box">
            <p>NÚMERO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el número telefónico del cliente" id="numtelE" required>
        </div>

        <div class="box">
            <p>CORREO: <span>*</span></p>
            <input type="email" class="input" placeholder="Ingrese el correo electrónico del cliente" id="correoE" required>
        </div>

        <div class="box">
            <p>USUARIO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el usuario de logueo del empleado" id="userE" required>
        </div>

        <div class="box">
            <p>CONTRASEÑA: <span>*</span></p>
            <input type="password" class="input" placeholder="Ingrese el correo electrónico del cliente" id="contraE" required>
        </div> 

        <button type="submit" class="buton" onclick="regEncargado();">Registrar</button>

    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id " id="table_client">
        <thead>    
        <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Número</th>
        <th>Correo</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM empleados");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['Direccion']; ?></td>
            <td><?php echo $fila['Telefono']; ?></td>
            <td><?php echo $fila['Correo']; ?></td>
            <td><?php echo $fila['Usuario']; ?></td>
            <td><?php echo $fila['Password']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarEncargado.php?ID=<?php echo $fila['ID']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarEncargado(<?php echo $fila['ID']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>