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
        <h5 class="card-title">AP CLINICA DOMICILIARIA [7v1] <span>| Vigencia 01/02/2016 AL 29/09/2016</span></h5>
        <p><span class="text-bg-warning p-2 rounded-1">Seguro por muerte accidental por 200 UF</span></p>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
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
                        <td>Orientación medica Telefonica <b>(24 horas 365 días del año)</b></td>
                        <td></td>
                        <td>Sin Limites</td>
                        <td>Sin Limites</td>
                        <td></span> NO cubre gastos médicos </td>
                    </tr>
                    <tr>
                        <td>Coordinación de visita medico a domicilio</td>
                        <td></td>
                        <td>Sin Limites</td>
                        <td><i class='bx bxs-message-alt-error text-warning'></i>  3 Eventos</td>
                        <td><i class='bx bxs-message-alt-error text-warning'></i>  Radio Urbano Máximo de 1 HORA, en regiones sera determinado por la distancia donde este el cliente
                        </td>
                    </tr>
                    <tr>
                        <td>Traslado de ambulancia en caso de accidente</td>
                        <td>traslado en ambulancia o en el media mas idóneo</td>
                        <td>Sin Limite</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-message-alt-error text-warning'></i> Toma de exámenes en el domicilio del cliente
                        </td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Sangre</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Orina</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Electrocardiograma</li>
                            </ul>
                        </td>
                        <td>Sin Limite</td>
                        <td>3 Eventos</td>
                        <td>Depende de Disponibilidad de prestadore en cada region</td>
                    </tr>
                    <tr>
                        <td rowspan="4">Oncologico mujer</td>
                        <td>Consulta y diagnostico clínico preventivo</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Anamnesis</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Examen físico</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Control presión arterial</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> Control de peso</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td rowspan="4">Cubre a todas las mujeres del grupo familiar</td>
                    </tr>
                    <tr>
                        <td>PAP/ Mamografía</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>Ecotomografia</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul class="list-style-none m-0 p-0">
                                <li><i class='bx bxs-message-alt-error text-warning'></i> NITROGENO UREICO</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> GLICEMIA</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> ORINA COMPLETA</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> CREATININA</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> COLESTEROL TOTA</li>
                                <li><i class='bx bxs-message-alt-error text-warning'></i> TRIGLICERIDOS VDRL</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                    </tr>
                    <tr>
                        <td rowspan="7">Beneficio descuento en farmacia <b>[CRUZ VERDE]</b></td>
                        <td><i class='bx bxs-info-circle text-danger'></i> Medicamentos genericos</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 40% descuento</td>
                        <td rowspan="7">$15.000 mensual para grupo familiar</td>
                        <td rowspan="7">Sin limite hasta el monto máximo mensual</td>
                        <td rowspan="7"><i class='bx bxs-message-alt-error text-warning'></i> Se excluyen medicamentos oncologicos, inmunologicos, veterinarios, vacunas y medicina reproductiva</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Medicamentos de marca</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 10% descuento</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Medicamentos medipharm</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 25% descuento</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Productos GEA</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 15% descuento</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Productos de belleza BE spa</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 10% descuento</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Consumo masivo</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 5% descuento</td>
                    </tr>
                    <tr>
                        <td><i class='bx bxs-info-circle text-danger'></i> Accesorios de belleza marcas propias</td>
                        <td><i class='bx bxs-info-circle text-danger'></i> 20% descuento</td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>