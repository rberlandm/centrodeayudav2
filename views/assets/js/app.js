function nuevoRegistro() {
    var div = document.getElementById("fromNuevoRegistroDinomi");

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

let registros = obtenerRegistrosGuardados() || []; // Cargar registros almacenados en localStorage al inicio

function agregarRegistro() {
    const formulario = document.querySelector('#fromNuevoRegistro');

    if (formulario) {
        const formData = new FormData(formulario);
        const jsonData = {};

        formData.forEach((value, key) => {
            const element = formulario.querySelector(`[name="${key}"]`);

            if (!key.endsWith("_id")) {
                if (key.startsWith("id") && value instanceof FileList) {
                    jsonData[key] = Array.from(value).map(file => file.name);
                } else if (key.startsWith("id") && key.endsWith("_select")) {
                    // Utilizar una función separada para manejar campos select
                    const selectInfo = obtenerInfoSelect(key);
                    // Asegurarse de que la función devuelve un objeto
                    if (selectInfo && typeof selectInfo === 'object') {
                        Object.assign(jsonData, selectInfo);
                    }
                } else {
                    jsonData[key] = value;
                }

                // Agregar el identificador del elemento como cabecera en jsonData
                if (element) {
                    jsonData[`${key}_id`] = element.id || element.name;
                }
            }
        });

        registros.push(jsonData);
        console.log('Registro agregado:', jsonData);

        // Limpiar el formulario después de agregar un registro (opcional)
        formulario.reset();

        // Actualizar registros almacenados en localStorage
        guardarRegistros(registros);

        // Mostrar mensaje de éxito con SweetAlert2
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: 'El registro se ha agregado exitosamente.',
        });
    } else {
        console.error('Elemento con ID "fromNuevoRegistro" no encontrado.');

        // Mostrar mensaje de error con SweetAlert2
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Hubo un problema al agregar el registro.',
        });
    }
}

function descargarRegistros() {
    if (registros.length === 0) {
        console.warn('No hay registros para descargar.');
        return;
    }

    // Excluir propiedades que terminan en "_id" del CSV
    const headers = Object.keys(registros[0]).filter(header => !header.endsWith("_id"));

    // Convertir registros a formato CSV
    const csvContent = [headers.join(',')].concat(registros.map(registro => headers.map(header => registro[header]).join(','))).join('\n');

    // Crear un Blob con el contenido CSV
    const blob = new Blob([csvContent], { type: 'text/csv' });

    // Crear un enlace de descarga
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'registros.csv';

    // Agregar el enlace al DOM y simular un clic para iniciar la descarga
    document.body.appendChild(link);
    link.click();

    // Limpiar después de la descarga
    document.body.removeChild(link);
    URL.revokeObjectURL(link.href);
}

function obtenerRegistrosGuardados() {
    const registrosGuardados = localStorage.getItem('registros');
    return registrosGuardados ? JSON.parse(registrosGuardados) : null;
}

function guardarRegistros(registros) {
    localStorage.setItem('registros', JSON.stringify(registros));
}

function limpiarFormulario() {
    const formulario = document.querySelector('#fromNuevoRegistro');

    if (formulario) {
        formulario.reset();
    } else {
        console.error('Elemento con ID "fromNuevoRegistro" no encontrado.');
    }
}

function calcularEdad() {
    // Obtener la fecha de nacimiento del input
    const fechaNacimiento = document.getElementById('idFechaNacimiento').value;

    // Calcular la edad
    const edad = obtenerEdad(fechaNacimiento);

    // Actualizar el campo de edad
    document.getElementById('idEdad').value = edad;
}

function obtenerEdad(fechaNacimiento) {
    // Calcular la diferencia de tiempo entre la fecha actual y la fecha de nacimiento
    const diferenciaTiempo = Date.now() - new Date(fechaNacimiento).getTime();

    // Calcular la edad en base a la diferencia de tiempo
    const edad = new Date(diferenciaTiempo).getUTCFullYear() - 1970;

    return edad;
}