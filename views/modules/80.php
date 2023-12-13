<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Cencosud_logo.svg/2560px-Cencosud_logo.svg.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>PREVENTIVO ONCOLÓGICO</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
        <img src="https://1000logos.net/wp-content/uploads/2020/07/BNP-Paribas-Logo-2000.png" alt="" class="img-marca ms-3">
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">PREVENTIVO ONCOLÓGICO CENCOSUD [Código - 80] <span> | </span></h5>

        <div class="table-responsive mb-3">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle text-lg-center">
                        <th>BENEFICIO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>DETALLE</th>
                        <th>MONTO MÁXIMO POR EVENTO</th>
                        <th>MÁXIMO DE EVENTOS AL AÑO</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td rowspan="5">ONCOLÓGICO MUJER</td>
                        <td>CONSULTA MÉDICA INICIAL O EVALUACIÓN DE EXÁMENES
                        </td>
                        <td>
                            <ul>
                                <li>EXAMEN FÍSICO</li>
                                <li>CONTROL PRESIÓN ARTERIAL</li>
                                <li>CONTROL DE PESO</li>
                            </ul>
                        </td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>MAMOGRAFÍA BILATERAL Y/O ECOTOMOGRAFÍA MAMARIA</td>
                        <td></td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>EXÁMENES MÉDICOS</td>
                        <td>
                            <ul>
                                <li>HEMOGRAMA VHS</li>
                                <li>PERFIL LIPÍDICO (TRIGLICERIDOS, COLESTEROL TOTAL, HDL COLESTEROL, LDL COLESTEROL, VLDL COLESTEROL) </li>
                                <li>TOMA DE MUESTRA SANGRE ADULTO Y ORINA COMPLETA. </li>
                            </ul>
                        </td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA DE EVALUACIÓN DE EXÁMENES O CONSULTA PARA MUESTRA DE EXÁMENES</td>
                        <td>MEDICO REVISA RESULTADOS DE EXÁMENES</td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>ORIENTACIÓN MEDICA TELEFÓNICA </td>
                        <td>24 HORAS 365 DÍAS DEL AÑO</td>
                        <td>COPAGO 0</td>
                        <td>ILIMITADO</td>
                    </tr>

                    <tr>
                        <td rowspan="5">ONCOLÓGICO HOMBRE</td>
                        <td>CONSULTA MEDICA INICIAL O EVALUACIÓN DE EXÁMENES</td>
                        <td>
                            <ul>
                                <li>EXAMEN FÍSICO</li>
                                <li>CONTROL PRESIÓN ARTERIAL</li>
                                <li>CONTROL DE PESO</li>
                            </ul>
                        </td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>ANTÍGENO PROSTÁTICO (PSA)</td>
                        <td></td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>EXÁMENES MÉDICOS</td>
                        <td>
                            <ul>
                                <li>HEMOGRAMA VHS</li>
                                <li>PERFIL LIPÍDICO (TRIGLICERIDOS, COLESTEROL TOTAL, HDL COLESTEROL, LDL COLESTEROL, VLDL COLESTEROL) </li>
                                <li>TOMA DE MUESTRA SANGRE ADULTO Y ORINA COMPLETA. </li>
                            </ul>
                        </td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA DE EVALUACIÓN DE EXÁMENES O CONSULTA PARA MUESTRA DE EXÁMENES</td>
                        <td>MÉDICO REVISA RESULTADOS DE EXÁMENES</td>
                        <td>COPAGO 0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>ORIENTACIÓN MEDICA TELEFÓNICA </td>
                        <td>24 HORAS 365 DÍAS DEL AÑO</td>
                        <td>COPAGO 0</td>
                        <td>ILIMITADO</td>
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