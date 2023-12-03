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
        <h5 class="card-title">AP CLÍNICA DOMICILIARIA [21] <span>| Vigencia 27/03/2017 AL 17/07/2017</span></h5>
        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> NOTA : PARA EL SEGURO DE MUERTE SE CONCTATA DIRECTAMENTE CON LA ASEGURADORA </span></p>

        <div class="table-responsive">
            <table class="table table-hover">
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
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> Orientación medica Telefonica (24 horas 365 días del año)</b></td>
                        <td></td>
                        <td>Sin Limites</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> 4 Eventos</td>
                        <td></span> NO cubre gastos médicos </td>
                    </tr>

                    <tr>
                        <td>Orientación Medica y Enfermería Telefónica <b>(24 horas, 365 días del año)</b></td>
                        <td></td>
                        <td>Sin limite</td>
                        <td>Sin limite</td>
                        <td>No cubre gastos médicos</td>
                    </tr>


                    <tr>
                        <td>Traslado en caso de Urgencia Medica</td>
                        <td></td>
                        <td>Sin limite</td>
                        <td>3 Eventos</td>
                        <td>Son eventos anuales y acumulables al grupo familiar</td>
                    </tr>


                    <tr>
                        <td>Toma de exámenes a Domicilio</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>SANGRE</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>ORINA</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>ELECTROCARDIOGRAMA</li>
                            </ul>
                        </td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> 2 uf</td>
                        <td>2 Eventos</td>
                        <td>Eventos anuales, acumulables al grupo familiar.</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Oncologico Mujer</td>
                        <td>Consulta Médica inicial o evaluación de exámenes </td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li>Anamnesis</li>
                                <li>Examen físico</li>
                                <li>control presión arterial</li>
                                <li>control de peso</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> 2 Evento</td>
                        <td>Eventos anuales, acumulables al grupo familiar.</td>
                    </tr>
                    <tr>
                        <td>PAP o Mamografia</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> Cubre a todas las <b>mujeres del grupo familiar desde los 35 años</b></td>
                    </tr>
                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Hemograma</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Nitrógeno Ureico</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Glicemia</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Orina Completa</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Creatinina</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Colesterol Total</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Triglicéridos VDRL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> HDL COLESTEROL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> LDL COLESTEROL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> COLESTEROL TOTAL/ HDL Y VLDL COLESTEROL</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td>Cubre a todas las <b>mujeres</b> del grupo familiar</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Oncologico hombre</td>
                        <td>Consulta Medica</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li>Anamnesis</li>
                                <li>Examen físico</li>
                                <li>control presión arterial</li>
                                <li>control de peso</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Antígeno Prostatico</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Hemograma</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Nitrógeno Ureico</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Glicemia</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Orina Completa</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Creatinina</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Colesterol Total</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Triglicéridos VDRL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> HDL COLESTEROL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> LDL COLESTEROL</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> COLESTEROL TOTAL/ HDL Y VLDL COLESTEROL</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>