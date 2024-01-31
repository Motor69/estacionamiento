<?php 
    $ID_Encargado = $_GET['ID'];
    include '../conexion.php';
    $query = mysqli_query($DB_conexion,"SELECT * FROM empleados WHERE ID = $ID_Encargado");
    $encargado = mysqli_fetch_assoc($query);
?>

<section class="reservation" id="reservation">

<form id="" name="">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre del cliente" id="nombreE" value="<?php echo $encargado['Nombre']?>" required>
        </div>

        <div class="box">
            <p>DIRECCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la dirección del cliente" id="direcE" value="<?php echo $encargado['Direccion']?>" required>
        </div>

        <div class="box">
            <p>NÚMERO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el número telefónico del cliente" id="numtelE" value="<?php echo $encargado['Telefono']?>" required>
        </div>

        <div class="box">
            <p>CORREO: <span>*</span></p>
            <input type="email" class="input" placeholder="Ingrese el correo electrónico del cliente" id="correoE" value="<?php echo $encargado['Correo']?>" required>
        </div>

        <div class="box">
            <p>USUARIO: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el usuario de logueo del empleado" id="userE" value="<?php echo $encargado['Usuario']?>" required>
        </div>

        <div class="box">
            <p>CONTRASEÑA: <span>*</span></p>
            <input type="password" class="input" placeholder="Ingrese el correo electrónico del cliente" id="contraE" value="<?php echo $encargado['Password']?>" required>
        </div> 

        <button type="submit" class="buton" onclick="actEncargado(<?php echo $encargado['ID'] ?>);">Actualizar</button>

    </div>

</form>

</section>