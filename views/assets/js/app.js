function nuevoRegistro() {
    var div = document.getElementById("formNuevoRegistroDinomi");
    div.classList.remove("hidden");

    var inputFecha = document.getElementById("idFecha");
    var inputHora = document.getElementById("idHora");

    // Obtén la fecha y hora actual
    var fechaHora = new Date();

    // Formatea la fecha y asigna al campo de fecha
    var fechaFormateada = fechaHora.toLocaleDateString();
    inputFecha.value = fechaFormateada;

    // Formatea la hora y asigna al campo de hora
    var horaFormateada = fechaHora.toLocaleTimeString();
    inputHora.value = horaFormateada;

}


function buscarRut() {
    var div = document.getElementById("tablaDetallePolizas");
    div.classList.remove("hidden");
}


function obtenerValoresSeleccionados() {
    var selectElement = document.getElementById('idComuna');
    var selectedOption = selectElement.options[selectElement.selectedIndex];

    var idComuna = selectedOption.value;
    var nombreComuna = selectedOption.getAttribute('data-comuna');
    var ciudadComuna = selectedOption.getAttribute('data-ciudad');
    var regionComuna = selectedOption.getAttribute('data-region');
    document.getElementById('idCiudad').value = ciudadComuna;
    document.getElementById('idRegion').value = regionComuna;

}

function OptionProducto() {
    var selectElement = document.getElementById('idProducto');
    var selectedOption = selectElement.options[selectElement.selectedIndex];

    var producto = selectedOption.value;
    var producto = selectedOption.getAttribute('data-producto');
    var sponsor = selectedOption.getAttribute('data-sponsor');

    document.getElementById('idServicio').value = producto;
    document.getElementById('idSponsor').value = sponsor;

}