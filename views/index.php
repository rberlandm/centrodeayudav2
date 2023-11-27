<?php

require 'includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main vh-100">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <?php
// Obtener la ruta completa de la página actual
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$currentPage = $protocol . '://' . $host . $_SERVER['REQUEST_URI'];

// Imprimir la ruta completa
echo "La ruta completa de la página actual es: $currentPage";
?>

</main>

<?php incluirTemplate('footer');

?>