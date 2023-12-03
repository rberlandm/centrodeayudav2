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
            <h1>Asistencia Clínica Domiciliaria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">Asistencia Clínica Domiciliaria <span>| Vigencia 02/02/2015 al 31/01/2016</span></h5>

    </main>

<?php incluirTemplate('footer'); ?>