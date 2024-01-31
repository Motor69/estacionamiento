<?php 
    $ID_Tarifa= $_GET['ID_Tarifa'];
    include '../conexion.php';
    $query = mysqli_query($DB_conexion,"SELECT * FROM tarifas WHERE ID_Tarifa = $ID_Tarifa");
    $tarifa = mysqli_fetch_assoc($query);
?>

<section class="reservation" id="reservation">

<form id="" name="">

    <div class="container">

        <div class="box">
            <p>NOMBRE: <span>*</span></p>
            <input type="text" class="input" placeholder="Ingrese el nombre de la tarifa" id="nombreTar" value="<?php echo $tarifa['Nombre_Tarifa']?>" required>
        </div>

        <div class="box">
            <p>Monto: <span>*</span></p>
            <input type="number" class="input" placeholder="Ingrese el monto de la tarifa" id="monTar" value="<?php echo $tarifa['Monto'] ?>" required>
        </div>


        <button type="submit" class="buton" onclick="actTarifa(<?php echo $tarifa['ID_Tarifa']?>);">Actualizar</button>

    </div>

</form>

</section>