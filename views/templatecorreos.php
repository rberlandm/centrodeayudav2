<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main vh-100">
    <div class="pagetitle">
        <h1>Template Correos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Template Correos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row fs-Poppins">
        <div class="card p-2">
            <div class="pt-2">
                <h2 class="titulo ps-3">Template Front 1</h2>
                <article class="ps-3">
                <h5 class="card-title"> Ordenes Medicas <span>| Se aplica solamente cuando un cliente solicita generar una atención por un examen medico, el cliente nos debe enviar dicho documento, para ello el SAC envia este correo tipo hacia el cliente</span></h5>
                <div>
                    <ul>
                        <li>Para: [correo del cliente]</li>
                        <li>CC: [coordinacionhorasmedicas@assistime.cl]</li>
                        <li>Asunto: [Rut Cliente sin puntos ni guion] [Nombre del Cliente] - Solicitud de Orden Medica</li>
                        <li></li>
                        <li><p>Buenas Tardes. <br>Reciba un saludo cordial de parte de Assistime.<br>Solicitamos adjuntar orden médica de los exámenes requeridos por el profesional.<br><span class="bg-warning mb-3">Al correo de: coordinacionhorasmedicas@assistime.cl con copia a  Calidad@assistime.cl </span><br><br>• Indicando en asunto Rut del titular<br>• En mensaje escribir nombre del Paciente y Rut<br><b>Es importante mencionar que sin el documento no podemos agendar cita para la toma de examen</b>

                    </p></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                </article>
            </div>
        </div>
    </div>

</main>

<?php incluirTemplate('footer'); ?>