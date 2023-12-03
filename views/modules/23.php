<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">
        <img src="/views/assets/img//logo_la_polar.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1> (FULL EXAMENES) ASISTENCIA MEDICA Y ENFERMERIA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title"> (FULL EXAMENES) ASISTENCIA MEDICA Y ENFERMERIA [23] <span>| 15-06-2018 A ACTUAL</span></h5>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> S NOTA: SE DEBE ENVIAR LA ORDEN MEDICA A COORDINACIONHORASMEDICAS@ASSISTIME.CL</span></p>
        <!-- 
        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> COBERTURAS EN CASO DE URGENCIAS, DOLOR, INFECCION, INFLAMACION, SANGRAMIENTO Y FRACTURA </span></p>
 -->

        <div class="table-responsive">
            <table id="" class="table table-hover table-bordered table-light">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Monto máximo por evento</th>
                        <th scope="col">Eventos máximos por año</th>
                        <th scope="col">Observaciones y/o Exclusiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6">EXAMENES IMAGENOLOGIA RADIOGRAFIAS</td>
                        <td>RADIOGRAFIA DE RODILLA U HOMBRO </td>
                        <td>radiografia de rodilla o de Hombro incluye informe radiologico</td>
                        <td></td>
                        <td rowspan="6" class="text-center text-bg-warning">2 Eventos</td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                        <td>radiografia de brazo o antebrazo , incluye informe radiologico</td>
                        <td></td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>RADIOGRAFIA DE TORAX FRONTAL Y LATERAL</td>
                        <td>radiografia de torax frontal y lateral, incluye informe radiologico</td>
                        <td></td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>RADIOGRAFIA DE PELVIS, CADERA</td>
                        <td>radiografia de pelvis, cadera, incluye informe radiologico</td>
                        <td></td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>RADIOGRAFIA COXOFEMORAL RN Y ADULTOS</td>
                        <td>radiografia coxofemoral rn y adultos, incluye informe radiologico</td>
                        <td></td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>RADIOGRAFIA DE CAVIDADES PERINASALES</td>
                        <td>radiografia de cavidades perinasales, incluye informe radiologico</td>
                        <td></td>
                        <td>Centros medicos señalados por assisteme, cliente debe presentar orden medica</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <script>
            /*             $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            }); */
        </script>
</main>

<?php incluirTemplate('footer'); ?>