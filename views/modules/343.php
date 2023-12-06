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
            <h1>ASISTENCIA PREVENTIVO DE SALUD</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="ms-3 card-title">ASISTENCIA PREVENTIVO DE SALUD [Código: <b>343</b>]<span> | Vigencia: 23-05-2019 A ACTUAL</span></h5>

        <p class="text-bg-warning p-3 rounded-1">MUERTE ACCIDENTAL 50 UF</p>

        <p class="text-bg-warning p-3 rounded-1">NOTA : SE EXCLUYE DE DESCUENTOS MEDICAMENTOS ONCOLOGICOS, INMUNOLOGICOS, VETERINARIOS, VACUNAS Y DE MEDICINA REPRODUCTIVO.</p>

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
                        <td></td>
                        <td>CONSULTA MEDICA INICIAL/FINAL PREVENTIVA </td>
                        <td>ATENCION INICIAL O FINAL INCLUYE : ANAMNESIS, EXÁMEN FÍSICO, CONTROL DE PRESIÓN ARTERIAL, CONTROL DE PESO, LA REALIZA UN MEDICO GENERAL , ASI MISMO PUEDE REVISAR EXAMENES QUE SE HAYA REALIZADO, PARA COMPLETAR EL DIAGNOSTICO.</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXÁMENES AUDITIVOS, OTORRINOLARINGOLOGÍA</td>
                        <td>AUDIOMETRÍA , IMPEDANCIOMETRÍA , RADIOGRAFÍA DE CAVIDADES PERINASALES</td>
                        <td class="text-center text-bg-warning">2,0 UF</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning text-center">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXÁMENES DE CARDIOLOGÍA</td>
                        <td>ELECTROCARDIOGRAMA DE REPOSO (E.C.G), PERMITE EL ESTUDIO DE ARRITMIAS Y GRAFICA LA ACTIVIDAD CARDIACA, REALIZADO POR UN ESPECIALISTA EN CARDIOLOGIA.</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning text-center">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXÁMENES DE UROLOGÍA</td>
                        <td>ANTÍGENO PROSTÁTICO (PSA) ES UN EXAMEN DE LABORATORIO QUE PERMITE OBSERVAR LOS NIVELES DE PSA EN SANGRE, SU RESULTADO FORMA PARTE DE LA PREVENCION DEL CANCER DE PROSTATA.</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning text-center">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXÁMENES DE GINECOLOGIA</td>
                        <td>PAPANICOLAU (PAP) Es un procedimiento ginecológico simple, breve y efectivo para detectar a tiempo lesiones en el cuello del útero, que son las primeras señales del cáncer. Se hace por medio de un especulo que se introduce en la vagina y se obtiene la muestra.</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning text-center">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXÁMENES DE REUMATOLOGÍA</td>
                        <td>FACTOR REUMATOIDEO, CUANDO SE PRESENTA DOLOR O HINCHAZON EN LAS ARTICULACIONES, MUSCULOS, TENDONES O HUESOS</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">2 Eventos</td>
                        <td class="text-bg-warning text-center">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ATENCIÓN NUTRICIÓN Y OBESIDAD</td>
                        <td>ATENCION PREVENTIVA SOBREPESO U OBESIDAD , LA ASISTENCIA ENTREGA UNA CONSULTA CON NUTRICIONISTA O MÉDICO NUTRIOLOGO, QUE CONTEMPLA EXÁMEN FÍSICO, PESO, TALLA, IMC, GUÍA DE ALIMENTACIÓN Y EDUCACIÓN PARA MODIFICAR HABITOS ALIMENTICIOS</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>BENEFICIOS FARMACIA SALCOBRAND</td>
                        <td>INDICANDO RUT DEL TITULAR, 25% DE DESCUENTO EN MEDICAMENTOS GENERICOS, 10% DE DESCUENTO EN MEDICAMENTOS DE MARCA, 20% DE DESCUENTO EN MEDICAMENTOS MEDIPHARM</td>
                        <td></td>
                        <td class="text-center text-bg-warning">$20.000</td>
                        <td></td>
                    </tr>



                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            });
        </script>
</main>

<?php incluirTemplate('footer'); ?>