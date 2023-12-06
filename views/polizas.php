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
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Listado Polizas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card p-3">
        <h5 class="card-title">Listado de Pólizas <span>| Today</span></h5>
        <div class="table-responsive">
            <table id="tbl" class="table table-borderless table-responsive table-hover">
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
                        echo '<td><a href="' . $url . '" class="text-center btn-ver"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-zoom">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                        </svg>
                        Ver</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</main>

<script>
$(document).ready(function() {
    var table = $('#tbl').DataTable({
        ordering: false,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
        },
        columns: [
            { searchable: true },  // Columna 0
            { searchable: false },  // Columna 1
            { searchable: true }, // Columna 2
            { searchable: false }, // Columna 3
            { searchable: false }, // Columna 4
            { searchable: false }, // Columna 5
            { searchable: false }  // Columna 6
        ]
    });
});

</script>

<?php incluirTemplate('footer'); ?>