<?php

require '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

// Obtener la URL del JSON
$url = leerJson('Poliza_347');

// Obtener el contenido JSON desde la URL
$json_data = file_get_contents($url);

// Decodificar el JSON a un array asociativo
$datos = json_decode($json_data, true);

?>
?>

<main id="main" class="main vh-100">
<div class="pagetitle d-flex align-items-center">
        <img src="/views/assets/img/Logo_La_Polar.svg" alt="" class="img-marca">
        <h1>ASISTENCIA HOGAR CATASTROFICO PINTURA FACHADA Y PLOMERIA</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Polizas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card p-3 ">
        <h5 class="card-title">Listado de Pólizas <span>| Today</span></h5>
        <span class="badge text-bg-warning mb-3 p-2" style="text-transform: uppercase;"> SE DEBE LLAMAR A LOS NUMEROS 600 3003 600 o desde celulares 223512599 solicitando el servicio, indicando el rut </span>
        <table id="myTable" class="table table-borderless datatable w-100">
            <thead>
                <tr>
                <th>Beneficio</th>
                    <th>Descripción</th>
                    <th>Detalle</th>
                    <th>Monto Máximos por evento</th>
                    <th>Eventos Máximos por Año</th>
                    <th>Exclusiones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre las pólizas y mostrarlas en la tabla
                foreach ($datos as $poliza) {
                    echo '<tr>';
                    echo '<td>' . $poliza['Beneficio'] . '</td>';
                    echo '<td>' . $poliza['Descripción'] . '</td>';
                    echo '<td>' . $poliza['Detalle'] . '</td>';
                    echo '<td>' . $poliza['MaximoHrs'] . '</td>';
                    echo '<td>' . $poliza['MaximoEventos'] . '</td>';
                    echo '<td>' . $poliza['Exclusiones'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>




</main>

<?php incluirTemplate('footer'); ?>