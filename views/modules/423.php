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
            <h1>PROGRAMA SALUD ESCOLAR (MAYO 2023) </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">PROGRAMA SALUD ESCOLAR (MAYO 2023) [Codigo 423] <span> | </span></h5>

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

        <div class="row mb-2 p3">
            <div class="info py-1 px-3 ">
                <div class="card-warning text-bg-warning p-3 rounded-1">Fecha de activación: 5 días hábiles a partir de la fecha de expedición del Certificado de Cobertura o Contrato de Asistencia. </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">PRESTACION</th>
                        <th scope="col">DETALLE</th>
                        <th scope="col">MONTO MÁXIMO POR EVENTO/th>
                        <th scope="col">MÁXIMO DE EVENTOS AL AÑO</th>
                        <th scope="col">EXCLUSIONES RESTRICCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Asistencia en Pedagogía General:
                        <td>
                            <p>Un profesor brindará apoyo al estudiante de forma on-line o de forma presencial en los ramos que requieras profundizar o comprender como lo son:</p>
                            <ul>
                                <li>Matemática</li>
                                <li>Lenguaje</li>
                                <li>Ciencias Sociales</li>
                                <li>Comprensión del medio</li>
                                <li>Computación</li>
                            </ul>
                            <p>Se realizará la coordinación de mutuo acuerdo conforme a la materia que necesite refuerzo.</p>
                        </td>
                        <td>UF 1 por evento</td>
                        <td>3 Eventos</td>
                        <td>El servicio será brindado por los prestadores en convenio con Assistime. Se debe coordinar la asistencia de mutuo acuerdo de las partes, debe estar presente un adulto responsable</td>
                    </tr>
                    <tr>
                        <td>Chequeo General Salud Escolar
                        <td>
                            <ol>
                                <li>Consulta Médica Pediatría o Medicina General Infantil / Control Sano, para revisar el estado de salud general del alumno.</li>
                                <li>Electrocardiograma de Reposo (E.C.G.)</li>
                                <li>Exámenes de Laboratorio preventivo de hasta UF2, determinado por médico tratante</li>
                            </ol>
                        </td>
                        <td>Ilimitado</td>
                        <td>2 Eventos Anuales</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>Consulta Médica Nutriología o Nutricionista
                        <td>Chequeo de Salud con Nutricionista o Nutriólogo: consulta que examina al paciente respecto de su peso, alimentación, índices corporales, hábitos alimenticios, entre otros parámetros para realizar cambios y mejorar los hábitos alimenticios del niño o adolescente.</td>
                        <td>100% copago o Prestación</td>
                        <td>2 Eventos Anuales</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Consulta Médica Traumatológica
                        <td>Atención médica ambulatoria para el Alumno, entregada por un Médico Especialista en Traumatología capacitado para diagnosticar y manejar diversas patologías asociadas a la especialidad. Realiza el examen físico y entrega tratamiento a seguir. Debe solicitar agendamiento previo a la atención.</td>
                        <td>100% copago o Prestación</td>
                        <td>2 Eventos Anuales</td>
                        <td>Excluye la atención de urgencia en dicha especialidad, es ambulatoria previa agenda médica.</td>
                    </tr>
                    <tr>
                        <td>Exámenes de Imagenología: Radiografías
                        <td>
                            <p>La Asistencia realizará 2 radiografías anuales de extremidades superiores o inferiores, en modalidad ambulatoria, solicitados por el médico tratante como parte del seguimiento o tratamiento.</p>
                            <p>Son radiografías de seguimiento o control solicitadas por el profesional.</p>
                            <p> Cliente deberá seleccionar el exámen del siguiente listado:</p>
                            <ul>
                                <li>RADIOGRAFIA DE HOMBRO</li>
                                <li>RADIOGRAFIA DE RODILLA</li>
                                <li>RADIOGRAFIA PIERNA</li>
                                <li>RADIOGRAFIA DE FEMUR</li>
                                <li>RADIOGRAFIA DE PIE</li>
                                <li>RADIOGRAFIA DE MANOS</li>
                                <li>RADIOGRAFIA DE BRAZO</li>
                                <li>RADIOGRAFIA DE ANTEBRAZO</li>
                                <li>RADIOGRAFIA DE CLAVICULA</li>
                                <li>RADIOGRAFIA DE CADERA</li>
                                <li>RADIOGRAFIA DE CUELLO</li>
                                <li>RADIOGRAFIA DE MUÑECA</li>
                                <li>RADIOGRAFIA DE CODO</li>
                            </ul>
                        </td>
                        <td>100% copago o Prestación</td>
                        <td>2 Eventos Anuales</td>
                        <td>El servicio será brindado por los prestadores en convenio con Assistime. Se debe coordinar la asistencia de mutuo acuerdo de las partes, debe estar presente un adulto responsable. Excluye realización de exámenes de urgencia en radiología, son ambulatorios previa agenda médica.</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Beneficio descuento en farmacia SALCOBRAND
                        <td>Medicamentos genericos y bio equivalentes genéricos</td>
                        <td>30% descuento</td>
                        <td rowspan="3">El tope mensual a recibir por cada grupo es de $20.000 (en descuentos), no acumulables.</td>
                        <td rowspan="3">Se excluyen medicamentos oncológicos, inmunológicos, de medicina reproductiva y veterinarios. </td>
                    </tr>
                    <tr>
                        <td>Medicamentos de marca y bio equivalentes de marca </td>
                        <td>10% descuento</td>
                    </tr>
                    <tr>
                        <td>Productos de Laboratorios Preferentes (marca Medipharm)</td>
                        <td>20% descuento</td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>