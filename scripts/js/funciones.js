function msjErrorUser(){
    alert("Error de usuario");
};

function msjError(){
    alert("Error de usuario");
};

function msjGuardar(){
    alert("Datos guardados");
};

function msjErrorPass(){
    alert("Contraseña incorrecta");
};

function msjErrorUser(){
    alert("Usuario incorrecto");
};

function salir(){
    Swal.fire({
        tittle: "¿Quiere salir del sistema",
        text: "Selecciona sí para salir",
        icon: null
    });
};

function cargarDiv(div, url) {
    $(div).load(url);
};

//*FUNCIONES PARA REGISTROS

function regCliente() {
    let nombreCl = $("#nombreCl").val();
    let direcCl = $("#direcCl").val();
    let numtelC = $("#numtelC").val();
    let correoC = $("#correoC").val();

    $.post("regs/registrarCliente.php", {
        "nombre": nombreCl,
        "direccion": direcCl,
        "numero": numtelC,
        "correo": correoC
    }, function (respuesta){
        alert(respuesta);
        $("#nombreCl").val("");
        $("#direcCl").val("");
        $("#numtelC").val("");
        $("#correoC").val("");
        cargarDiv("#conteneitor", "navs/cliente.php");
    });
};

function regVehiculo() {
    let matricula = $("#matricula").val();
    let modelo = $("#modelo").val();
    let color = $("#color").val();
    let puertas = $("#puertas").val();
    let tipo = $("#tipo").val();
    let idCliente = $("#idCliente").val();

    $.post("regs/registrarVehiculo.php", {
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "idCliente": idCliente
    }, function (respuesta){
        alert(respuesta);
        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#idCliente").val("");
        cargarDiv("#conteneitor", "navs/vehiculo.php");
    });
};

function regTarifa() {
    let nombreTar = $("#nombreTar").val();
    let monTar = parseInt($("#monTar").val());

    $.post("regs/registrarTarifa.php", {
        "nombreTar": nombreTar,
        "monTar": monTar
    }, function (respuesta){
        alert(respuesta);
        $("#nombreTar").val("");
        $("#monTar").val("");
        cargarDiv("#conteneitor", "navs/tarifa.php");
    });
};

//TODO: Falta terminar registro en otros campos
// function regRegistro() {
//     let idVehic = $("#idVehic").val();
//     let idCajon = parseInt($("#idCajon").val());
//     let idTarifa = parseInt($("#idTarifa").val());

//     $.post("regs/registrarRegistro.php", {
//         "idVehic": idVehic,
//         "idCajon": idCajon,
//         "idTarifa": idTarifa
//     }, function (respuesta){
//         alert(respuesta);
//         $("#idVehic").val("");
//         $("#idCajon").val("");
//         $("#idTarifa").val("");
//     });
// }

function regEncargado() {
    let nombreE = $("#nombreE").val();
    let direcE = $("#direcE").val();
    let numtelE = $("#numtelE").val();
    let correoE = $("#correoE").val();
    let userE = $("#userE").val();
    let contraE = $("#contraE").val();

    $.post("regs/registrarEncargado.php", {
        "nombre": nombreE,
        "direccion": direcE,
        "numero": numtelE,
        "correo": correoE,
        "userE": userE,
        "contraE": contraE
    }, function (respuesta){
        alert(respuesta);
        $("#nombreE").val("");
        $("#direcE").val("");
        $("#numtelE").val("");
        $("#correoE").val("");
        $("#userE").val("");
        $("#contraE").val("");
        cargarDiv("#conteneitor", "navs/encargado.php");
    });
};

function regCajones() {
    let nCajon = parseInt($("#nCajon").val());

    $.post("regs/registrarCajon.php", {
        "nCajon": nCajon
    }, function (respuesta){
        alert(respuesta);
        $("#nCajon").val("");
        cargarDiv("#conteneitor", "navs/cajon.php");
    });
};


function regServo() {
    let descripcion = $("#Descripcion").val();
    let grados = $("#Grados").val();
    let estatus = $("#Estatus").val();

    console.log(descripcion, grados, estatus)

    $.post("regs/registrarServo.php", {
        "descripcion": descripcion,
        "grados": grados,
        "estatus": estatus
    }, function (respuesta){
        alert(respuesta);
        $("#Descripcion").val("");
        $("#Grados").val("");
        $("#Estatus").val("");
        cargarDiv("#conteneitor", "navs/servo.php");
    });
};

//*FUNCIONES PARA ELIMINAR REGISTROS

function eliminarRegistro(idRegistro) {
    $.post("elim/eliminarRegistro.php", {
        "idRegistro": idRegistro
    },
    function(result){
        alert(result);
        cargarDiv("#conteneitor", "navs/registro.php");
    });
};

function eliminarCajon(idCajon) {
    // console.log(idCajon);
    $.post("elim/eliminarCajon.php", {
        "idCajon": idCajon
    },
    function(result){
        alert(result);
        cargarDiv("#conteneitor", "navs/cajon.php");
    });
};

function eliminarCliente(idCliente) {
    $.post("elim/eliminarCliente.php", {
        "idCliente": idCliente
    },
    function (result) {
        alert(result);
        cargarDiv("#conteneitor", "navs/cliente.php")
    });
};

function eliminarVehiculo(idVehiculo) {
    $.post("elim/eliminarVehiculo.php", {
        "idVehiculo": idVehiculo
    },
    function (result) {
        alert(result);
        cargarDiv("#conteneitor", "navs/vehiculo.php");
    });
};

function eliminarTarifa(idTarifa) {
    $.post("elim/eliminarTarifa.php", {
        "idTarifa": idTarifa
    },
    function (result) {
        alert(result);
        cargarDiv("#conteneitor", "navs/tarifa.php");
    });
};

function eliminarEncargado(idEncargado) {
    $.post("elim/eliminarEncargado.php", {
        "idEncargado": idEncargado
    },
    function (result) {
        alert(result);
        cargarDiv("#conteneitor", "navs/encargado.php");
    });
};


function eliminarServo(idServo) {
    $.post("elim/eliminarServo.php", {
        "idServo": idServo
    },
    function (result) {
        alert(result);
        cargarDiv("#conteneitor", "navs/servo.php")
    });
}

//*FUNCIONES PARA ACTUALIZAR REGISTROS

function actCliente(idCliente) {
    let nombreCl = $("#nombreCl").val();
    let direcCl = $("#direcCl").val();
    let numtelC = $("#numtelC").val();
    let correoC = $("#correoC").val();

    $.post("updates/actualizarCliente.php", {
        "idCliente": idCliente,
        "nombre": nombreCl,
        "direccion": direcCl,
        "numero": numtelC,
        "correo": correoC
    }, function (respuesta){
        alert(respuesta);
        cargarDiv("#conteneitor", "navs/cliente.php");
    });
};

function actVehiculo(idVehiculo) {
    let matricula = $("#matricula").val();
    let modelo = $("#modelo").val();
    let color = $("#color").val();
    let puertas = $("#puertas").val();
    let tipo = $("#tipo").val();
    let idCliente = $("#idCliente").val();

    $.post("updates/actualizarVehiculo.php", {
        "idVehiculo": idVehiculo,
        "matricula": matricula,
        "modelo": modelo,
        "color": color,
        "puertas": puertas,
        "tipo": tipo,
        "idCliente": idCliente
    }, function (respuesta){
        alert(respuesta);
        cargarDiv("#conteneitor", "navs/vehiculo.php");
    });
};

function actTarifa(idTarifa) {
    let nombreTar = $("#nombreTar").val();
    let monTar = parseInt($("#monTar").val());

    $.post("updates/actualizarTarifa.php", {
        "idTarifa": idTarifa,
        "nombreTar": nombreTar,
        "monTar": monTar
    }, function (respuesta){
        alert(respuesta);
        cargarDiv("#conteneitor", "navs/tarifa.php");
    });
};

function actEncargado(idEncargado) {
    let nombreE = $("#nombreE").val();
    let direcE = $("#direcE").val();
    let numtelE = $("#numtelE").val();
    let correoE = $("#correoE").val();
    let userE = $("#userE").val();
    let contraE = $("#contraE").val();

    $.post("updates/actualizarEncargado.php", {
        "idEncargado": idEncargado,
        "nombre": nombreE,
        "direccion": direcE,
        "numero": numtelE,
        "correo": correoE,
        "userE": userE,
        "contraE": contraE
    }, function (respuesta){
        alert(respuesta);
        cargarDiv("#conteneitor", "navs/encargado.php");
    });
};

function actServo(idServo) {
    let descripcion = $("#Descripcion").val();
    let grados = $("#Grados").val();
    let estatus = $("#Estatus").val();

    $.post("updates/actualizarServo.php", {
        "idServo": idServo,
        "descripcion": descripcion,
        "grados": grados,
        "estatus": estatus
    }, function (respuesta){
        alert(respuesta);
        $("#Descripcion").val("");
        $("#Grados").val("");
        $("#Estatus").val("");
        cargarDiv("#conteneitor", "navs/servo.php");
    });
}

//* MODALES

function abrirModal(idCajon) {
    $("#modalPromociones").modal("show");
    $("#idCajon").val(idCajon);
};

function cerrarModal() {
    $("#modalPromociones").modal('hide');
};