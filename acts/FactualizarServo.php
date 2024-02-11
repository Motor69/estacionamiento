<?php 
    $ID_Servo= $_GET['ID_Servo'];
    include '../conexion.php';
    $query = mysqli_query($DB_conexion,"SELECT * FROM servo WHERE ID_Servo = $ID_Servo");
    $servo = mysqli_fetch_assoc($query);
?>

<section class="reservation" id="reservation">

<form id="frmservo" name="frmservo">

    <div class="container">

        <div class="box">
            <p>DESCRIPCIÓN: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese la descripción del servo" id="Descripcion" value="<?php echo $servo['Descripcion']?>" required>
        </div>

        <div class="box">
            <p>GRADOS: <span>*</span></p>
            <input type="number" class="input" placeholder="Ingrese los grados del servo" id="Grados" value="<?php echo $servo['Grados']?>" required>
        </div>

        <div class="box">
            <p>ESTATUS: <span>*</span></p>
            <select name="Estatus" id="Estatus">
                <option selected value="<?php echo $servo['Estatus'] ?>"><?php echo $servo['Estatus'] ?></option>
                <option value="0">2 Encendido</option>
                <option value="1">4 Apagado</option>
            </select>
        </div>


        <button type="submit" class="buton" onclick="actServo(<?php echo $servo['ID_Servo'] ?>);">Actualizar</button>

    </div>

</form>

</section>