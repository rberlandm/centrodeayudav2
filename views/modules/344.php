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
            <h1>SEGURO DE MUERTE ACCIDENTAL + PROGRAMA DE AGENDAMIENTO CONSULTAS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="ms-3 card-title">SEGURO DE MUERTE ACCIDENTAL + PROGRAMA DE AGENDAMIENTO CONSULTAS[Código: <b>344</b>]<span> | Vigencia: 01-02-2016 A ACTUAL</span></h5>

        <p class="text-bg-warning p-3 rounded-1">SEGURO POR MUERTE ACCIDENTAL 100 U.F</p>

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
                        <td rowspan="4">CONSULTAS MEDICAS</td>
                        <td>MEDICINA GENERAL</td>
                        <td>Incluye:
                            <ul>
                                <li>Anamnesis</li>
                                <li>Estado general de salud</li>
                                <li>Revisión de antecedentes familiares</li>
                                <li>Consulta de interés especifico del cliente</li>
                                <li>Derivación a especialista si fuese necesario</li>
                            </ul>
                        </td>
                        <td class="text-center">Ilimitado</td>
                        <td class="text-center">3 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>PEDIÁTRIA O MEDICINA GENERAL INFANTIL</td>
                        <td>Especialista capacitado para diagnosticar y manejar diversas patologías desde el nacimiento <b>hasta los 14 años.</b></td>
                        <td class="text-center">Ilimitado</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>TRAUMATOLOGICA Y ORTOPEDIA </td>
                        <td class="font-bold text-bg-warning">ES UN ESPECIALISTA DEDICADO AL ESTUDIO Y TRATAMIENTO DE LESIONES O TRAUMATISMOS EN EXTREMIDADES O COLUMNA Y SUS CONCECUENCIAS COMO FRACTURAS OSEAS, LUXACIONES ESQUINCES Y CONTUSIONES</td>
                        <td class="text-center">Ilimitado</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>GINECOLOGIA Y OBSTETRICIA</td>
                        <td>EL ESPECIALISTA ESTA CAPACITADO PARA DIAGNOSTICAR Y MANEJAR PATOLOGIAS PROPIAS DE LA ESPECIALIDAD</td>
                        <td class="text-center">Ilimitado</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>EXAMEN DE LABORATORIO CLINICO</td>
                        <td>EXAMENES DE LABORATORIO</td>
                        <td>SANGRE, ORINA</td>
                        <td class="text-center text-bg-warning">1,5 Uf</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning"> Orden Medica</td>
                    </tr>

                    <tr>
                        <td>EXAMENES DE RADIOGRAFIAS GENERALES</td>
                        <td>RADIOGRAFIAS</td>
                        <td>Correspondientes a extremidades superiore o inferiores:
                            <ul class="p-0 m-0 lsn font-bold">
                                <li><i class='bx bx-chevron-right me-2'></i>HOMBRO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>BRAZO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>ANTEBRAZO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>CODO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>RODILLA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>FEMUR</li>
                                <li><i class='bx bx-chevron-right me-2'></i>PIE</li>
                                <li><i class='bx bx-chevron-right me-2'></i>MUÑECA</li>
                                <li><i class='bx bx-chevron-right me-2'></i>MANO</li>
                                <li><i class='bx bx-chevron-right me-2'></i>TORAX SIMPLE O TORAX AP (Anteroposterior) Y LATERAL</li>
                                <li>CAVIDADES PERINASALES</li>
                            </ul>
                            <p><span class="font-bold text-bg-warning">Nota: No incluye proyecciones complementarias o especiales adicionales que pueda solicitar aparte el medico.</span></p>
                        </td>
                        <td class="text-center text-bg-warning">1,5 Uf</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning"> Orden Medica</td>
                    </tr>

                    <tr>
                        <td rowspan="2">RADIOGRAFIA DENTALES</td>
                        <td>RETROALVEOLARES</td>
                        <td>
                            <p>Las técnicas de <b class="fs-5">Radiografía</b> intrabucal <b class="fs-5">periapical</b>, también denominadas <b class="fs-5">retroalveolares o retrodentarias.</b></p>
                            <p class="text-danger font-bold">Sirven para explorar 1 O 2 dientes en su totalidad, corona hasta el ápice, el espacio periodontal y el tejido óseo que lo rodea.</p>
                        </td>
                        <td rowspan="2" class="text-center">Ilimitado</td>
                        <td rowspan="2" class="text-center"  >4 Eventos</td>
                        <td rowspan="2">Orden Medica</td>
                    </tr>

                    <tr>
                        <td>BITEWING</td>
                        <td>Estudio radiográfico de piezas posteriores. Se conoce como la radiografía de aleta de mordida, ya que para tomarla, el paciente debe morder un cartón. Generalmente consiste en cuatro radiografías que se colocan cerca de sus molares.</td>
                    </tr>

                    <tr>
                        <td>ORIENTACION MEDICA</td>
                        <td>ORIENTACION MEDICA DE SALUD O ENFERMERIA VIA TELEFONICA </td>
                        <td>(24 horas 365 dias del año) Para el titular y su grupo familiar, para que puedan despejar dudas y resolver sus consultas  </td>
                        <td></td>
                        <td class="text-center">Sin Limite</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="3">BENEFICIO DE FARMACIAS SALCOBRAND</td>
                        <td rowspan="3">LOS BENEFICIARIOS DEL PROGRAMA PREVENTIVO DE SALUD INDICANDO EL RUT  RECIBIRAN UN DESCUENTO </td>
                        <td class=" text-bg-warning font-bold">25 % MEDICAMENTOS GENERICOS      </td>
                        <td rowspan="3" class="text-center">$20.000</td>
                        <td rowspan="3"></td>
                        <td rowspan="3">SE EXCLUYE DE DESCUENTO MEDICAMENTOS ONCOLOGICOS, INMUNOLOGICOS, VETERINARIOS, VACUNAS Y MEDICINA REPRODUCTIVA</td>
                    </tr>

                    <tr>
                        <td class=" text-bg-warning font-bold">10 % MEDICAMENTO DE MARCA</td>
                    </tr>

                    <tr>
                        <td class=" text-bg-warning font-bold">20% MEDICAMENTOS MEDIPHARM</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            /*  $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            });  */
        </script>
</main>

<?php incluirTemplate('footer'); ?>