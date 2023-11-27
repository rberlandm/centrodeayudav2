<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main vh-100">
    <div class="pagetitle">
        <h1>Listado Red Medica</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Red Medica</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    
</main>

<?php incluirTemplate('footer'); ?>