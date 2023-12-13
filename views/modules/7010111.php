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
            <h1>ASISTENCIA AP ONCOLOGICO PLUS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA AP ONCOLOGICO PLUS [Código 7010111] <span> | </span></h5>

        <!--  <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">DESCUENTOS EN FARMACIAS CRUZ VERDE HASTA $ 20.000 DEACUERDO AL SIGUIENTE DETALLE </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">Se excluyen medicamentos oncologicos, inmunologicos, veterinarios, vacunas y medicina reproductiva </p>
                </div>
            </div>

            div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div> 
        </div>  -->

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Cobertura</th>
                        <th scope="col">Máximo de eventos al año</th>
                        <th scope="col">Máximo d eventos al año</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="4">Oncológico mujer</td>
                        <td>Consulta medica inicial </td>
                        <td>Para control general ,examen fisico,presion arterial,peso y derivacion de examenes preventivos.</td>
                        <td>100% copago o particular</td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MAMOGRAFIA BILATERAL Y/ O ECOTOMOGRAFIA MAMARIA</td>
                        <td>Examenes de imágenes que se realiza con un equipo de mamografia o de ultrasonido.</td>
                        <td></td>
                        <td>1 Evento</td>
                        <td>Orden Medica</td>
                    </tr>

                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul>
                                <li><span class="font-bold">HEMOGRAMA:</span> incluye velocidad de sedimentación.</li>
                                <li><span class="font-bold">PERFIL LIPIDICO:</span> incluye trigliceridos, colesterol total HDL,colesterol, LDL colesterol, VLDL colesterol.</li>
                                <li><span class="font-bold">ORINA COMPLETA:</span> incluye sedimentos de orina.</li>
                                <li><span class="font-bold">TOMA DE MUESTRA DE SANGRE EN ADULTOS</span></li>
                            </ul>
                        </td>
                        <td>100% copago o particular</td>
                        <td>1 Evento</td>
                        <td>Orden Medica</td>
                    </tr>

                    <tr>
                        <td>Consulta medica de evaluacion de examenes / muestra de sangre </td>
                        <td>Consulta medica con especialista en Ginecologia, que permite evaluacion de examenes, antecedentes familiares entre otros.</td>
                        <td></td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="4">Oncológico hombre</td>
                        <td>Consulta medica inicial </td>
                        <td>Para control general ,examen fisico,presion arterial,peso y derivacion de examenes preventivos.</td>
                        <td></td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><span class="font-bold">ANTIGENO PROSTATICO</span></td>
                        <td>Examen de Sangre que mide la proteina producida por las celulas de la prostata, lo que permite diagnosticar y dar seguimiento el cancer de prostata en los hombres</td>
                        <td></td>
                        <td>1 Evento</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Exámenes médicos</td>
                        <td>
                            <ul>
                                <li><span class="font-bold">HEMOGRAMA:</span> incluye velocidad de sedimentación.</li>
                                <li><span class="font-bold">PERFIL LIPIDICO:</span> incluye trigliceridos, colesterol total HDL,colesterol, LDL colesterol, VLDL colesterol.</li>
                                <li><span class="font-bold">ORINA COMPLETA:</span> incluye sedimentos de orina.</li>
                                <li><span class="font-bold">TOMA DE MUESTRA DE SANGRE EN ADULTOS</span></li>
                            </ul>
                        </td>
                        <td></td>
                        <td>1 Evento</td>
                        <td>Orden Medica</td>
                    </tr>

                    <tr>
                        <td>Consulta medica de evaluación de exámenes / muestra de sangre </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Orientación de Salud Medica Telefonica </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> Sin Limite</td>
                        <td> Sin Limite</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>