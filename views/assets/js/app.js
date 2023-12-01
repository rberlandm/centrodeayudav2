function nuevoRegistro() {
    var div = document.getElementById("fromNuevoRegistroDinomi");

    var inputFecha = document.getElementById("fecha_gestion");
    var inputHora = document.getElementById("hora_gestion");

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

function scriptComuna() {
    var selectElement = document.getElementById('comuna');
    var selectedOption = selectElement.options[selectElement.selectedIndex];

    var id = selectedOption.value;
    var comuna = selectedOption.getAttribute('data-comuna');
    var ciudad = selectedOption.getAttribute('data-ciudad');
    var region = selectedOption.getAttribute('data-region');
    document.getElementById('ciudad').value = ciudad;
    document.getElementById('region').value = region;

}

function ScriptProducto() {
    var selectElement = document.getElementById('producto');
    var selectedOption = selectElement.options[selectElement.selectedIndex];

    var producto = selectedOption.value;
    var producto = selectedOption.getAttribute('data-producto');
    var sponsor = selectedOption.getAttribute('data-sponsor');

    document.getElementById('servicio').value = producto;
    document.getElementById('sponsor').value = sponsor;

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
    const fechaNacimiento = document.getElementById('fecha_nacimiento').value;

    // Calcular la edad
    const edad = obtenerEdad(fechaNacimiento);

    // Actualizar el campo de edad
    document.getElementById('edad').value = edad;
}

function obtenerEdad(fechaNacimiento) {
    // Calcular la diferencia de tiempo entre la fecha actual y la fecha de nacimiento
    const diferenciaTiempo = Date.now() - new Date(fechaNacimiento).getTime();

    // Calcular la edad en base a la diferencia de tiempo
    const edad = new Date(diferenciaTiempo).getUTCFullYear() - 1970;

    return edad;
}


// guardarDatos.js
function guardarInformacion() {
    // Obtener datos del formulario
    var ejecutivo = document.getElementById('ejecutivo').value;
    var fecha_gestion = document.getElementById('fecha_gestion').value;
    var hora_gestion = document.getElementById('hora_gestion').value;
    var rut_titular = document.getElementById('rut_titular').value;
    var nombre_titular = document.getElementById('nombre_titular').value;
    var orden = document.getElementById('orden').value;
    var rut_paciente = document.getElementById('rut_paciente').value;
    var nombre_paciente = document.getElementById('nombre_paciente').value;
    var edad = document.getElementById('edad').value;
    var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;
    var prevision = document.getElementById('prevision').value;
    var direccion = document.getElementById('direccion').value;
    var comuna = document.getElementById('comuna').value;
    var ciudad = document.getElementById('ciudad').value;
    var region = document.getElementById('region').value;

    var fono = document.getElementById('fono').value;
    var fono_dos = document.getElementById('fono_dos').value;
    var fono_tres = document.getElementById('fono_tres').value;
    var email = document.getElementById('email').value;

    var producto = document.getElementById('producto').value;
    var servicio = document.getElementById('servicio').value;
    var sponsor = document.getElementById('sponsor').value;

    var fecha_contratacion = document.getElementById('fecha_contratacion').value;
    var status_calidad = document.getElementById('status_calidad').value;
    var tipo_alerta = document.getElementById('tipo_alerta').value;
    var validacion_cobertura = document.getElementById('validacion_cobertura').value;

    var tipo_atencion = document.getElementById('tipo_atencion').value;
    var descripcion_atencion = document.getElementById('descripcion_atencion').value;
    var observacion = document.getElementById('observacion').value;

    // Crear un objeto FormData para enviar los datos al servidor
    var formData = new FormData();
    formData.append('ejecutivo', ejecutivo);
    formData.append('fecha_gestion', fecha_gestion);

    formData.append('hora_gestion', hora_gestion);
    formData.append('rut_titular', rut_titular);
    formData.append('nombre_titular', nombre_titular);
    formData.append('orden', orden);
    formData.append('rut_paciente', rut_paciente);
    formData.append('nombre_paciente', nombre_paciente);
    formData.append('edad', edad);
    formData.append('fecha_nacimiento', fecha_nacimiento);
    formData.append('prevision', prevision);
    formData.append('direccion', direccion);
    formData.append('comuna', comuna);
    formData.append('ciudad', ciudad);
    formData.append('region', region);

    formData.append('fono', fono);
    formData.append('fono_dos', fono_dos);
    formData.append('fono_tres', fono_tres);
    formData.append('email', email);

    formData.append('producto', producto);
    formData.append('servicio', servicio);
    formData.append('sponsor', sponsor);

    formData.append('fecha_contratacion', fecha_contratacion);
    formData.append('status_calidad', status_calidad);
    formData.append('tipo_alerta', tipo_alerta);
    formData.append('validacion_cobertura', validacion_cobertura);

    formData.append('tipo_atencion', tipo_atencion);
    formData.append('descripcion_atencion', descripcion_atencion);
    formData.append('observacion', observacion);



    // Enviar datos a PHP usando XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'guardarDatos.php', true);
/* 
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Manejar la respuesta del servidor (si es necesario)
            console.log(xhr.responseText);
        }
    };
 */

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Manejar la respuesta del servidor
                Swal.fire({
                    title: "Excelente",
                    text: "Se ha guardo exitosamente el archivo",
                    icon: "success"
                });

                // Restablecer el formulario después de mostrar SweetAlert
                limpiarFormulario();
            } else {
                Swal.fire({
                    title: "Oops..",
                    text: "Tuvimos problemas al guardar el registro",
                    icon: "error"
                });
            }
        }
    };

    // Enviar el formulario al servidor
    xhr.send(formData);
}

