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
