<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Bci_Logotype.svg/1024px-Bci_Logotype.svg.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>ACCIDENTES PERSONALES AP_2.0 Y HOSPITALARIO</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SALUD AP 2.0 HOSPITALARIO [Código - 77] <span> | </span></h5>

        <div class="table-responsive mb-3">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th>Beneficio</th>
                        <th>Descripción</th>
                        <th>Detalle</th>
                        <th>Monto máximo por evento</th>
                        <th>Máximo de eventos al año</th>
                        <th>Exclusiones restricciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td rowspan="4">SALUD AP 2,0 HOSPITALARIO</td>
                        <td>Consulta medica general o primera consulta</td>
                        <td>Medico entrega orden de exámenes</td>
                        <td>100%</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Consulta medica general o segunda consulta</td>
                        <td>Medico revisa resultados de exámenes</td>
                        <td>100%</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE TORAX SIMPLE</td>
                        <td>Relacionado con enfermedades respiratorias, incluye informe radiológico</td>
                        <td rowspan="2">100%</td>
                        <td rowspan="2">1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PELVIS CADERA</td>
                        <td>Incluye informe radiológico</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>

    <script>
        new DataTable('#ffaa');
    </script>
</main>



<?php incluirTemplate('footer'); ?>