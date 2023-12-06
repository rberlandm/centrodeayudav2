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
            <h1>ASISTENCIA FULL PREVENCIÓN ONCOLOGICO CARDIF</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">ASISTENCIA FULL PREVENCIÓN ONCOLOGICO CARDIF [Código: <b>4</b>]<span>| 12-02-2018 A ACTUAL</span></h5>

        <!--         <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i> NOTA: SE DEBE ENVIAR LA ORDEN MEDICA A COORDINACIONHORASMEDICAS@ASSISTIME.CL</span></p> -->
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
                        <td rowspan="3">Oncológico mujer</td>
                        <td>Consulta medica inicial o evaluacion de examenes</td>
                        <td>
                            <ul class="lsn m-0 p-0">
                                <li><i class='bx bx-chevron-right me-2'></i>Anamnesis</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Examen físico</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Control presión arterial</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Control de peso</li>
                            </ul>
                        </td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-bg-warning font-bold">Mamografía y /o Eco tomografía mamaria</td>
                        <td></td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Exámenes médicos</td>
                        <td class="text-bg-warning font-bold">
                            <ul class="lsn m-0 p-0">
                                <li><i class='bx bx-chevron-right me-2'></i>HEMOGRAMA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>ORINA COMPLETA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>PERFIL LIPIDICO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>TRIGLICERIDOS</li>
                                <li><i class='bx bx-chevron-right me-2'></i>COLESTERO TOTAL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>HDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>LDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>COLESTEROL TOTAL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>INDICE VLDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>TOMA DE MUESTRA DE SANGRE</li>
                            </ul>
                        </td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="3">Oncológico hombre</td>
                        <td>Consulta medica inicial o evaluacion de examenes</td>
                        <td>
                            <ul class="lsn m-0 p-0">
                                <li><i class='bx bx-chevron-right me-2'></i>Anamnesis</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Examen físico</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Control presión arterial</li>
                                <li><i class='bx bx-chevron-right me-2'></i>Control de peso</li>
                            </ul>
                        </td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-bg-warning font-bold">Antígeno Prostático</td>
                        <td></td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Exámenes médicos</td>
                        <td class="text-bg-warning font-bold">
                            <ul class="lsn m-0 p-0">
                                <li><i class='bx bx-chevron-right me-2'></i>HEMOGRAMA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>ORINA COMPLETA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>PERFIL LIPIDICO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>TRIGLICERIDOS</li>
                                <li><i class='bx bx-chevron-right me-2'></i>COLESTERO TOTAL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>HDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>LDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>COLESTEROL TOTAL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>INDICE VLDL COLESTEROL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>TOMA DE MUESTRA DE SANGRE</li>
                            </ul>
                        </td>
                        <td class="text-center">Copago $0</td>
                        <td class="text-center">1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Orientación medica telefónica</td>
                        <td class="text-bg-warning font-bold">Orientación medica telefónica</td>
                        <td></td>
                        <td>Sin Limite</td>
                        <td>Sin Limite</td>
                        <td>No cubre gastos médicos</td>
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