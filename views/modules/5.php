<?php

require '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

// Obtener la URL del JSON
$url = leerJson('Poliza_5');

// Obtener el contenido JSON desde la URL
$json_data = file_get_contents($url);

// Decodificar el JSON a un array asociativo
$datos = json_decode($json_data, true);

?>
?>

<main id="main" class="main vh-100">
    <div class="pagetitle d-flex align-items-center">
        <img src="/views/assets/img/Logo_La_Polar.svg" alt="" class="w-25 me-3">
        <div class="info-header pt-3">
            <h1>Asistencia Clínica Domiciliaria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Polizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->


    <div class="card p-3 ">
        <h5 class="card-title">Listado de Pólizas <span>| Vigencia 02-02-2015 al 31-01-2016</span></h5>

        <table id="myTable" class="table table-borderless datatable w-100 table-hover">
            <thead>
                <tr>
                    <th>Beneficio</th>
                    <th>Descripción</th>
                    <th>Producto</th>
                    <th>Fecha Inicio</th>
                    <th>Aseguradora</th>
                    <th>Exclusiones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre las pólizas y mostrarlas en la tabla
                foreach ($datos as $poliza) {
                    echo '<tr>';
                    echo '<td>' . $poliza['Beneficio'] . '</td>';
                    echo '<td>' . $poliza['Descripcion'] . '</td>';
                    echo '<td>' . $poliza['Detalle'] . '</td>';
                    echo '<td>' . $poliza['MontoMaximoEvento'] . '</td>';
                    echo '<td>' . $poliza['EventosMaximos'] . '</td>';
                    echo '<td>' . $poliza['Exclusiones'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>




</main>

<?php incluirTemplate('footer'); ?>