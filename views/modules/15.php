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
            <h1>AP CLINICA DOMICILIARIA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">AP CLÍNICA DOMICILIARIA [15] <span>| Vigencia 18/07/2017 AL 31/12/2017</span></h5>
        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger fs-3 me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <!--     <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> SE ELIMINA LA TARJETA DE BENEFICIOS</span></p> -->

        <div class="table-responsive">
            <table id="ejemplo" class="table table-hover">
                <thead>
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
                        <td rowspan="4">Clínica Domiciliaria</td>
                        <td>Visita de Medico a Domicilio</td>
                        <td></td>
                        <td>Sin Limite</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-1'></i>4 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <!-- Sin primera columna -->
                        <td>Orientación Medica Telefónica <b>(24 horas, 365 días del año)</b></td>
                        <td></td>
                        <td>Sin Limite</td>
                        <td>Sin Limite</td>
                        <td><b>No cubre gastos médicos</b></td>
                    </tr>

                    <tr>
                        <!-- Sin primera columna -->
                        <td>Traslado en caso de Urgencia Medica</td>
                        <td></td>
                        <td>Sin Limite</td>
                        <td>3 Eventos</td>
                        <td>Son eventos <b>Anuales</b> y acumulables al <b>grupo familiar</b></td>
                    </tr>

                    <tr>
                        <!-- Sin primera columna -->
                        <td>Toma de exámenes a Domicilio</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> SANGRE</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> ORINA</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> ELECTROCARDIOGRAMA</li>
                            </ul>
                            </b>
                        </td>
                        <td><i class='bx bxs-message-alt-error text-warning me-1'></i>2 Uf</td>
                        <td>2 Eventos</td>
                        <td>Son eventos <b>Anuales</b> y acumulables al <b>grupo familiar</b></td>
                    </tr>

                    <tr>
                        <td rowspan="3">Oncologico mujer</td>
                        <td>Consulta Médica inicial o evaluación de exámenes</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i>Anamnesis</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i>Examen físico</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i>Control presión arterial</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i>Control de peso</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-1'></i>2 Eventos</td>
                        <td>Eventos anuales, acumulables al grupo familiar.</td>
                    </tr>
                    <tr>
                        <!-- Sin primera columna -->
                        <td>PAP o Mamografia</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-1'></i>Cubre a todas las mujeres del grupo familiar desde los 35 años</td>
                    </tr>
                    <tr>
                        <!-- Sin primera columna -->
                        <td>Examenes medicos</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> HEMOGRAMA VHS</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> NITROGENO UREICO</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> GLICEMIA</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> ORINA COMPLETA</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> CREATININA</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> COLESTEROL TOTAL</li>
                                <li><i class='bx bxs-message-alt-error text-warning me-1'></i> TRIGLICERIDOS VDRL</li>

                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td>Cubre a todas las mujeres del grupo familiar</td>
                    </tr>
                    <<tr>
                        <td rowspan="3">Oncologico Hombre</td>
                        <td>Consulta Medica</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>Anamnesis</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>Examen físico</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>Control presión arterial</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>Control de peso </li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td rowspan="3"><i class='bx bxs-message-alt-error text-warning me-1'></i>  Cubre a hombres desde los <b>40 años</b></td>
                        </tr>
                        <tr>
                            <!-- sin primera columna -->
                            <td>Antígeno Prostatico</td>
                            <td></td>
                            <td>Copago $0</td>
                            <td>1 Eventos</td>
                        </tr>
                        <tr>
                            <!-- sin primera columna -->
                            <td>Exámenes médicos</td>
                            <td>
                                <ul class="list-style-none m-0 p-0">
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> HEMOGRAMA VHS</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> NITROGENO UREICO</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> GLICEMIA</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> ORINA COMPLETA</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> CREATININA</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> COLESTEROL TOTAL</li>
                                    <li><i class='bx bxs-message-alt-error text-warning me-1'></i> TRIGLICERIDOS VDRL</li>

                                </ul>
                            </td>
                            <td>Copago $0</td>
                            <td>1 Eventos</td>
                        </tr>

                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>