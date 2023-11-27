<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');


// Obtener la URL del JSON
$url = leerJson('menupolizas');

// Obtener el contenido JSON desde la URL
$json_data = file_get_contents($url);

// Decodificar el JSON a un array asociativo
$datos = json_decode($json_data, true);

?>

<main id="main" class="main vh-100">
    <div class="pagetitle">
        <h1>Polizas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Listado Polizas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card p-3">
        <h5 class="card-title">Listado de Pólizas <span>| Today</span></h5>

        <table id="myTable" class="table table-borderless datatable w-100 table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Sponsor</th>
                    <th>Producto</th>
                    <th>Fecha Inicio</th>
                    <th>Aseguradora</th>
                    <th>Observación</th>
                    <th>Revisar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Iterar sobre las pólizas y mostrarlas en la tabla
                foreach ($datos as $poliza) {
                    echo '<tr>';
                    echo '<td>' . $poliza['codigo'] . '</td>';
                    echo '<td>' . $poliza['sponsor'] . '</td>';
                    echo '<td>' . $poliza['Producto'] . '</td>';
                    echo '<td>' . date('Y-m-d', strtotime($poliza['Fecha_Inicio'])) . '</td>';
                    echo '<td>' . $poliza['Aseguradora'] . '</td>';
                    $observacion = trim($poliza['observacion']);
                    $badgeClass = '';

                    if ($observacion === 'SE VENDE') {
                        $badgeClass = 'badge bg-success';
                    } elseif ($observacion === 'NO SE VENDE') {
                        $badgeClass = 'badge bg-danger';
                    } else {
                        $badgeClass = 'badge bg-warning';
                    }

                    echo '<td><span class="' . $badgeClass . '">' . $observacion . '</span></td>';

                    $url = '/views/modules/' . urlencode(trim($poliza['codigo'])) . '.php';
                    echo '<td class="text-center"><a href="' . $url . '">Ver</a></td>';
                    

                    echo '</tr>';

                    
                }
                ?>
            </tbody>
        </table>
    </div>



<?php incluirTemplate('footer'); ?>