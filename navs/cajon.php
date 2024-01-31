<!--Cajón-->
<section class="reservation" id="reservation">

<form id="frmcajones" name="frmcajones" method="">

    <div class="container">

        <div class="box">
            <p>NÚMERO DE CAJÓN: <span>*</span></p>
            <input type="number" class="input" placeholder="Ingrese el número del cajón" id="nCajon" required>
        </div>

        <!-- <div class="box">
            <p>ESTATUS: <span>*</span></p>
            <select id="state" class="input">
                <option selected disabled>Estatus del cajón</option>
                <option value="0">Desocupado</option>
                <option value="1">Ocupado</option>
            </select>
        </div> -->

        <button type="submit" class="buton" onclick="regCajones();">Registrar</button>

    </div>

</form>

</section>

<div class="tablas">
    <table class="table table-striped table-dark table_id table-responsive" id="table_Cajones">
        <thead>    
            <tr>
                <th>Numero Cajón</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../conexion.php';
            $query = mysqli_query($DB_conexion,"SELECT ID_cajones, Numero_Cajon FROM cajones ORDER BY Numero_Cajon");

            while($fila=mysqli_fetch_assoc($query)):
            ?>
            <tr>
                <td><?php echo $fila['Numero_Cajon']; ?></td>
                <td>
                    <!-- <a class="btn btn-warning"><i class="fa fa-edit"></i>Editar</a> -->
                    <a class="btn btn-danger btn-del" href="#" onclick="eliminarCajon(<?php echo $fila['ID_cajones']; ?>)">
                        <i class="fa fa-trash"></i>Eliminar
                    </a>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>