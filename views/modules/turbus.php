<?php

require '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');


?>

<main id="main" class="main fs-Poppins">
    <div class="pagetitle d-flex align-items-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/TurBus.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>BENEFICIO TELEMEDICINA TURBUS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="informativo row mb-3">
        <div class="col-lg-6 mb-3">
            <div class="card-info bg-warning p2 h-100">
                <h5 class="titulo">ACTIVACIÓN DEL SERVICIO TELEMEDICINA TURBUS</h5>
                <p class="subtitulo">Excluye atención de urgencia, emergencia médica o preexistencias.</p>
                <ol class="subtitulo">
                    <li>Ingresa a la siguiente URL: https://consultamedica.clinicadigital.cl</li>
                    <li>Completa el número de pasaje requerido.</li>
                    <li>Realiza el registro proporcionando los datos necesarios.</li>
                    <li>Recibirás una contraseña en el correo electrónico que utilizaste para el registro.</li>
                    <li>Regresa al sitio web e ingresa la contraseña para completar el proceso de registro.</li>
                    <li>Una vez registrado, presiona el botón para solicitar atención médica inmediata.</li>
                    <li>Espera unos minutos hasta que un médico te atienda y comience la videollamada de atención.</li>
                    <li>Si aún no tienes una ficha clínica, se creará durante la consulta médica.</li>
                    <li>El médico realizará la consulta médica y te enviará documentos clínicos a tu correo electrónico.</li>
                </ol>
            </div>
        </div>

        <div class="col-lg-6 mb-3">
            <div class="card-info bg-warning p2  h-100">
                <h5 class="titulo">AGENDAMIENTO DE HORAS MÉDICAS CON ESPECIALISTAS</h5>
                <p class="subtitulo">Dentro de la aplicación, selecciona el botón "Agendar hora con especialista", el cual te redireccionará a nuestra central telefónica de agendamiento. Una vez completado el proceso, la cita quedará registrada en tu perfil dentro del sitio web. </p>
                <p class="subtitulo text-red">FRONT1 Cuando el cliente llame solicitando la atencion de telemedicina, se le toman los datos solo se le pregunta si tiene el pasaje y la fecha de compra ya que tiene una validez de 5 dias desde la fecha que se compra el pasaje, se procede a tomarle los datos y se solicita a front2 un numero de orden y se envia para que FRONT2 lo gestione. </p>
            </div>
        </div>
    </div>

    <div class="informativo row mb-3">
        <div class="col-lg-6 mb-3">
            <div class="card-info text-bg-success h-100 d-flex align-items-center">
                PASAJERO+ 3 BENEFICIARIO (NUMERO DE NUESTRA ASISTENCIA 223512590)
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card-info text-bg-warning h-100 d-flex align-items-center">
                UNA VEZ ACTIVADO EL SERVICIO CON EL NUMERO DE PASAJE SE MANTIENE DISPONIBLE POR 5 DIAS
            </div>
        </div>
    </div>

    <div class="card p-3 ">
        <h5 class="card-title">Detalle de Pólizas <span>| Vigencia </span></h5>
        <div class="table-responsive mb-3">
            <table id="tblDetallePolizas" class="table color-primario">

                <thead>
                    <tr>
                        <th>Beneficio</th>
                        <th>Descripción</th>
                        <th>Canal Atención</th>
                        <th>Detalle</th>
                        <th>Monto máximo</th>
                        <th>Eventos máximos por año</th>
                        <th>Excepciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td rowspan="7">TeleMedicina</td>
                        <td rowspan="2">Via Pagina Web</td>
                        <td class="white-space-nowrap">Telemedicina Medicina General</td>
                        <td class="white-space-normal">Entrega atención médica vía Telemedicina, realizada por un médico de Medicina General acreditado. La atención aborda las consultas del paciente y tratamiento médico según historial clínico, revisión de exámenes para su diagnóstico e incluye los siguientes documentos clínicos: receta médica, ordenes médicas, certificado médico escolar o laboral, derivación a especialista cuando corresponda. Servicio incluye ficha médica electrónica</td>
                        <td rowspan="7" class="text-center">-</td>
                        <td rowspan="7">Total Eventos: 3 eventos a elección combinados para el titular y el grupo familiar por cada número de pasaje comprado.</td>
                        <td rowspan="7"  >La Asistencia Telemedicina Turbus es para el Titular del pasaje y su grupo familiar contemplando un máximo de 4 integrantes (titular +3 beneficiarios). Si Cliente no tiene beneficiarios directos, él puede ceder a terceros los servicios, que serán asignados por él, considerando el número y los topes máximos de eventos contratados para el grupo de beneficiarios asignados, en donde la edad máxima de ingreso y permanencia no tiene tope.</td>
                    </tr>
                    <!-- Agregamos una nueva fila que será abarcada por la celda con rowspan -->
                    <tr class="">

                        <td>Consulta Médica Especialista Pediatría o Medicina General Infantil (telemedicina)</td>
                        <td>Atención médica especializada en niños, la entrega un médico con formación en atención pediátrica, capacitado para diagnosticar y manejar diversas patologías asociadas desde el nacimiento del niño hasta aproximadamente los 14 años y adolescencia, propias de su Desarrollo.</td>
                    </tr>

                    <tr class="">
                        <td rowspan="5">Assistime</td>
                        <td>Telemedicina Especialista en Neurología</td>
                        <td>Entrega atención vía telemedicina, adultos, con un especialista acreditado en Neurología en el diagnóstico y tratamiento de las enfermedades cerebrales, nervios y músculos, así como tumores y hemorragias cerebrales, trombosis, demencias, meningitis, encefalitis, epilepsias, párkinson,esclerosis múltiples, parálisis, además de otras afecciones del sistema nervioso humano. Servicio incluye ficha médica electrónica.</td>
                    </tr>
                    <tr class="">

                        <td>Telemedicina Especialista en Dermatología</td>
                        <td>Brinda atención médica vía telemedicina, adultos, con especialistas acreditados en Dermatología, tratando las enfermedades de uno de los órganos más extenso del cuerpo humano como lo es la piel, además de uñas y cabello. Servicio incluye ficha médica electrónica.</td>
                    </tr>

                    <tr class="">
                        <td>Telemedicina Nutrición</td>
                        <td>Entrega atención programada con un Nutricionista acreditado en la evaluación nutricional del paciente, entregando pautas de alimentación y recomendaciones generales de interés para mejorar la calidad de vida de las personas. Realiza derivaciones a otros profesionales si corresponde. Servicio incluye ficha médica electrónica</td>
                    </tr>

                    <tr class="">
                        <td>Telemedicina Psicología</td>
                        <td>Permite atención programada con un Psicólogo acreditado en la evaluación de la salud mental del paciente, su contención emocional, entrega recomendaciones y orientaciones psicológicas para mejorar la calidad de vida de las personas. Realiza derivaciones a otros profesionales si es necesario. Servicio incluye ficha médica electrónica.</td>
                    </tr>

                    <tr class="">
                        <td>Telemedicina Especialista en Medicina Interna</td>
                        <td>Entrega atención en adultos, en múltiples patologías médicas abordando con mayor profundidad los sistemas o subsistemas del cuerpo humano, como los derivados por otros profesionales requeridos para una mejor comprensión del cuadro clínico del paciente. Servicio incluye ficha médica electrónica</td>
                    </tr>

                    <!-- Continúa con las otras filas si es necesario -->
                </tbody>
            </table>

        </div>
    </div>


</main>

<?php incluirTemplate('footer'); ?>