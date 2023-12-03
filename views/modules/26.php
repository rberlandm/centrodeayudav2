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
        <h5 class="card-title">AP CLÍNICA DOMICILIARIA [26] <span>| Vigencia 20/08/2018 ACTUAL</span></h5>
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
                        <td rowspan="5">Clínica Domiciliaria</td>
                        <td>Orientación medica o Enfermería telefónica </td>
                        <td> (24 horas 365 dias del año)</td>
                        <td>Sin Limite</td>
                        <td>sin limite</td>
                        <td>No cubre gastos médicos</td>
                    </tr>
                    <tr>
                        <td class=" text-bg-warning">Coordinacion de visita medico a Domicilio o Enfermera a domicilio</td>
                        <td></td>
                        <td>sin limite</td>
                        <td class=" text-bg-warning">4 Eventos</td>
                        <td class=" text-bg-warning">EL CLIENTE PODRA SOLICITAR SI LO REQUIERE EN REEMPLAZO A ESTE SERVICIO UNA ATENCION MEDICA DE URGENCIA AMBULATORIA EN CLINICAS PRIVADAS EN CONVENIO SEÑALADAS POR ASSISTIME CUYO TOPE POR EVENTO SERA DE 2 UF POR EVENTO EN ESTE CASO PUNTUAL , LADISTANCIA DE RADIO URBANO ES DE 1 HORA PARA MEDICO A DOMICILIO.
                        </td>
                    </tr>
                    <tr>
                        <td>Traslado de ambulacia en caso de accidente o Enfermedad</td>
                        <td>traslado en ambulancia o en el medio mas ideonio hasta el centro hospitalario</td>
                        <td>sin limite</td>
                        <td>3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Realizacion de Examenes de Laboratorio</td>
                        <td class=" text-bg-warning">SANGRE, ORINA, ELECTROCARDIOGRAMA</td>
                        <td class=" text-bg-warning">2,5 UF por evento</td>
                        <td>2</td>
                        <td>Disponibilidad deprestadore en cada region
                        </td>
                    </tr>
                    <tr>
                        <td>Consulta medica derivacion con especilista.</td>
                        <td class=" text-bg-warning">Cardiologia Traumatologia, Ginecologia, Oftalmologia, Pediatria, Urologia o Broncopulmonar</td>
                        <td class=" text-bg-warning">Copago $0</td>
                        <td class=" text-bg-warning">1 Evento</td>
                        <td class=" text-bg-warning fs-4 font-bold">Orden Medica</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Oncologico Mujer</td>
                        <td>Consulta Medica inicial o Evaluacion de Examenes</td>
                        <td>anamnesis, examen fisico, control presion arterial, control de peso</td>
                        <td>Copago $0</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>PAP o Mamografia bilateral</td>
                        <td></td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td>Cubre a todas las mujeres del grupo familiar desde los 35 años</td>
                    </tr>
                    <tr>
                        <td>Examenes medicos</td>
                        <td>HEMOGRAMA VHS, NITROGENO UREICO, CREATININA, PERFIL LIPIDICO: COLESTEROL TOTAL, TRIGLICERIDOS VDRL, HDL COLESTEROL, LDL COLESTEROL, COLESTEROL TOTAL/ HDL VLDL COLESTEROL.</td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td>Cubre a todas las mujeres del grupo familiar</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Oncologico Hombre</td>
                        <td>Consulta y diagnostico clinico preventivo</td>
                        <td>anamnesis, examen fisico, control presion arterial, control de peso</td>
                        <td>copago 0</td>
                        <td>1 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Antigeno Prostatico (PSA)</td>
                        <td></td>
                        <td>copago 0</td>
                        <td>1 Eventos</td>
                        <td>Cubre a hombres desde los 40 años</td>
                    </tr>
                    <tr>
                        <td>Examenes medicos</td>
                        <td>HEMOGRAMA VHS, NITROGENO UREICO, CREATININA, PERFIL LIPIDICO: COLESTEROL TOTAL, TRIGLICERIDOS VDRL, HDL COLESTEROL, LDL COLESTEROL, COLESTEROL TOTAL/ HDL VLDL COLESTEROL</td>
                        <td>copago 0</td>
                        <td>1 Eventos</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>