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
            <h1> ASISTENCIA 4 ESTACIONES</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title"> ASISTENCIA 4 ESTACIONES [24] <span>| 29-06-2018 A ACTUAL</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i> NOTA: SE DEBE ENVIAR LA ORDEN MEDICA A COORDINACIONHORASMEDICAS@ASSISTIME.CL</span></p>
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
                        <td rowspan="24">Asistencia medica Protección 4 Estaciones</td>
                        <td class="text-bg-warning">Coordinación Consulta Pediatría</td>
                        <td>Coordinación Consulta Pediatría hasta los 14 años</td>
                        <td class="text-center">Sin Limite</td>
                        <td class="text-center text-bg-warning">3 Eventos</td>
                        <td>Centros médicos señalados por Assistime</td>
                    </tr>

                    <tr>
                        <td>Exámenes específicos</td>
                        <td>
                            <ul class="lsn p-0 m-0">
                                <li><i class='bx bx-chevron-right me-2'></i> RX DE TORAX AP Y LATERAL O SIMPLE</li>
                                <li><i class='bx bx-chevron-right me-2'></i> EXAMEN DE ORINA : UROCULTIVO, ANTIBIOGRAMA</li>
                            </ul>
                        </td>
                        <td class="text-center">Sin limite</td>
                        <td class="text-center">2 Eventos</td>
                        <td>Debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>Maternidad y embarazo</td>
                        <td>
                            <ul class="lsn p-0 m-0">
                                <li><i class='bx bx-chevron-right me-2'></i>ECOTOMOGRAFIA OBSTETRICA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>EXAMEN DE LABORATORIO VLRL</li>
                                <li><i class='bx bx-chevron-right me-2'></i>EXAMEN HIV</li>
                                <li><i class='bx bx-chevron-right me-2'></i>UROCULTIVO : RECUENTO DE COLONIA Y ANTIBIOGRAMA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>CURVA DE TOLERANCIA A LA GLUCOSA</li>
                            </ul>
                        </td>
                        <td class="text-center">Sin Limite</td>
                        <td class="text-center">1 Evento</td>
                        <td>Debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td class="text-bg-warning">RADIOGRAFIA DE TORAX FRONTAL Y LATERAL</td>
                        <td>radiografía de tórax frontal y lateral, incluye informe radiológico</td>
                        <td rowspan="18" class="text-center">Sin Limite</td>
                        <td rowspan="18" class="text-center">2 Eventos del examen solicitado</td>
                        <td rowspan="18" class="text-center">Debe presentar orden medica</td>
                    </tr>
                    <tr>
                        <td class="text-bg-warning">RADIOGRAFIA DE COLUMNA LUMBAR</td>
                        <td>radiografía de columna lumbar, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA LUMBOSACRA</td>
                        <td>radiografía lumbosacra, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE CAVIDADES PERINASALES</td>
                        <td>radiografía de cavidades perinasales, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE PELVIS</td>
                        <td>radiografía de pelvis, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE CADERA</td>
                        <td>radiografía de cadera, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA COXOFEMORAL (ADULTOS Y NIÑOS)</td>
                        <td>radiografía coxofemoral, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE RODILLA U HOMBRO</td>
                        <td>radiografía de rodilla, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE FEMUR</td>
                        <td>radiografía de fémur, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE PIERNA</td>
                        <td>radiografía de pierna, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE PIE</td>
                        <td>radiografía de pie, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE COSTILLA</td>
                        <td>radiografía de costilla, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE ESTERNON FRONTAL Y LATERAL</td>
                        <td>radiografía de esternón frontal y lateral, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                        <td>radiografía de brazo, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE MUÑECA</td>
                        <td>radiografía de muñeca, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE MANO</td>
                        <td>radiografía de mano, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE CODO</td>
                        <td>radiografía de codo, incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td class='text-bg-warning'>RADIOGRAFIA DE DEDOS</td>
                        <td>radiografía de dedos, incluye informe radiológico</td>
                    </tr>

                    <tr>
                        <td class='text-bg-info'>EXAMEN ULTRASONIDO: ECOTOMOGRAFIA PELVICA MASCULINA</td>
                        <td>Examen ecógrafo que permite el estudio de las vías urinarias. La próstata y vesículas seminales</td>
                        <td class="text-center">Sin limite</td>
                        <td class="text-center">3 Eventos</td>
                        <td>Debe presentar orden medica</td>
                    </tr>
                    <tr>
                        <td class='text-bg-info'>EXAMEN ULTRASONIDO: ECOTOMOGRAFIA RENAL (BILATERAL) O DE BAZO</td>
                        <td>Examen que permite el estudio del riñón y bazo</td>
                        <td class="text-center">Sin limite</td>
                        <td class="text-center">3 Eventos</td>
                        <td>Debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>EXAMENES DE LABORATORIO</td>
                        <td class='text-bg-warning'>
                            <ul class="lsn m-0 p-0">
                                <li><i class='bx bx-chevron-right'></i><b>HEMOGRAMA:</b> Incluye VH</li>
                                <li><i class='bx bx-chevron-right'></i><b>PERFIL LIPIDICO:</b> (TRIGLICERIDOS, COLESTEROL TOTAL, HDL COLESTEROL, LDL COLESTEROL, VLDL COLESTEROL)</li>
                                <li><i class='bx bx-chevron-right'></i><b>GRUPO RH</b></li>
                                <li><i class='bx bx-chevron-right'></i><b>GONADOTROFINA CORIONICA SUB UNIDAD BETA:</b> Detecta embarazo</li>
                                <li><i class='bx bx-chevron-right'></i><b>ORINA COMPLETA</b></li>
                                <li><i class='bx bx-chevron-right'></i><b>TOMA DE MUESTRA DE SANGRE</b></li>
                            </ul>
                        </td>
                        <td class="text-center">Sin limite</td>
                        <td class="text-center">3 Eventos</td>
                        <td>Debe presentar orden medica</td>
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