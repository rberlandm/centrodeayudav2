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
            <h1>AP MEDICO INTEGRAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">AP MEDICO INTEGRAL [12] <span>| Vigencia 01/01/2018 AL 19/08/2018</span></h5>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <!--         <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> NOTA : PARA EL SEGURO DE MUERTE SE CONCTATA DIRECTAMENTE CON LA ASEGURADORA </span></p> -->

        <div class="table-responsive">
            <table class="table table-hover table-bordered table-light">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Monto máximo por evento</th>
                        <th scope="col">Eventos máximos por año</th>
                        <th scope="col">Observaciones y/o Exclusiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Consulta medico general</td>
                        <td>Coordinación Consulta medico general</td>
                        <td>Coordinación Consulta medico general</td>
                        <td>100%</td>
                        <td class=" text-bg-warning text-center font-bold">2 Eventos</td>
                        <td>No cubre tratamientos, ni exámenes médicos posteriores ni consultas medicas.</td>
                    </tr>
                    <tr>
                        <td>Consulta Ginecologica</td>
                        <td>Coordinación Consulta Ginecologica</td>
                        <td>Coordinación Consulta Ginecologica</td>
                        <td>100%</td>
                        <td class=" text-bg-warning text-center font-bold">1 Eventos</td>
                        <td>No cubre tratamientos, ni examenes medicos posteriores ni consultas medicas.</td>
                    </tr>
                    <tr>
                        <td>Consulta Urologia</td>
                        <td>Coordinación Consulta Urologia</td>
                        <td>Coordinación Consulta Urologia</td>
                        <td>100%</td>
                        <td class=" text-bg-warning text-center font-bold">1 Eventos</td>
                        <td>No cubre tratamientos, ni examenes medicos posteriores ni consultas medicas.</td>
                    </tr>
                    <tr>
                        <td>Consulta Oftalmologia</td>
                        <td>Coordinación Consulta Oftalmologia</td>
                        <td>Coordinación Consulta Oftalmologia</td>
                        <td>100%</td>
                        <td class=" text-bg-warning text-center font-bold">2 Eventos</td>
                        <td>No cubre tratamientos, ni exámenes médicos posteriores ni consultas medicas.</td>
                    </tr>
                    <tr>
                        <td>Consulta Pediatría</td>
                        <td>Coordinación Consulta Pediatría</td>
                        <td>Coordinación Consulta Pediatría</td>
                        <td>100%</td>
                        <td class=" text-bg-warning text-center font-bold">3 Eventos</td>
                        <td>No cubre tratamientos, ni examenes medicos posteriores ni consultas medicas.</td>
                    </tr>
                    <tr>
                        <td class=" text-bg-warning font-bold">Orientación Medica Telefonica</td>
                        <td class=" text-bg-warning font-bold">Orientación Medica Telefonica</td>
                        <td class=" text-bg-warning font-bold">Orientación Medica Telefonica</td>
                        <td class=" text-bg-warning text-center font-bold">Sin limites</td>
                        <td class=" text-bg-warning text-center font-bold">Sin limites</td>
                        <td>No se envían recetas ni licencias medica bajo ninguna via</td>
                    </tr>


                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>