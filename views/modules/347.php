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
            <h1>ASISTENCIA HOGAR CATASTROFICO PINTURA FACHADA Y PLOMERIA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">ASISTENCIA HOGAR CATASTROFICO PINTURA FACHADA Y PLOMERIA [Código: <b>347</b>]<span> | Vigencia: 05-11-2019 A 2020</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i> SE DEBE LLAMAR A LOS NUMEROS 600 3003 600 o desde celulares 223512599 solicitando el servicio, indicando el rut del titular y señalar ser Cliente La Polar según póliza asignada,</span></p>
        <!-- 
        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> COBERTURAS EN CASO DE URGENCIAS, DOLOR, INFECCION, INFLAMACION, SANGRAMIENTO Y FRACTURA </span></p>
 -->

        <div class="table-responsive">
            <table id="" class="table table-hover table-bordered table-light">
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
                        <td>Pintura Fachada Exterior</td>
                        <td class=" text-bg-warning">El servicio de pintura de fachada enviará personal idóneo o calificado para realizar trabajos de pintura de superficies externas de las paredes de la fachada del hogar del Asegurado.</td>
                        <td>DEBE INDICAR EL METRAJE DE LA SUPERFICIE A PINTAR</td>
                        <td class="text-center text-bg-warning">5 Hrs</td>
                        <td class="text-center">1 Evento</td>
                        <td>No incluye superficies interiores de la casa, por tanto el personal de la asistencia tendrá acceso a los espacios exteriores que precisen la fachada, siendo de responsabilidad de cada asegurado el permitir el acceso a otros espacios de la casa. NO INCLUYE MATERIAL </td>
                    </tr>

                    <tr>
                        <td>Plomería Hogar</td>
                        <td class="text-center text-bg-warning">Se enviará personal idóneo o calificado al domicilio u hogar del asegurado para realizar la revisión y recambio de pieza de desagûe o de Sifón y flexible por destape de Lavamanos de baño o Lavaplatos de cocina, en el hogar.</td>
                        <td>DEBE INDICAR EL TRABAJO A REALIZAR</td>
                        <td class="text-center text-bg-warning">2,5 Hrs</td>
                        <td>1 Evento</td>
                        <td>No incluye intervención en cañerías empotradas o que no están a la vista. No aplica Wc, tinas o duchas. **El costo de la pieza o repuesto es de costo del cliente.NO INCLUYE MATERIAL </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            /*             $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            }); */
        </script>
</main>

<?php incluirTemplate('footer'); ?>