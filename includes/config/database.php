<?php
// Conexión a la base de datos
$conexion = new mysqli("nombre_del_servidor", "nombre_de_usuario", "contraseña", "nombre_de_la_base_de_datos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del cuerpo de la solicitud POST
$datos = json_decode(file_get_contents('php://input'), true);

// Procesar y guardar datos en la base de datos
// Aquí deberías realizar validaciones y sanitización de datos antes de insertarlos en la base de datos

$query = "INSERT INTO tu_tabla (columna1, columna2, ...) VALUES ('" . $datos['valor1'] . "', '" . $datos['valor2'] . "', ...)";
$resultado = $conexion->query($query);

// Verificar si la consulta fue exitosa
if ($resultado) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>