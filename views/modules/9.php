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
            <h1>SEGURO ONCOLOGICO LP</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">SEGURO ONCOLOGICO LP [Código: <b>9</b>]<span> | Vigencia: 01-02-2016 A ACTUAL</span></h5>

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
                        <td></td>
                        <td>Exámenes de Laboratorio</td>
                        <td class="text-bg-warning">
                            <ul>
                                <li>HEMOGRAMA</li>
                                <li>ORINA COMPLETA</li>
                                <li>PERFIL BIOQUIMICO</li>
                                <li>PERFIL LIPIDICO</li>
                            </ul>
                        </td>
                        <td class="text-center">100% de Copago</td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Consulta</td>
                        <td>Control Especialista: Anamnesis, Examen Fisico, Control Arterial, Evaluacion y examenes de Diagnostico Integral</td>
                        <td class="text-center">100% de Copago</td>
                        <td class="text-center">1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Examenes Preventivos</td>
                        <td class="text-bg-warning"><ul>
                            <li>Mujer (PAP / Mamografia Bilateral)</li>
                            <li>Hombre (Antigeno)</li>
                        </ul></td>
                        <td class="text-center">100% de Copago</td>
                        <td class="text-center">1 Evento</td>
                        <td>Eleccion para hombre o mujer</td>
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