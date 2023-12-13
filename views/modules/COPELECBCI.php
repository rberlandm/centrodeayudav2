<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://i.ytimg.com/vi/3KxWTZXj37o/maxresdefault.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>SALUD TOTAL COPELEC</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SALUD TOTAL [Código -] <span> | </span></h5>

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

                <tr>
                    <td>CONSULTA MEDICA INICIAL</td>
                    <td>MEDICINA GENERAL </td>
                    <td>En esta atencion el medico emitira orden medica respectiva para la realizacion de exmanes, si el paciente lo requiere</td>
                    <td>100% de copago</td>
                    <td>1 Evento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>CONSULTA MEDICA </td>
                    <td>MEDICINA GENERAL O REVICION DE EXAMENES</td>
                    <td>El paciente se podra controlar, despejar dudas, acerca de la realizacion y resultados de los examenes</td>
                    <td>100% de copago</td>
                    <td>1 Evento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>CONSULTA MEDICA DE ESPECIALIDAD</td>
                    <td>SOLO SE DA EN EL CASO QUE EL MEDICO DE LA CONSULTA INICIAL O DE EVALUACION DE EXMENES, HAYA DERIVADO CON UN ESPECIALISTA </td>
                    <td>
                        <ul>
                            <li>TRAUMATOLOGIA Y ORTOPEDIA</li>
                            <li>GINECOLOGIA Y OBSTETRICIA</li>
                            <li>OFTALMOLOGIA</li>
                            <li>MEDICINA INTERNA O FAMILIAR</li>
                            <li>PEDIATRIA</li>
                            <li>GASTROENTEROLOGIA O CARDIOLOGIA</li>
                        </ul>
                    </td>
                    <td>100% de copago</td>
                    <td>1 Evento</td>
                    <td></td>
                </tr>


                <tr>
                    <td rowspan="5">EXAMENES DE LABORATORIO</td>
                    <td>HEMOGRAMA </td>
                    <td></td>
                    <td rowspan="5">100% de copago</td>
                    <td rowspan="5">1 Evento</td>
                    <td rowspan="5"></td>
                </tr>

                <tr>
                    <td>PERFIL BIOQUIMICO</td>
                    <td>
                        <ul>
                            <li>GLUCOSA EN SANGRE</li>
                            <li>NITROGENO UREICO</li>
                            <li>UREA</li>
                            <li>ACIDO UREICO</li>
                            <li>COLESTEROL</li>
                            <li>PROTEINAS TOTALES</li>
                            <li>ALBUMINA</li>
                            <li>GLOBULINA</li>
                            <li>BILIRRUBINA TOTAL</li>
                            <li>TRANSAMINASA GOT/GPT FOSFATASAS ALCALINAS</li>
                            <li>CALCIO, FOSFORO</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>PERFIL LIPIDO </td>
                    <td>
                        <ul>
                            <li>COLESTEROL TOTAL</li>
                            <li>HDL COLESTEROL</li>
                            <li>LDL COLESTEROL</li>
                            <li>INDICE DE COLESTEROL TOTAL/ HDL</li>
                            <li>VLDL COLESTEROL</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>ORINA COMPLETA </td>
                    <td>
                        <ul>
                            <li>HEMOGRAMA</li>
                            <li>ORINA COMPLETA</li>
                            <li>PERFIL BIOQUIMICO</li>
                            <li>PERFIL LIPIDICO</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>TOMA DE MUESTRA DE SANGRE</td>
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