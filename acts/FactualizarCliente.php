<?php 
    $ID_Cliente= $_GET['ID_Cliente'];
    include '../conexion.php';
    $query = mysqli_query($DB_conexion,"SELECT * FROM cliente WHERE ID_Cliente = $ID_Cliente");
    $cliente = mysqli_fetch_assoc($query);
?>

<section class="reservation" id="reservation">

<form id="frmclientes" name="frmclientes">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre del cliente" id="nombreCl" value="<?php echo $cliente['Nombre']?>" required>
        </div>

        <div class="box">
            <p>DIRECCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la dirección del cliente" id="direcCl" value="<?php echo $cliente['Direccion']?>" required>
        </div>

        <div class="box">
            <p>NÚMERO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el número telefónico del cliente" id="numtelC" value="<?php echo $cliente['Telefono']?>" required>
        </div>

        <div class="box">
            <p>CORREO: <span>*</span></p>
            <input type="email" class="input" placeholder="Ingrese el correo electrónico del cliente" id="correoC" value="<?php echo $cliente['Email']?>" required>
        </div>

        <button type="submit" class="buton" onclick="actCliente(<?php echo $cliente['ID_Cliente'] ?>);">Actualizar</button>

    </div>

</form>

</section>