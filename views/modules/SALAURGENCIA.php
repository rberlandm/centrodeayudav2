<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Bci_Logotype.svg/1024px-Bci_Logotype.svg.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>SALA DE URGENCIA </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SALA DE URGENCIA BCI [Código - ] <span> | </span></h5>

        <div class="mb-3">
            <div class="p-3 text-bg-warning rounded-1">
                <p>TITULAR + 4 BENEFICIARIOS, NO ENTREGA COBERTURA A CLIENTES SIN PREVICION O FONASA A</p>
            </div>
        </div>

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
                <tbody>

                    <tr>
                        <td rowspan="6">SALA DE URGENCIA BCI</td>
                        <td>CONSULTA MÉDICA DE URGENCIA</td>
                        <td>MÉDICO GENERAL EN HORARIO HÁBIL E INHÁBIL</td>
                        <td>5 UF.</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PROCEDIMIENTO DE URGENCIA</td>
                        <td>PARA ALIVIAR DOLOR DETERMINADO POR EL MÉDICO DE TURNO, LO QUE INCLUYE, POSTURA VÍA VENOSA E INTRAVENOSA DE MEDICAMENTOS, ANTIBIÓTICOS, ANTINFLAMATORIOS, ANALGESICOS O SIMILAR, NEBULIZACIONES O APLICACIÓN DE OXÍGENO, POSTURA DE YESO O INMOBILIZADOR DE EXTREMIDAD AFECTADA.</td>
                        <td>5 UF.</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EXÁMENES DE URGENCIA O AMBULATORIOS</td>
                        <td> RADIOLOGÍA, LABORATORIO CLÍNICO O ECOTOMOGRAFÍAS, (LOS EXÁMENES QUE EL MÉDICO DE TURNO DETERMINE EN LA ATENCIÓN DE URGENCIA, SE PODRÁN REALIZAR EN MODALIDAD DE URGENCIA O DIFERIDO, EN CLÍNICAS O CENTROS MÉDICOS SEÑALADOS POR ASSISTIME, CON COBERTURA 100% COPAGO FONAS A E ISAPRES</td>
                        <td>5 UF.</td>
                        <td>3 Eventos</td>
                        <td>PRESENTAR ORDEN MÉDICA</td>
                    </tr>
                    <tr>
                        <td>MÉDICO A DOMICILIO</td>
                        <td>PUEDE SER REEMPLAZADO A CLÍNICA O CENTRO MÉDICO MÁS CERCANO AL DOMICILIO, EN EL MEDIO MÁS IDÓNEO, DONDE SE LE ENTREGARA CONSULTA MÉDICA AMBULATORIA O DE URGENCIA</td>
                        <td>2,5 UF</td>
                        <td>3 Eventos</td>
                        <td>NO INCLUYE URGENCIAS NI PACIENTES CON RIESGO VITAL O SECUELA GRAVE, NO INCLUYE PROCEDIMIENTOS MÉDICOS NI INSUMOS.</td>
                    </tr>
                    <tr>
                        <td>TRASLADO MÉDICO TERRESTRE ILIMITADO</td>
                        <td>DESDE DOMICILIO A CLÍNICA O CENTRO MÉDICO DE URGENCIA MÁS CERCANO AL DOMICILIO EN UNA UNIDAD DE BAJA O MEDIANA COMPLEJIDAD, O EN EL MEDIO MÁS IDÓNEO.</td>
                        <td>ILIMITADO</td>
                        <td>ILIMITADO</td>
                        <td>NO CONTEMPLA TRASLADO DE PACIENTES CATEGORIZADOS COMO EMERGENCÍA O DE RIESGO VITAL, NI SECUELA FUNCIONAL GRAVE</td>
                    </tr>
                    <tr>
                        <td>ORIENTACIÓN DE SALUD TELEFÓNICA</td>
                        <td>DISPONE CON UN STAFF DE MÉDICOS Y ENFERMERAS PARA DEPEJAR DUDAS DE LAS PRESTACIONES DE SALUD, ESTADO DE SALUD, TRATAMIENTO Y PROCEDIMIENTOS MÉDICOS O DE ENFERMERÍA</td>
                        <td>ILIMITADO</td>
                        <td>ILIMITADO</td>
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