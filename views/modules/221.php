<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>
<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">
        <img src="https://www.espaciourbano.cl/storage/images/logo-FP-01-20220131161017.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>Muerte Accidental + Asistencia médica familiar</h1>
            <h5>Asistencia Médica Familiar Fashion´s Park </h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card-informativa row mb-2 p-2">

        <div class="card-info mb-2">
            <p>La vigencia de la Asistencia de salud es indefinida, se iniciará una vez transcurridas 72 hrs desde la fecha de firmar del presente certificado.</p>
        </div>

        <div class=" text-bg-success  rounded-1 text-lg-center mb-3 p-2">
            <span>NUMERO DE LA ASISTENCIA 2 2351 2516</span>
        </div>

        <div class="content-table p-3 card">
            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Prestación Servicio</th>
                            <th scope="col">Detalle Prestación</th>
                            <th scope="col">Monto Máximo por Evento ($)</th>
                            <th scope="col">Número Eventos Anual Grupo Familiar</th>
                            <th scope="col">Condiciones del Servicio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>Telemedicina <b>[Consulta de Medicina General]</b></td>
                            <td>
                                <p>El Servicio entrega atención de Medicina General vía Telemedicina, de forma ilimitada, para el titular y los integrantes del grupo familiar, al acceder será atendido por un profesional médico acreditado en esta modalidad de atención:</p>
                                <p><b>Consulta médica de medicina general 24/7 </b></p>
                                <p>Emisión de documentos : recetas, orden de exámenes, derivaciones </p>
                                <p>Certificado médico de justificación escolar y laboral Ficha clínica electrónica</p>
                            </td>
                            <td>Cobertura 100% dscto copago</td>
                            <td>Eventos Ilimitados para el Titular y Grupo Familiar.</td>
                            <td rowspan="3">
                                <ul>
                                    <li>Cliente deberá descargar previamente en su celular la aplicación <b>“Rescare app”. </b></li>
                                    <li>Excluye atenciones de urgencia o emergencia médica.</li>
                                    <li><b>Requiere un Smartphone con conexión estable a internet o wifi</b>. Una vez instalado, podrá acceder instantáneamente al Servicio de Teleconsulta de Medicina General.</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="">
                            <td>Telemedicina <b>[Consulta de Psicología]</b></td>
                            <td>
                                <p>El Servicio entrega atención de Psicología vía telemedicina, disponible para el grupo familiar, al acceder podrá agendar la atención con un profesional acreditado en Psicología. </p>
                                <p><b>Teleconsulta Psicología, con agendamiento</b></p>

                                <ul>
                                    <li>Atención con un Psicólogo (a) acreditado (a)</li>
                                    <li>Evaluación de salud mental, Contención emocional</li>
                                    <li>Entrega de recomendaciones y orientación psicológica.</li>
                                    <li>Indicación de derivación a otros profesionales de la salud, cuando corresponda Ficha Clínica electrónica</li>
                                    <li>Agendamiento programado</li>
                                </ul>
                            </td>
                            <td>Cobertura 100% dscto copago</td>
                            <td><b>5 Eventos anuales</b> para el grupo familiar.</td>
                        </tr>
                        <tr class="">
                            <td>Telemedicina <b>[Nutrición]</b></td>
                            <td>
                                <p>El Servicio entrega atención de Nutrición vía telemedicina, disponible para el grupo familiar, al acceder será atendido por un profesional acreditado en Nutrición. </p>
                                <p><b>Teleconsulta Psicología, con agendamiento</b></p>

                                <ul>
                                    <li>Atención con un Psicólogo (a) acreditado (a)</li>
                                    <li>Evaluación de salud mental, Contención emocional</li>
                                    <li>Entrega de recomendaciones y orientación psicológica.</li>
                                    <li>Indicación de derivación a otros profesionales de la salud, cuando corresponda Ficha Clínica electrónica</li>
                                    <li>Agendamiento programado</li>
                                </ul>
                            </td>
                            <td>Cobertura 100% dscto copago</td>
                            <td><b>5 Eventos anuales</b> para el grupo familiar.</td>
                        </tr>
                        <tr class="">
                            <td>Presencial <b>[Consultas medicas Especialistas en Clínicas o Centros Médicos]</b></td>
                            <td>
                                <p><b>Consultas Médicas de Especialistas</b></p>

                                <ul>
                                    <li>Traumatología y Ortopedia</li>
                                    <li>Pediatría o Medicina General Infantil</li>
                                    <li>Medicina Familiar o General Adulto</li>
                                    <li>Ginecología y Obstetricia  </li>
                                    <li>Urología</li>
                                </ul>
                            </td>
                            <td>Cobertura 100% dscto copago</td>
                            <td><b>5 Eventos anuales</b> para el grupo familiar.</td>
                            <td>
                                <ul>
                                    <li>Aplica el 100% de bonificación en  copago, vía huella electrónica Imed luego de su Cobertura Fonasa o Isapre;  </li>
                                    <li>Casos sin previsión vigente, las atenciones serán realizadas previa coordinación con el Call Center de Assistime en su Red de Prestadores.</li>
                                    <li>La atención es programada y excluye atenciones de urgencia o emergencia médica.</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



</main>

<?php incluirTemplate('footer'); ?>