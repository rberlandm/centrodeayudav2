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
            <h1>Asistencia Clínica Domiciliaria</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">Asistencia Clínica Domiciliaria <span>| Vigencia 02/02/2015 al 31/01/2016</span></h5>
        <div class="table-responsive p-2">
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
                        <td rowspan="4">TeleMedicina</td>
                        <td>Visita de medico a domicilio</td>
                        <td></td>
                        <td>Sin limite</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Orientacion medica telefonica</td>
                        <td></td>
                        <td>Sin limite</td>
                        <td>Sin limite</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Traslado en caso de urgencia medica</td>
                        <td>Item</td>
                        <td>Sin limite</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Toma de examenes a domicilio </td>
                        <td>
                            <ul>
                                <li>SANGRE</li>
                                <li>ORINA</li>
                                <li>ELECTROCARDIOGRAMA</li>
                            </ul>
                        </td>
                        <td>Sin limite</td>
                        <td>2 Eventos</td>
                    </tr>
                    <tr>
                        <td rowspan="7">Oncologico mujer</td>
                        <td>Consulta y diagnostico clínico preventivo</td>
                        <td>Consulta medica con especialista para que emita orden medicas para la realización de exámenes</td>
                        <td>Copago $0</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="6">Examenes Preventivos</td>
                        <td>MAMOGRAFIA</td>
                        <td rowspan="6">Copago $0</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ECOTOMOGRAFIA</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PAPANICOLAU</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HEMOGRAMA</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PERFIL LIPIDICO</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PERFIL BIOQUÍMICO</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Beneficio descuento compras  </td>
                        <td>Tarjeta de descuento farmacia <b>[SALCOBRAND]</b>/<td>
                        <td>$ 15.000  Mensuales</td>
                        <td> Sin Limite</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</main>

<?php incluirTemplate('footer'); ?>