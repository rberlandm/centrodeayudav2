<?php
require 'app.php';
function incluirTemplate($nombre, $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}


function leerJson($nombreJson)
{
    // Lógica para obtener la URL del JSON según el nombre proporcionado
    // Puedes ajustar esta lógica según tus necesidades
    return DATABASE_URL . "/" . $nombreJson . '.json';
}

function obtenerDatosJson($nombreJson)
{
    $url = leerJson($nombreJson);
    $json_data = file_get_contents($url);
    return json_decode($json_data, true);
}

function obtenerTabla()
{
    // Conectar a la base de datos (asegúrate de poner tus propias credenciales)
    $conexion = new mysqli('localhost', 'root', 'root', 'centro_de_ayuda');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    /* $sql = "SELECT * FROM registros"; */
    $sql="SELECT * FROM registros WHERE STR_TO_DATE(fecha_gestion, '%d-%m-%Y') = CURDATE() ORDER BY CONVERT(hora_gestion, TIME) desc ;
    
    ";
    $resultado = $conexion->query($sql);

    if ($resultado) {
        // Comprobar si hay al menos una fila
        if ($resultado->num_rows > 0) {
            // Crear un array para almacenar los resultados
            $datos = array();

            // Iterar sobre las filas y agregarlas al array
            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }

            // Cerrar el resultado
            $resultado->close();

            // Cerrar la conexión
            $conexion->close();

            // Devolver los datos
            return $datos;
        } else {
            // No hay resultados
            echo "No se encontraron registros.";
        }
    } else {
        // Error en la consulta
        echo "Error al obtener datos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}

function ejecutarProcedimiento($nombreProcedimiento)
{
    // Conectar a la base de datos (asegúrate de poner tus propias credenciales)
    $conexion = new mysqli('localhost', 'root', 'root', 'centro_de_ayuda');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Crear la consulta para ejecutar el procedimiento almacenado
    $sql = "CALL $nombreProcedimiento()";

    // Ejecutar la consulta
    $resultado = $conexion->query($sql);

    if ($resultado) {
        // Comprobar si hay al menos una fila
        if ($resultado->num_rows > 0) {
            // Crear un array para almacenar los resultados
            $datos = array();

            // Iterar sobre las filas y agregarlas al array
            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }

            // Cerrar el resultado
            $resultado->close();

            // Cerrar la conexión
            $conexion->close();

            // Devolver los datos
            return $datos;
        } else {
            // No hay resultados
            echo "No se encontraron registros.";
        }
    } else {
        // Error en la consulta
        echo "Error al obtener datos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}


function convertirAJSON($resultados, $x, $y) {
    $dataPoints = array();

    foreach ($resultados as $fila) {
        $dataPoints[] = array(
            'x' => $fila[$x],
            'y' => $fila[$y]
        );
    }
    return $dataPoints;
}