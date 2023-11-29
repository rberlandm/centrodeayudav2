<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pauta de Calidad y Errores</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Calidad de Servicio</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="contenido  ">
        <!-- Pauta Calidad  -->
        <div class="card p-2 mb-3 ">
            <div class="contenido-titulo">
                <h1>Pauta de Calidad <span> | Today</span></h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">BIENVENIDA SALUDO Y PROTOCOLO</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Saludo</div>
                            <div class="col-md-9 descripcion">Saluda Coordialmente dando la bienvenida a la Empresa ( Dependiendo del Sponsor) / Personaliza el llamado dando su nombre y apellido</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Protocolo</div>
                            <div class="col-md-9 descripcion">Menciona fecha / Menciona que audio se graba</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Despedida</div>
                            <div class="col-md-9 descripcion">Personaliza el llamado con nombre de cliente en despedida/ ofrece ayuda adicional</div>
                        </div>
                    </div>

                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">CONTEXTO (PROCEDIMIENTO)</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Escucha</div>
                            <div class="col-md-9 descripcion">Contestar al Primer Ring (antes de 10') / Escucha activamente para retroalimentarse de información (parafrasea, repite, no interrumpe, se encuentra atento)</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Analisis del Requerimiento</div>
                            <div class="col-md-9 descripcion">Realiza un sondeo(preguntas requeridas) para así dar una respuesta adecuada a las consultas del cliente / Mantiene un manejo de la conversación en relación a los tiempos de gestion de la llamada (De acuerdo a cada requerimiento)</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Procedimientos</div>
                            <div class="col-md-9 descripcion">Entrega información completa y clara (Coberturas, Fechas, Procedimientos, Solicitudes anteriores o escala solicitudes a otras áreas, incidencias en el servicio) / Informa los plazos de coordinación de acuerdo a cada tipo de atenciones medicas (Urgencias, Orientaciones, Exámenes, atenciones medicas presenciales, domiciliarias y telemedicina)</div>
                        </div>
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Objeciones</div>
                            <div class="col-md-9 descripcion">Demuestra habilidad para el manejo de objeciones (Ej. No le gusta la clinica, desea coberturas adicionales, Excepciones de cobertura, retención, etc.)/ Responsabiliza a terceros por molestia de cliente (Sponsor, prestadores o colaboradores)</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">USO DE SISTEMA (CONTEXTO)</div>
                        </div>
                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Verificación de Datos</div>
                            <div class="col-md-9 descripcion">Verifica al cliente (Rut/ Nombre Completo/ Producto/ Teléfono/ Cobertura</div>
                        </div>

                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Tipificación</div>
                            <div class="col-md-9 descripcion">Tipificación de producto y gestiones correspondiente (Tipificación / Tipo de atención / Producto / Descripción )</div>
                        </div>
                    </div>

                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">MANEJO DE SILENCIOS</div>
                        </div>
                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Manejo de silencios</div>
                            <div class="col-md-9 descripcion">Informa al cliente que esta verificando en sistema para responder su pregunta (si aplica) / Agradece al retomar la llamada / Retoma la llamada como máximo en 1 minuto</div>
                        </div>
                    </div>

                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">AMABILIDAD</div>
                        </div>
                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Amabilidad</div>
                            <div class="col-md-9 descripcion">Maneja un trato respetuoso(no ironico) / Es cordial utilizando técnicas de cortesia</div>
                        </div>
                    </div>

                    <!-- bloque -->
                    <div class="card-pauta">
                        <div class="row px-2">
                            <div class="col-md-12 titulo">VOZ Y LENGUAJE</div>
                        </div>
                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Voz</div>
                            <div class="col-md-9 descripcion">Que su tono de voz tenga Sonrisa Telefonica / Maneje el volumen, el timbre e intensidad de su voz acorde a la gestión / Modula</div>
                        </div>

                        <!-- Item -->
                        <div class="row px-2">
                            <div class="col-md-3 categoria">Lenguaje</div>
                            <div class="col-md-9 descripcion">Evita Frases duditativas, titubeos, contradicciones / Utiliza muletillas, modismos, coloquialismos / Es formal con el cliente (no tutea ), no dice improperios, siempre empatico y amable.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Pauta Calidad  -->
        <div class="card p-2 mb-3 ">
            <div class="contenido-titulo">
                <h1>Tabla de Errores <span> | Today </span></h1>
            </div>

            <div class="row">


            </div>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>