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
            <h1>SERVICIOS PREVENTIVOS ASISTENCIA SALUD PROGRAMA DOMICILIARIO</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SERVICIOS PREVENTIVOS ASISTENCIA SALUD PROGRAMA DOMICILIARIO [Código 1153102] <span> | </span></h5>

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
                        <td rowspan="2">Medico o Enfermera a Domicilio y procedimientos</td>
                        <td>Visita Médico a domicilio ó Visita Enfermera a Domicilio</td>
                        <td>La visita se coordinará de mutuo acuerdo entre Assistime y el paciente dentro de las 24 horas, consideradas desde la hora en que se realizó la solicitud. Cada visita domiciliaria será categorizada conforme al estado de salud del Paciente. No aplica a pacientes con riesgo vital ni atención de emergencia o urgencia médica. Incluye entrega de receta médica, ordenes médicas y certificados de salud.</td>
                        <td>Ilimitado</td>
                        <td>5 Eventos</td>
                        <td>SI PACIENTE INSISTE EN VER EL MEDICO EN FORMA PRESENCIAL SE LE TOMAN LOS DATOS Y SE GESTIONA AL CORREO A CONTACTO@RESCARE.CL </td>
                    </tr>
                    <tr>
                        <td>Procedimientos Médicos de Enfermería domiciliarios</td>
                        <td>El Servicio realiza en el Domicilio los siguientes procedimientos:
                            <ul>
                                <li>Postura o aplicación de inyección intramuscular o intravenosa (requiere orden médica, excluye medicamento)</li>
                                <li>Extracción de puntos ✓ Curaciones de heridas simples</li>
                                <li>Nebulizaciones con salbutamo ✓ Control de presión arterial</li>
                                <li>Control de saturación de oxígeno con saturómetro</li>
                                <li>Administración y bajada de Suero (requiere orden médica, excluye medicamento)</li>
                            </ul>
                        </td>
                        <td>UF 2</td>
                        <td>4 Eventos</td>
                        <td>
                            <ul>
                                <li>Cliente podrá realizar dichos procedimientos en su Domicilio o en su defecto en centros médicos o clínicas indicadas por Assistime.</li>
                                <li>Atención domiciliaria y presencial válida en la Red de Prestadores señalados por Assistime.</li>
                                <li>Algunos Procedimientos requieren orden médica.</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Programa Preventivo</td>
                        <td>Asma, bronquitis, neumonía, rinitis, sinusitis.</td>
                        <td><span class=" text-danger font-bold">La Asistencia entrega la realización de exámenes presenciales que contribuyen en la prevención o pesquisa de enfermedades como la sinusitis, rinitis, bronquitis, neumonía, asma. Adicionalmente el Servicio entrega una consulta de medicina general para supervisor la pesquisa, según síntomas y antecedentes clínicos o historial del paciente. Incluye las siguientes prestaciones de salud:</span>

                            <ul>
                                <li>Examen radiografía de tórax ap/lateral</li>
                                <li>Examen radiografía de cavidades perinasales</li>
                                <li>Consulta medicina general</li>
                            </ul>
                        </td>
                        <td>Ilimitado</td>
                        <td>1 (por cada prestacion)</td>
                        <td>ORDEN MEDICA</td>
                    </tr>

                    <tr>
                        <td>Telemedicina</td>
                        <td>Plataforma de Telemedicina</td>
                        <td><span class="font-bold">Permite atención médica vía Teleconsulta Médica de Medicina General 24/7 de forma ilimitada 4 Eventos de Teleconsultas a elección de las siguientes prestaciones o subespecialidades:</span>
                            <ul>
                                <li>Teleconsulta Psicología, subespecialidad con agenda programada</li>
                                <li>Teleconsulta Nutrición, con agenda programada</li>
                                <li>Teleconsulta Enfermería, con agenda programada</li>
                            </ul>
                        </td>
                        <td>Copago $0</td>
                        <td>
                            <ul>
                                <li>Ilimitados para Teleconsulta Medicina General </li>
                                <li>4 Eventos anuales a elección de subespecialidades para el grupo Eventos</li>
                            </ul>
                        </td>
                        <td>
                            <p>Se Debe descargar la App CLINICA DIGITAL o INGRESAR POR LA web: <span class="font-bold text-decoration-underline">https://consultamedica.clinicadigital.cl</span> Los beneficiarios de “Abcdin”, podrán acceder con su RUT (sin puntos ni guión). La primera clave, serán los primeros 5 dígitos del Rut, posteriormente pedirá generar una clave definitiva</p>
                            <p class="font-bold text-danger">Las teleconsultas de Psicología, Nutrición y Enfermería se atienden con agendamiento previo (SE SOLICITAN POR CORREO A CONTACTO@RESCARE,CL)</p>
                        </td>
                    </tr>

                    <tr>
                        <td rowspan="4">SERVICIOS PREVENTIVOS ASISTENCIA SALUD PROGRAMA DOMICILIARIO</td>
                        <td colspan="2">Exámen de Laboratorio Clínico Papanicolau (PAP)</td>
                        <td rowspan="4">Copago $0</td>
                        <td>1 Eventos</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td colspan="2">Consulta Médica Especialista Ginecología y Obstetricia</td>
                        <td>1 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Exámen de laboratorio: Antígeno Prostático Específico (PSA)</td>
                        <td>1 Eventos</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td colspan="2">Consulta Médica Especialista en Urología (presencial ambulatoria)</td>
                        <td>1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="2">Preventivo Cardiologico</td>
                        <td colspan="2">Electrocardiograma de Reposo, adulto (E.C.G.</td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td colspan="2">Consulta Médica Especialista en Cardiología o Medicina Interna (presencial, ambulatoria</td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Preventivo Oncológico Hombre o Mujer: Cáncer (CA) colon-recto</td>
                        <td  colspan="2">Exámen de laboratorio clínico: hemorragias ocultas en deposiciones</td>
                        <td>Copago $0</td>
                        <td>1 Eventos</td>
                        <td>ORDEN MEDICA</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>