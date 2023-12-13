<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Logo_Salcobrand.svg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>BOX DE URGENCIA SALCOBRAND</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">BOX DE URGENCIA [Código - 543201] <span> | </span></h5>

        <div>
            <div class="card text-bg-warning p-3">
            CUBRE 100 % COPAGO, A CLIENTES CON COBERTURA DE FONASA DE LETRA B EN ADELANTE E ISAPRE, PARTICULARES NO CUBRE
            </div>
        </div>

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


                </tbody>
            </table>
        </div>


    </div>

    <script>
        new DataTable('#ffaa');
    </script>
</main>



<?php incluirTemplate('footer'); ?>