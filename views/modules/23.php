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

                    <tr>
                        <td rowspan="2">EXAMENES ULTRASONIDO ECOTOMOGRAFIAS</td>
                        <td>ECOGRAFIA PELVICA MASCULINA</td>
                        <td>
                            <p>Incluye (vejiga y prostata).</p>
                            <p>Examen ecógrafo que permite el estudio de las vías urinarias.</p>
                            <p>La próstata y vesículas seminales, incluye informe medico especialista</p>
                        </td>
                        <td></td>
                        <td rowspan="2" class="text-bg-warning text-center">2 Eventos</td>
                        <td>Para procedimientos especiales cliente debe contar con la orden médica que indica al personal de enfermería el medicamento y dosis, contando con la autorización debida</td>
                    </tr>


                    <tr>

                        <td>ECOTOMOGRAFIA GINECOLOGICA U OBSTETRICA</td>
                        <td>
                            <p>La ecotomografía ginecológica se realiza para el estudio del sistema reproductivo femenino, (útero, ovarios, trompas de Falopio).</p>
                            <p>La ecotomografía obstétrica se realiza para el seguimiento del embarazo</p>
                        </td>
                        <td></td>
                        <td>Centros médicos señalados por Assistime, cliente debe presentar orden medica/td>
                    </tr>
                    <tr>
                        <td>SERVICIOS DE PROCEDIMIENTO ENFERMERIA A DOMICILIO</td>
                        <td class="text-bg-warning font-bold">Servicios procedimientos Enfermería a domicilio </td>
                        <td>Se realizan procedimientos de enfermería a domicilio de enfermería como son: aplicación de inyección intramuscular e intravenosa, colocación de suero, seguimiento de paciente hipertenso, curaciones, asistencia en tratamientos indicados por médicos de cabecera, instrucción de pautas de acompañamiento según diagnostico del paciente, toma de hemoglucotest, extracción de puntos de cirugías menores</td>
                        <td></td>
                        <td class="text-center text-bg-warning">2 Eventos</td>
                        <td>Para procedimientos especiales cliente debe contar con la orden médica que indica al personal de enfermería el medicamento y dosis, contando con la autorización debida.</td>
                    </tr>
                    <tr>
                        <td rowspan="6">EXÁMENES DE LABORATORIO</td>
                        <td>HEMOGRAMA</td>
                        <td>
                            <ul class="m-0 p-0 lsn">
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>Recuento de leucositos</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>heritrocitos</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>hematocritos</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>formula leococitaria</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>hemoglobina</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>toma de muestra en sangre</li>
                            </ul>
                        </td>
                        <td></td>
                        <td rowspan="6" class="text-bg-warning text-center">2 Eventos</td>
                        <td rowspan="6">Cliente debe presentar ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>PERFIL LIPIDICO</td>
                        <td class="text-bg-warning">
                            <ul class="m-0 p-0 lsn">
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>Trigliceridos</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>Colesterol</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>Total</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>HDL</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>LDL</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>VLDL</li>
                                <li class="d-flex align-items-center"><i class='bx bx-chevron-right me-2'></i>Muestra de sangre</li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GLICEMIA</td>
                        <td>Toma de muestra en sangre (Mide la Glucosa en Sangre)</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>GRUPO RH</td>
                        <td>Permite ver la clasificacion sanguinia de cada persona</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GONADOTROFINA CORIONICA</td>
                        <td>Detecta existencia de Embarazo. Presencia de hormona  HCG</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>ORINA COMPLETA</td>
                        <td></td>
                        <td></td>
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