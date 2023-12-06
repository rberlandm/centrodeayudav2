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
            <h1>GARANTIA EXTENDIDA MÁS PROCTECCIÓN (ASISTENCIA INSTALACION DE LINEA BLANCA)</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">GARANTIA EXTENDIDA MÁS PROCTECCIÓN (ASISTENCIA INSTALACION DE LINEA BLANCA) [Código: <b>73</b>]<span> | Vigencia: DESDE DICIEMBRE DEL 2016 A ACTUAL</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i> NOTA : LA INSTALACION SE REALIZARA UNICAMENTE CUANDO EL CLIENTE NOS LLAME, Y SE PROGRAMARAN LAS INSTALACIONES DENTRO DE LOS (3) DIAS CALENDARIO SIGUIENTES A LA FECHA DE RECEPCION DEL PRODUCTO NOS DEBE ENVIAR VIA CORREO ELECTRONICO LA BOLETA QUE ACREDITE LA COMPRA DE DICHO PRODUCTO AL SIGUIENTE CORREO: COORDINACIONHORASMEDICAS@ASSISTIME.CL</span></p>
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
                        <td rowspan="6">INSTALACION Y CONFIGURACION</td>
                        <td>LAVADORA</td>
                        <td class=" text-bg-warning">PUNTO DE AGUA, DESAGÜE ,CONEXIÓN ELÉCTRICA CON VOLTAJE 220V</td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td class=" text-bg-warning">NO INCLUYE MATERIAL, SOLO PRODUCTOS NUEVOS</td>
                    </tr>

                    <tr>
                        <td>SECADORA</td>
                        <td class=" text-bg-warning">CONEXIÓN ELECTRICA CON VOLTAJE 22OV</td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>SECADORA</td>
                        <td class=" text-bg-warning">CONEXIÓN ELECTRICA CON VOLTAJE 22OV, INDICAR MARCA Y MODELO</td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>LAVAVAJILLAS</td>
                        <td></td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>TV. AUDIO</td>
                        <td class=" text-bg-warning">INDICAR MARCA Y PULGADA DEL TV.</td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td class=" text-bg-warning">UNICAMENTE SE PROGRAMAN INSTALACIONES DENTRO DE LOS 3 DIAS CALENDARIO SE DEBE ENVIAR LA BOLETA AL CORREO COORDINACIONHOASMEDICAS@ASSISTIME.CL</td>
                    </tr>

                    <tr>
                        <td>PC</td>
                        <td class=" text-bg-warning">LA INSTALACION ES DE FORMA REMOTA EN LA INSTALACION DE SOFRWARE Y HARDWARE EN EL EQUIPO</td>
                        <td></td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
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