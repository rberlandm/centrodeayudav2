<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

$datos = obtenerDatosJson('detalletipificaciones');

?>

<main id="main" class="main ">
    <div class="pagetitle">
        <h1>Apoyo Tipificaciones</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Apoyo Tipificaciones</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row fs-Poppins apoyo-tipificaciones">
        <div class="card p-2">
            <div class="text-center pt-2">
                <h2 class="titulo">Tips - Apoyo Tipificaciones</h2>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-borderless datatable  table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Consulta Externa</th>
                            <th>Consulta Interna</th>
                            <th>Pendiente Derivación</th>
                            <th>Derivación</th>
                            <th>Reagendamiento</th>
                            <th>Corte con ontacto</th>
                            <th>Corte sin contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Iterar sobre las pólizas y mostrarlas en la tabla
                        foreach ($datos as $td) {
                            echo '<tr>';
                            echo '<td>' . $td['consulta_externa'] . '</td>';
                            echo '<td>' . $td['consulta_interna'] . '</td>';
                            echo '<td>' . $td['pendiente_derivacion'] . '</td>';
                            echo '<td>' . $td['derivacion'] . '</td>';
                            echo '<td>' . $td['reagendamiento'] . '</td>';
                            echo '<td>' . $td['corte_con_contacto'] . '</td>';
                            echo '<td>' . $td['corte_sin_contacto'] . '</td>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<?php incluirTemplate('footer');

?>