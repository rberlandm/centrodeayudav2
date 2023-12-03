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
        <h5 class="card-title">AP CLÍNICA DOMICILIARIA [7v3] <span>| Vigencia 27/03/2017 AL 17/07/2017</span></h5>
        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> SE ELIMINA LA TARJETA DE BENEFICIOS</span></p>

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
                        <td>Orientación medica Telefonica (24 horas 365 dias del año)</b></td>
                        <td></td>
                        <td>Sin Limites</td>
                        <td>Sin Limites</td>
                        <td></span> NO cubre gastos médicos </td>
                    </tr>
                    <tr>
                        <td>Coordinación de visita medico a domicilio</td>
                        <td></td>
                        <td>Sin Limite</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> 4 Eventos</td>
                        <td><i class='bx bxs-message-alt-error text-warning me-2'></i> Distancia de radio urbano de 1 HORA </td>
                    </tr>
                    <tr>
                        <td>Traslado de ambulancia en caso de accidente</td>
                        <td>Traslado en ambulancia o en el medio mas idóneo</td>
                        <td>Sin Limite</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Toma de exámenes en el domicilio del cliente</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Sangre</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Orina</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i> Electrocardiograma</li>
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2 '></i> 2UF por Evento</div>
                        </td>
                        <td>Disponibilidad de prestadores en cada region</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="3">Oncologico Mujer</td>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td>PAP/ Mamografia</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td rowspan="2">Cubre a todas las mujeres del grupo familiar</td>
                    </tr>
                    <!-- <tr>
                        <td>Ecotomografia</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                    </tr> -->
                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>HEMOGRAMA VHS</li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>NITROGENO UREICO </li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>CREATININA </li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>COLESTEROL TOTAL </li>
                                <li class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2'></i>TRIGLICERIDOS VDRL </li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td rowspan="6">Beneficio descuento compras <b>[Salcobrand]</b></td>
                        <td>Medicamentos <b>genéricos</b></td>

                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 25% descuento</div>
                        </td>
                        <td rowspan="6">
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-warning me-2 '></i> $10.000 mesual para grupo familiar</div>
                        </td>
                        <td rowspan="6">Sin limite hasta el monto máximo mensual</td>
                        <td rowspan="6">Se excluyen medicamentos oncologicos, inmunologicos, veterinarios, vacunas y medicina reproductiva</td>
                    </tr>

                    <tr>
                        <td>Medicamentos de <b>marca</b></td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 5% descuento</div>
                        </td>
                    </tr>

                    <tr>
                        <td>Medicamentos <b>medipharm</b></td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 15% descuento</div>
                        </td>
                    </tr>

                    <tr>
                        <td><b>consumo masivo</b></td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 5% descuento</div>
                        </td>
                    </tr>

                    <tr>
                        <td>Productos <b>Vitamin Life</b></td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 10% descuento</div>
                        </td>
                    </tr>

                    <tr>
                        <td>Linea <b>Cluny</b></td>
                        <td>
                            <div class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger me-2 '></i> 10% descuento</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>