<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main ">
    <div class="pagetitle">
        <h1>Template Correos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Template Correos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="mb-3 notas">
        <div class="row">

            <div class="col-md-6">
                <div class="card-nota h-100">
                <p class="font-bold fs-Poppins color-primario fs-5">Nota:</p>
                    <p>hay considerar que las bases de datos llegan a <b>24 a 48hrs</b> de contratación esto como dato interno para ustedes.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-nota h-100">
                    <p class="font-bold fs-Poppins color-primario fs-5">Importante:</p>
                    <p>Favor hay que considerar que, si cliente no posee Folio, si desconoce el nombre del producto, siempre se debe tomar la línea con solicitud de cliente.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contenido fs-Poppins card p-3">
        <div class="contenido-header">
            <h3 class="color-primario font-bold">Plantillas correos Front 1</h3>

            <div class="accordion accordion-flush mb-3" id="accordionFlushExample">

                <div class="accordion-item px-4">

                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Propuesta: Correo de Ordenes </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="email-destinatarios">
                                <ul>
                                    <li><b>Para: </b>[Email Cliente]</li>
                                    <li><b>CC: </b>coordinacionhorasmedicas@assistime.cl; calidad@assistime.cl </li>
                                    <li><b>Asunto: </b>[Rut Cliente sin DV] [Nombre Cliente] - SOLICITUD DE ORDEN MEDICA DE </li>
                                </ul>
                            </div>
                            <div class="email-cuerpo">
                                <p>Buenas Tardes. </p>
                                <p>Reciba un saludo cordial de parte de Assistime.</p>
                                <p>Solicitamos adjuntar orden médica de los exámenes requeridos por el profesional.</p>
                                <p><b class="bg-warning p-1">Al correo de: coordinacionhorasmedicas@assistime.cl<br>
                                        con copia a Calidad@assistime.cl </b></p>
                                <div>
                                    <ul>
                                        <li>Indicando en asunto Rut del titular</li>
                                        <li>En mensaje escribir nombre del Paciente y Rut</li>
                                    </ul>
                                </div>
                                <p><b>Es importante mencionar que sin el documento no podemos agendar cita para la toma de examen</b></p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion-item px-4">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Propuesta: Correo Rescare / Clínica Digital</button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="email-destinatarios">
                                <ul>
                                    <li><b>Para: </b>contacto@rescare.cl;josalba.guevara@clinicadigital.cl; javier.oyarzun@clinicadigital.cl;contacto@clinicadigital.cl </li>
                                    <li><b>CC: </b>coordinacionhorasmedicas@assistime.cl; calidad@assistime.cl </li>
                                    <li><b>Asunto: </b>ENFERMERA A DOMICILIO /[NOMBRE DE PACIENTE]/ [RUT PACIENTE] /ASISTENCIA SALUD PROGRAMA DOMICILIARIO/ABC DIN </li>
                                </ul>
                            </div>
                            <div class="email-cuerpo">
                                <p>Estimados </p>
                                <p>Junto con saludar favor gestionar la siguiente atención para paciente</p>
                                <p>Datos de cliente</p>
                                <div>
                                    <ul>
                                        <li>Orden:</li>
                                        <li>Rut Titular</li>
                                        <li>Nombre Titular: </li>
                                        <li>Rut Paciente: </li>
                                        <li>Nombre Paciente: </li>
                                        <li>Teléfonos</li>
                                        <li>Dirección</li>
                                        <li>Sponsor</li>
                                        <li>Tipo de Solicitud</li>
                                        <li>Fecha de Solicitud</li>
                                        <li>SINTOMAS</li>
                                        <li>Fecha y Horarios de Preferencia del cliente</li>
                                        <li>Fecha de contratación</li>
                                    </ul>
                                </div>
                                <p>Sin otro particular</p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <h3 class="color-primario font-bold">Formato Solicitudes Analistas</h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">

                <div class="accordion-item px-4">

                    <h2 class="accordion-header" id="flush-headingTree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTree">
                            Caso #1 - Actualizar o Ingresar cliente en buscador </button>
                    </h2>
                    <div id="flush-collapseTree" class="accordion-collapse collapse " aria-labelledby="flush-headingTree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="email-destinatarios">
                                <ul>
                                    <li><b>Para: </b></li>
                                    <li><b>CC: </b></li>
                                    <li><b>Asunto: </b>BUSCADOR: ACTUALIZAR O INGRESAR CLIENTE:[NOMBRE CLIENTE] RUT: [RUT CLIENTE] </li>
                                </ul>
                            </div>
                            <div class="email-cuerpo">
                                <p>Buenas tardes</p>
                                <p> Junto con saludar, favor actualizar o ingresar nombre de cliente en base de buscador:</p>
                                <div>
                                    <ul>
                                        <li><b>Rut Cliente: </b> [12345678-9</li>
                                        <li><b>Nombre Cliente: </b> [Juan Perez]</li>
                                    </ul>
                                </div>
                                <p>Saludos Cordiales</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion-item px-4">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Caso #2 Activar beneficio farmacia</button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="email-destinatarios">
                                <ul>
                                    <li><b>Para: </b></li>
                                    <li><b>CC: </b></li>
                                    <li><b>Asunto: </b>Activar beneficio farmacia [Rut Titular] </li>
                                </ul>
                            </div>
                            <div class="email-cuerpo">
                                <p>Buenas tardes</p>
                                <p> Junto con saludar, favor validar activación de beneficio farmacia del cliente:</p>
                                <div>
                                    <ul>
                                        <li><b>Rut Cliente: </b> [12345678-9</li>
                                        <li><b>Nombre Cliente: </b> [Juan Perez]</li>
                                        <li><b>Producto</b>: [ABC FGH]</li>
                                        <li><b>Fecha de contratación</b>: xx-xx-xxxx</li>
                                    </ul>
                                </div>
                                <p>Saludos Cordiales</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item px-4">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Caso #3 Validar Vigencia de Producto</button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse " aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="email-destinatarios">
                                <ul>
                                    <li><b>Para: </b></li>
                                    <li><b>CC: </b></li>
                                    <li><b>Asunto: </b>VALIDAR VIGENCIA RUT: [12345678-9] SPONSOR [XXXXXXXX] </li>
                                </ul>
                            </div>
                            <div class="email-cuerpo">
                                <p>Buenas tardes</p>
                                <p> Junto con saludar, favor actualizar o ingresar nombre de cliente en base de buscador:</p>
                                <div>
                                    <ul>
                                        <li><b>Rut Cliente: </b> [12345678-9</li>
                                        <li><b>Nombre Cliente: </b> [Juan Perez]</li>
                                        <li><b>Producto señalado: </b> [xxxxx]</li>
                                        <li><b>Fecha aprox. Contratación: </b> [xx-xx-xxxx]</li>
                                    </ul>
                                </div>
                                <p>Saludos Cordiales</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php incluirTemplate('footer'); ?>