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
            <h1>MAXIMA GARANTIA, FULL PROTECCION [MAS PROTECCIÓN]</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">MAXIMA GARANTIA, FULL PROTECCION [MAS PROTECCIÓN] [Código: <b>72</b>]<span> | Vigencia: DESDE DICIEMBRE DEL 2016 A ACTUAL</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i> NOTA: DEBE ENVIAR BOLETA QUE ACREDITE LA MAXIMA GARANTIA AL CORREO COORDINACIONHORASMEDICAS@ASSISTIME.CL</span></p>
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
                        <td rowspan="3">MAXIMA GARANTIA</td>
                        <td>PLOMERO POR EMERGENCIA</td>
                        <td></td>
                        <td class="text-center font-bold text-bg-warning"> 2Uf</td>
                        <td class="text-center">1 Evento</td>
                        <td class="text-center font-bold text-bg-warning">NO INCLUYE MATERIAL </td>
                    </tr>

                    <tr>
                        <td>ELECTRICISTA POR EMERGENCIA </td>
                        <td></td>
                        <td class="text-center font-bold text-bg-warning"> 2Uf</td>
                        <td class="text-center">1 Evento</td>
                        <td class="text-center font-bold text-bg-warning">NO INCLUYE MATERIAL </td>
                    </tr>

                    <tr>
                        <td>VIDRIERO POR EMERGENCIA</td>
                        <td class="text-center font-bold text-bg-warning">DEBE INDICAR LAS MEDIDAS DEL VIDRIO</td>
                        <td class="text-center font-bold text-bg-warning"> 2Uf</td>
                        <td class="text-center">1 Evento</td>
                        <td class="text-center font-bold text-bg-warning">NO INCLUYE MATERIAL </td>
                    </tr>

                    <tr>
                        <td>FULL PROTECCION</td>
                        <td class="font-bold text-bg-warning">MANTIENE COBERTURA DE MAXIMA GARANTIA PERO SE LE INCLUYE SERVICIO DE CERRAJERIA Y  SERVICIO DE CONEXIÓN PARA REPARACIONES VARIAS EN EL HOGAR</td>
                        <td></td>
                        <td class="text-center font-bold text-bg-warning"> 2Uf</td>
                        <td class="text-center">1 Evento</td>
                        <td class="text-center font-bold text-bg-warning">NO INCLUYE MATERIAL </td>
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