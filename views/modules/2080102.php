<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://static.theclinic.cl/media/2012/02/abcdin-e1328288265294.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>ASISTENCIA DENTAL FAMILIAR</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA DENTAL FAMILIAR [Código 2080102] <span> | </span></h5>

        <!--         <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">APLICA A CLIENTES CON PREVISION VIGENTE FONASA O ISAPRES</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 ">
                    <p class=" text-uppercase">Orientación medica telefónica (24 horas 365 días del año)</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div>
        </div> -->


    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-light table-condensed table align-middle">
            <thead class="bg-encabezado">
                <tr class="item-middle">
                    <th scope="col">Beneficio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Monto máximo por evento</th>
                    <th scope="col">máximo de eventos al año</th>
                    <th scope="col">EXCLUSIONES RESTRICCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="5">ASISTENCIA DENTAL FAMILIAR</td>
                    <td>Urgencia</td>
                    <td>Diagnostico de urgencia dental y derivación a especialista, ferulización en caso de trauma dientes anteriores, retiro de cuerpo extraño, tratamiento de pericoronaritis aguda, tratamiento de gingivitis ulcero necrótica aguda, radiografía pieza afectada (periapical), alivio de oclusión (diente sintomático), colocación de cemento temporal, drenaje de absceso intraoral, trepanación de urgencia (pulpis irreversible, complicaciones post-exodoncia: hemorragia y alveolitis, exodoncia a colgajo de urgencia (excluye terceros molares), tratamiento sintomático de altas menores en cavidad oral.</td>
                    <td>0</td>
                    <td>Sin tope</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Prevención</td>
                    <td>RAYOS X (PERIAPICALES) para diagnostico, examen clínico y diagnostico, profilaxis de cálculos supragingivales</td>
                    <td>$9000 remoción de cálculos supragingivales, resto de prestaciones sin copago</td>
                    <td>Remoción de cálculos supragingivales 1 al año, resto de prestaciones sin tope</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Endodoncia</td>
                    <td>Endodoncia en dientes anteriores</td>
                    <td>Sin copago</td>
                    <td>Sin tope</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Operatoria</td>
                    <td>Obturación resina simple pieza anterior o posterior, obturación resina compuesta pieza anterior o posterior, obturación resina compleja pieza anterior o posterior, tratamiento de sensibilidad cervical sin cavidad (con ionómeros solo en caso de sensibilidad), resina cervical pieza anterior o posterior (lesiones por caries, erosiones o abrasiones)</td>
                    <td>9000</td>
                    <td>4 obturaciones</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cirugía oral</td>
                    <td>Exodoncia simple (excluye terceros molares), exodoncia a colgajo (excluye terceros molares) </td>
                    <td>0</td>
                    <td>Sin tope</td>
                    <td></td>
                </tr>


            </tbody>
        </table>
    </div>

</main>

<?php incluirTemplate('footer'); ?>