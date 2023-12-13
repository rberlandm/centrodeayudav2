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
            <h1>ASISTENCIA CATASTROFICO FAMILIAR</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA CATASTROFICO FAMILIAR [Código 2030261] <span> | </span></h5>

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
                        <th scope="col">Cobertura</th>
                        <th scope="col">Máximo de eventos al año</th>
                        <th scope="col">Máximo d eventos al año</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ASISTENCIA CATASTROFICO FAMILIAR</td>
                        <td>Chequeo preventivo que incluye los siguientes exámenes</td>
                        <td>
                            <ul>
                                <li>Hemograma</li>
                                <li>Perfil Lipídico</li>
                                <li>Perfil Bioquímico</li>
                                <li>Orina Completa</li>
                                <li>Urocultivo</li>
                                <li>T3</li>
                                <li>T4</li>
                                <li>TSH</li>
                                <li>Radiografía de Tórax</li>
                            </ul>
                        </td>
                        <td>Sin tope</td>
                        <td>2 Eventos</td>
                        <td>Orden medica</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>