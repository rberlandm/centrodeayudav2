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
            <h1>SEGURO DE VIDA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SEGURO DE VIDA [Código 2014245] <span> | </span></h5>

        <div class="row mb-3">
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

            <!-- div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div> -->
        </div> 


        <div class="row">
            <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table table-bordered table-light table-condensed table align-middle">
                        <thead class="bg-encabezado">
                            <tr class="item-middle">
                                <th scope="col">COBERTURA</th>
                                <th scope="col">CAPITAL ASEGURADO (UF)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FALLECIMIENTO</td>
                                <td>150 ($ 4.065.000)</td>
                            </tr>
                            <tr>
                                <td>MUERTE ACCIDENTAL </td>
                                <td>300 ($ 8.130.000)</td>
                            </tr>
                            <tr>
                                <td>INVALIDEZ TOTAL Y PERMANENTE 2/3</td>
                                <td>200 ($ 5.420.000)</td>
                            </tr>
                            <tr>
                                <td>PRIMA MENSUAL</td>
                                <td>0,2025</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table table-bordered table-light table-condensed table align-middle">
                        <thead class="bg-encabezado">
                            <tr class="item-middle">
                                <th scope="col">CATEGORIA </th>
                                <th scope="col">DESCUENTOS </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>GENERICOS</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <td>CATEGORIA VIVE MAS </td>
                                <td>15%</td>
                            </tr>
                            <tr>
                                <td>MARCA NACIONAL </td>
                                <td>15%</td>
                            </tr>
                            <tr>
                                <td>MARCA INTERNACIONAL </td>
                                <td>15%</td>
                            </tr>
                            <tr>
                                <td>PRODUCTOS NATURALES</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>RESTO FARMACIAS</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>TOPE</td>
                                <td>$20.000</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>