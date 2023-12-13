<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://static.theclinic.cl/media/2012/02/abcdin-e1328288265294.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>SEGURO ESCOLARIDAD PLAN 1</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA ESCOLARIDAD [Código 2070101] <span> | </span></h5>

        <!--  <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">DESCUENTOS EN FARMACIAS CRUZ VERDE HASTA $ 20.000 DEACUERDO AL SIGUIENTE DETALLE </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">Se excluyen medicamentos oncologicos, inmunologicos, veterinarios, vacunas y medicina reproductiva </p>
                </div>
            </div>

            div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div> 
        </div>  -->

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Tope por Evento</th>
                        <th scope="col">Limite Anual</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5">ASISTENCIA ESCOLARIDAD</td>
                        <td>CONSULTA MEDICA URGENCIA POR EVENTO TRAUMATOLOGICO</td>
                        <td>Atencion medica entregada por un medico de urgencia capacitado en atencion de urgencia y diagnosticos de eventos traumatologicos.</td>
                        <td>Sin limite</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>TRASLADO DE URGENCIA </td>
                        <td>En caso de Accidente se destinara el medio terrestre mas idoneo para trasladar al paciente hacia un centro medico de Urgencia.</td>
                        <td rowspan="2">2</td>
                        <td rowspan="2">3UF</td>
                    </tr>
                    <tr>
                        <td>REDIOGRAFIA DE EXTREMIDADES SUPERIOR O INFERIOR </td>
                        <td>Según zona de fractura o lesion causado por accidente </td>
                    </tr>
                    <tr>
                        <td>PROCEDIMIENTO DE URGENCIA </td>
                        <td>Cobertura de procedimiento no bonificado por prevision de salud, Ejemplo (postura de inmobilizador u otros)</td>
                        <td>2</td>
                        <td>3UF</td>
                    </tr>
                    <tr>
                        <td>CONSULTA MEDICA AMBULATORIA PEDIATRICA O MEDICINA GENERAL</td>
                        <td>Consulta medica para control de tratamiento con medico especialista o general </td>
                        <td>Sin limite</td>
                        <td>1</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>