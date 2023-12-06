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
            <h1>HOSPITALIZACION PROTEGIDA (12-10-2021)</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="ms-3 card-title">HOSPITALIZACION PROTEGIDA (12-10-2021) | [Código: <b>381</b>]<span> | Vigencia: 12-10-2021 A ACTUAL</span></h5>

        <p class="text-bg-warning p-3 rounded-1">MUERTE ACCIDENTAL 200 U.F Y CUBRE FALLECIMIENTO 2,5 VECES EL MONTO DEL AVANCE XL</p>

        <p class="text-bg-warning p-3 rounded-1">Carencia: El servicio de asistencia requiere de un periodo de activación mínimo de 60 días</p>

        <p class="text-bg-success p-3 rounded-1">PARA SOLICITAR ESTE BENEFICIO DEBE LLAMAR AL 800362400 O 224293602</p>

        <p class="text-bg-danger p-3 rounded-1">PARA DAR DE BAJA EL SERVICIO DEBE LLAMAR AL 6003913000</p>

        <div class="table-responsive">
            <table id="myTable" class="table table-hover table-bordered table-light">
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
                        <td rowspan="23">HOSPITALIZACION PROTEGIDA</td>
                        <td> CONSULTA PEDIATRÍA O MEDICINA GENERAL</td>
                        <td>Coordinación Consulta Pediatría hasta los 14 años, En reemplazo de este servicio el Cliente puede solicitar la atención de Consulta de Medicina General en donde el profesional médico podrá tratar enfermedades o diagnósticos de adultos, recibir medicación, revisar exámenes para complementar diagnósticos y despejar dudas específicos, o generales del paciente,</td>
                        <td class="text-center">100%</td>
                        <td class="text-center">3 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>EXÁMENES ESPECÍFICOS</td>
                        <td class="text-bg-warning">
                            <ul>
                                <li>RADIOGRAFIA DE TÓRAX AP Y LATERAL O SIMPLE </li>
                                <li>EXAMEN DE ORINA : UROCULTIVO, RECUENTO DE COLONIA Y ANTIBIOGRAMA (para descartar infección en vías urinarias), </li>
                            </ul>
                        </td>
                        <td class="text-center">100%</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning">Debe presentar orden medica</td>
                    </tr>

                    <tr>

                        <td>MATERNIDAD Y EMBARAZO</td>
                        <td>
                            <ul>
                                <li>ECOTOMOGRAFIA OBSTETRICA</li>
                                <li>EXAMEN DE LABORATORIO VDRL</li>
                                <li>EXAMEN HIV</li>
                                <li>UROCULTIVO</li>
                                <li>RECUENTO COLONIAS Y ANTIBIOGRAMA (EXAMEN DE ORINA DETECTA SI HAY INFECCION URINARIA)</li>
                                <li>CURVA DE TOLERANCIA A LA GLUCOSA (SOLO A EMBARAZAS ENTRE LA (25 O 26 SEMANAS DE EMBARAZO)</li>
                            </ul>
                        </td>
                        <td class="text-center">100%</td>
                        <td class="text-center">1 Eventos</td>
                        <td class="text-bg-warning">INCLUYE COMPLETO EL SET DE EXAMENES</td>
                    </tr>

                    <tr>

                        <td>EXAMEN ULTRASONIDO ECOTOMOGRAFIA PELVICA MASCULINA</td>
                        <td>EXAMEN DE ECOGRAFIA PELVICA MASCULINA (<b class="text-danger">INCLUYE VEJIGA Y PROSTATA</b>) PERMITE EL ESTUDIO DE LAS VIAS URINARIAS, PROSTATA Y VESICULAS SEMINALES</td>
                        <td>Sin limite</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>EXÁMEN ULTRASONIDO ECOTOMOGRAFÍA RENAL (BILATERAL) O DE BAZO </td>
                        <td>EXAMEN QUE PERMITE EL ESTUDIO DE LA ESTRUCTURA DEL RIÑON PARA APOYO AL DIAGNOSTICO MEDICO, AYUDA EN DETECTAR VARIOS PROBLEMAS COMO CALCULOS, SEGÚN TAMAÑO , ADEMAS DE QUISTES, INFECCIONES Y MAS.</td>
                        <td>Sin limite</td>
                        <td>1</td>
                        <td class="text-bg-warning">Debe presentar orden medica</td>
                    </tr>
                    <tr>

                        <td>EXAMENES DE LABORATORIO</td>
                        <td>*HEMOGRAMA: INCLUYE VHS, *PERFIL LIPÍDICO (TRIGLICERIDOS, COLESTEROL TOTAL, HDL COLESTEROL, LDL COLESTEROL, VLDL COLESTEROL), *ORINA COMPLETA, *TOMA DE MUESTRA DE SANGRE</td>
                        <td>Sin limite</td>
                        <td>1</td>
                        <td class="text-bg-warning">Debe presentar orden medica</td>
                    </tr>

                    <tr>

                        <td rowspan="17">RADIOGRAFIAS</td>
                        <td>RADIOGRAFIA DE COLUMNA LUMBAR O LUMBOSACRA: (frontal,lateral, y focalizada 5to espacio)incluye informe radiológico</td>
                        <td rowspan="17" class="text-center">Sin limite</td>
                        <td rowspan="17" class="text-center">2 Eventos</td>
                        <td rowspan="17" class="text-bg-warning">Debe presentar orden medica</td>
                    </tr>

                    <tr>
                        <td>RADIOGRAFIA DE CAVIDADES PERINASALES : </td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE RODILLA : izquierda o derecha</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE HOMBRO : izquierda o derecha</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE FEMUR: (izq o derecho)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIERNA: (izq o derecho)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PELVIS Cadera Adulto o Pelvis Cadera Niño, para estudio de Displasia de cadera pediatrica</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE COSTILLA</td>
                    </tr>
                    <tr><td>RADIOGRAFIA DE ESTERNON FRONTAL Y LATERAL</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE MUÑECA (izq o derecho)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE MANO (izq o derecho)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIERNA (izq o derecho)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIE </td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIE (IZQ O DER) : incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE CODO (IZQ O DER) : incluye informe radiológico</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE DEDOS : incluye informe radiológico</td>
                    </tr>


                </tbody>

            </table>
        </div>
        <!--         <script>
            $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            });
        </script> -->
</main>

<?php incluirTemplate('footer'); ?>