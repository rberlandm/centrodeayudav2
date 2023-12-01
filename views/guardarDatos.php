<?php
// guardarDatos.php

// Recibir datos del formulario
$ejecutivo = $_POST['ejecutivo'];
$fecha_gestion = $_POST['fecha_gestion'];
$hora_gestion = $_POST['hora_gestion'];
$rut_titular = $_POST['rut_titular'];
$nombre_titular = $_POST['nombre_titular'];

$orden = $_POST['orden'];
$rut_paciente = $_POST['rut_paciente'];
$nombre_paciente = $_POST['nombre_paciente'];
$edad = $_POST['edad'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$prevision = $_POST['prevision'];

$direccion = $_POST['direccion'];
$comuna = $_POST['comuna'];
$ciudad = $_POST['ciudad'];
$region = $_POST['region'];

$fono = $_POST['fono'];
$fono_dos = $_POST['fono_dos'];
$fono_tres = $_POST['fono_tres'];
$email = $_POST['email'];

$producto= $_POST['producto'];
$servicio= $_POST['servicio'];
$sponsor= $_POST['sponsor'];

$fecha_contratacion= $_POST['fecha_contratacion'];
$status_calidad= $_POST['status_calidad'];
$tipo_alerta= $_POST['tipo_alerta'];
$validacion_cobertura= $_POST['validacion_cobertura'];

$tipo_atencion= $_POST['tipo_atencion'];
$descripcion_atencion= $_POST['descripcion_atencion'];
$observacion= $_POST['observacion'];


$fechaObj = strtotime($fecha_gestion);

$mes = date('m', $fechaObj);

$año = date('Y', $fechaObj);


// Conectar a la base de datos (asegúrate de poner tus propias credenciales)
$conexion = new mysqli('localhost', 'root', 'root', 'centro_de_ayuda');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Insertar datos en la base de datos
$sql = "INSERT INTO registros (ejecutivo, fecha_gestion, mes_gestion, year_gestion, hora_gestion,  rut_titular, nombre_titular, orden, rut_paciente, nombre_paciente, edad, fecha_nacimiento, prevision, direccion, comuna, ciudad, region, fono, fono_dos, fono_tres, email, producto, servicio, sponsor, fecha_contratacion, status_calidad, tipo_alerta, validacion_cobertura, tipo_atencion, descripcion_atencion, observacion) VALUES ('$ejecutivo', '$fecha_gestion', '$mes', '$año', '$hora_gestion','$rut_titular','$nombre_titular','$orden', '$rut_paciente','$nombre_paciente', '$edad', '$fecha_nacimiento','$prevision', '$direccion', '$comuna', '$ciudad ', '$region', '$fono', '$fono_dos', '$fono_tres', '$email', '$producto', '$servicio', '$sponsor', '$fecha_contratacion', '$status_calidad', '$tipo_alerta', '$validacion_cobertura', '$tipo_atencion', '$descripcion_atencion', '$observacion')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();

?>
