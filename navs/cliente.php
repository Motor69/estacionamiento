<!--Cliente-->
<section class="reservation" id="reservation">

<form id="frmclientes" name="frmclientes">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre del cliente" id="nombreCl" required>
        </div>

        <div class="box">
            <p>DIRECCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la dirección del cliente" id="direcCl" required>
        </div>

        <div class="box">
            <p>NÚMERO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el número telefónico del cliente" id="numtelC" required>
        </div>

        <div class="box">
            <p>CORREO: <span>*</span></p>
            <input type="email" class="input" placeholder="Ingrese el correo electrónico del cliente" id="correoC" required>
        </div>

        <button type="submit" class="buton" onclick="regCliente();">Registrar</button>

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
        <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../conexion.php';
        $query = mysqli_query($DB_conexion,"SELECT * FROM cliente");

        while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
            <td><?php echo $fila['Nombre']; ?></td>
            <td><?php echo $fila['Direccion']; ?></td>
            <td><?php echo $fila['Telefono']; ?></td>
            <td><?php echo $fila['Email']; ?></td>
            <td>
            <a class="btn btn-warning" href="#" onclick="cargarDiv('#conteneitor', 'acts/FactualizarCliente.php?ID_Cliente=<?php echo $fila['ID_Cliente']?>')">
            <i class="fa fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-del" href="#" onclick="eliminarCliente(<?php echo $fila['ID_Cliente']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
            </td>
            </tr>
            <?php endwhile;?>
    </table>
</div>