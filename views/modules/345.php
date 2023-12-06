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
            <h1>DOCTOR DIGITAL </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">DOCTOR DIGITAL [Código: <b>347</b>]<span> | Vigencia: 05-11-2019 A 2020</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i>EL MAXIMO DE BENEFICIARIOS ES UN TOTAL DE 4 PERSONAS (TITULAR+3)</span></p>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i>RENUNCIA Y RETRACTACIÓN: <br>Para tales efectos deberá realizar el procedimiento de inhabilitación o desactivación en la App “ASISTENCIA DOCTOR DIGITAL” desde el menú “cuenta” y seleccionando la opción “deshabilitar”. De este modo el servicio quedará inactivo en 24 horas.</span></p>


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
                        <td rowspan="3">DOCTOR DIGITAL </td>
                        <td rowspan="3">Descargar Apliación ( Dr. Digtal) al solicitar la atencion el medico debe ingresar las cargas en el sistema</td>
                        <td>Atención de <b class="fs-5">Medicina General</b> en modalidad Teleconsulta Médica o Video Consulta.</td>
                        <td class="text-center">100%</td>
                        <td rowspan="3"></td>
                        <td rowspan="3" class="text-bg-warning">EN DOCTOR DIGITAL: 
                            <ul>
                                <li><b>CONSULTA DE PSICOLOGIA Y DE NUTRICION:</b> SE SOLICITA A RESCARE POR MEDIO DE CORREO</li>
                                <li><b>MEDICINA GENERAL</b> LA SOLICITAN POR LA APP</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Revisión de exámenes médicos preexistentes o derivados del servicio</td>
                        <td class="text-center">100%</td>
                    </tr>

                    <tr>
                        <td>Envío de los siguientes documentos clínicos al correo electrónico del paciente, según cada caso:
                            <ul>
                                <li>Receta médica </li>
                                <li>Ordenes médicas para exámenes para complementar diagnóstico o según lo requiera el tratamiento</li>
                                <li>Derivación a especialistas u otros profesionales médicos.</li>
                                <li>Certificado de salud laboral</li>
                                <li>Certificado de salud escolar</li>
                                <li>Indicaciones no farmacológicas necesarias para despejar dudas.</li>
                            </ul>
                        </td>
                        <td class="text-center">100%</td>
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