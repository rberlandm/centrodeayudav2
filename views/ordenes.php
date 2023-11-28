<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main vh-100">
    <div class="pagetitle">
        <h1>Gestión Ordenes medicas</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Ordenes Medicas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    
</main>

<?php incluirTemplate('footer'); ?>