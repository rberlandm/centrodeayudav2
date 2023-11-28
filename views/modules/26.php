<?php

require '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

// Obtener la URL del JSON
$url = leerJson('Poliza_26');

// Obtener el contenido JSON desde la URL
$json_data = file_get_contents($url);

// Decodificar el JSON a un array asociativo
$datos = json_decode($json_data, true);

?>
?>

<main id="main" class="main vh-100">
    <div class="pagetitle d-flex align-items-center">
        <img src="/views/assets/img/Logo_La_Polar.svg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>AP CLÍNICA DOMICILIARIA [Código 26]</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->


    <div class="card p-3 ">
        <h5 class="card-title">Listado de Pólizas <span>Vigencia | 20/08/2018 ACTUAL</span></h5>

        <span class="badge rounded-pill text-bg-warning p-1 mb-3">Seguro por muerte accidental por 200 UF</span>

        <div class="table-responsive">
            <table id="myTable" class="table table-borderless datatable table-hover">
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
    </div>
</main>

<?php incluirTemplate('footer'); ?>