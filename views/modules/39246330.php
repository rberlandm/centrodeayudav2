<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">
        <img src="https://corona.vtexassets.com/arquivos/Logo-CORONA-ANIMADO.gif" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>Medicina Especialistas Libre Elección + Telemedicina</h1>
            <h5>Especialistas+Telemedicina</h5>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card-informativa row mb-2 p-2">
        <div class="col-lg-4 mb-2">
            <div class="card bg-warning p-3 mb-3 h-100 ">
                <p><b>importante: </b><i> SERVICIO DE LIBRE ELECCIÖN</i></p>
                <p>Para este servicio solo se <b>activa</b> el I-MED y se agregan sus beneficiario, <b>"la coordinación no pasa por Assistime"</b></p>
                <p>El cliente puede coordinar o solicitar atención en cualquier establecimiento que utilice <b>Fonasa o I-Med</b> </p>
            </div>
        </div>

        <div class="col-lg-4 mb-2">
            <div class="card bg-warning p-3 mb-3  h-100">
                <p><b>importante: </b><i> PROBLEMAS CON LA ATENCIÓN</i></p>
                <p>En caso que un cliente nos informa que presento problemas con su atención del <b>"SERVICIO LIBRE ATENCIÓN"</b> y el centro medico atendida por <b>"FONASA o I-MED"</b>, se debe verificar que este enrolad en I-Med. </p>
                <p>Si esta todo en orden, se debe escalar internamente [Correo], informando de la incidencia con el mayor detalle posible</b> </p>
            </div>
        </div>

        <div class="col-lg-4 mb-2">
            <div class="card bg-warning p-3 mb-3  h-100">
                <p><b>importante: </b><i> ACTIVACIÓN SERVICIO</i></p>
                <p>La activación de los servicios podrá realizarse 72 horas hábiles
                    posteriores a la adquisición de este programa.</p>
            </div>
        </div>
    </div>

    <div class="card-informativa mb-2 p-2">
        <div class="card bg-success p-3 text-center fs-Poppins text-white">
            NUMERO DE LA ASISTENCIA +56223512517
        </div>
    </div>

    <div class="Poliza p-2">
        <div class="detalle-poliza">
            <div class="card p-2">
                <h5 class="card-title">Detalle de Pólizas <span>| Vigencia </span></h5>
                <div class="table-responsive p-2">
                    <table id="tblDetallePolizas" class="table">
                        <thead>
                            <tr>
                            <tr>
                                <th>Beneficio</th>
                                <th>Descripción</th>
                                <th>Detalle</th>
                                <th>Monto máximo</th>
                                <th>Eventos máximos por año</th>
                                <th>Excepciones</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td rowspan="4">TeleMedicina</td>
                                <td>Consulta médica de medicina general 24/7</td>
                                <td>
                                    <ul>
                                        <li>Consulta Médica por Videollamada</li>
                                        <li>Emisión de Recetas Medicamentos</li>
                                        <li>Certificado Laboral y Escolar</li>
                                        <li>Órdenes de Exámenes</li>
                                        <li>Interconsulta o Derivación a Especialista</li>
                                    </ul>
                                </td>
                                <td>-</td>
                                <td>Ilimitado para cada miembro del Grupo Familia</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Teleconsulta Psicologíca</td>
                                <td>
                                    <ul>
                                        <li>Consulta Sicológica por Videollamada</li>
                                        <li>Acompañamiento e incidentes o problemáticas adolescentes</li>
                                        <li>Orientación Familiar</li>
                                        <li>Certificado Laboral y Escolar</li>
                                    </ul>
                                </td>
                                <td>-</td>
                                <td>4 Eventos anuales a elección para el Grupo Familia</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>Teleconsulta Nutricionista</td>
                                <td>
                                    <ul>
                                        <li>Consulta Nutricionista por Videollamada</li>
                                        <li>Diseño Plan Alimenticio </li>
                                        <li>Educación de hábitos alimenticios</li>
                                        <li>Interconsulta o derivación a especialista</li>
                                    </ul>
                                </td>
                                <td>-</td>
                                <td>4 Eventos anuales a elección para el Grupo Familia</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>Teleconsulta Salud Integral de la Mujer</td>
                                <td>
                                    <ul>
                                        <li>Consulta Profesional con matrona por Videollamada</li>
                                        <li>Atención de salud sexual y reproductiva: anticoncepción y prevención de enfermedades de transmisión sexual, planificación familiar.</li>
                                        <li>Atención en el embarazo y puerperio: orientación, educación, solicitud de exámenes durante el embarazo y atención de la puérpera y neonato.</li>
                                    </ul>
                                </td>
                                <td>-</td>
                                <td>4 Eventos anuales a elección para el Grupo Familia</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td rowspan="2">Presencial</td>
                                <td>Consultas Médicas Especialista</td>
                                <td>
                                    <ul>
                                        <li>Pediatría</li>
                                        <li>Urología</li>
                                        <li>Ginecología y Obstetricia</li>
                                        <li>Traumatología y Ortopedia</li>
                                        <li>Medicina General /familiar/Cirugía General </li>
                                    </ul>
                                </td>
                                <td>-</td>
                                <td>4 Eventos anuales a elección para el Grupo Familia</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>Exámenes de Imagenología </td>
                                <td><ul class="list-style-none">
                                    <li>Radiografía de extremidades superiores e inferiores</li>
                                </ul></td>
                                <td>-</td>
                                <td>2 Eventos anuales a elección para el Grupo Familia</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</main>

<?php incluirTemplate('footer'); ?>