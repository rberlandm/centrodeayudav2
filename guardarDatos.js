// guardarDatos.js
function guardarInformacion() {
    // Obtener datos del formulario
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;

    // Crear un objeto FormData para enviar los datos al servidor
    var formData = new FormData();
    formData.append('nombre', nombre);
    formData.append('apellido', apellido);

    // Enviar datos a PHP usando XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'guardarDatos.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Manejar la respuesta del servidor (si es necesario)
            console.log(xhr.responseText);
        }
    };

    // Enviar el formulario al servidor
    xhr.send(formData);
}
