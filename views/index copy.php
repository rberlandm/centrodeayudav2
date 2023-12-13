<?php

include_once 'includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main ">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="contenido mb-3">
        <h1 class="fs-Poppins font-bold color-primario ">INSTRUCION DE TRABAJO : PROBLEMATICAS HABITUALES</h1>
        <div class="meta-info card p-2">
            <p>Favor deben considerar que cada instrucción entregada es para alinear procesos y flujos de atención, se requiere del compromiso de cada uno para que la labor realizada sea gestionada de forma correcta y clara para los clientes que utilizan nuestros servicios, cada omisión afecta directamente al buen funcionamiento del área.</p>
            <div class="autor text-lg-end">
                <h5 class="card-title">De: Cecilia Ortiz Gonzalez<span>| Enviado: jueves, 9 de noviembre de 2023 20:03</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4 mb-3">
                <div class="card h-100 p-3">
                    <h1 class="titulo">
                        Cuando el cliente nos llama para notificar que se encuentra en el centro médico que no consiguen la carta, no le toma la huella, desconocen convenio.
                    </h1>
                    <p></p>
                    <p>El primer paso para realizar es ver es la hora de atención agendada, cuando nos entregan los datos buscamos la carta en el correo y se escala de forma urgente al Whatsapp indicando:</p>
                    <ul>
                        <li>RUT</li>
                        <li>N° DE ORDEN</li>
                        <li>IMED / CONVENIO : Señalar cual es.</li>
                        <li>CENTRO MEDICO</li>
                        <li>HORA DE LA ATENCION : IMPORTANTE (recordar que en la mayoría de los centros anulan las horas después de 15 minutos de atraso)</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-3">
                <div class="card h-100 p-3">
                    <h1 class="titulo">
                        Cuando existan dudas con la Cobertura de alguna Póliza / Expeción en en llamada o no
                    </h1>
                    <p></p>
                    <p>Se indica textual lo señalado por la póliza, se toman los datos completos de la petición del cliente, y se indica que se va a evaluar la cobertura que el señala por el área especialista de Coordinación, donde van a confirmar lo señalado con relación a la cobertura solicitada.</p>
                    <p>La coordinadora será quien determina ante una duda compleja o cuestionamiento de cliente sobre una cobertura.</p>
                    <p>De igual forma ante cualquier duda de procedimiento <strong>se debe pedir 5 o el tiempo necesario en capacitación a Nerissa Pabon</strong> para ser aclarado y saber cómo actuar ante una nueva situación con cliente.</p>
                    <p>Deben siempre realizar preguntas cuando tengan dudas no asumir o dar por echo una idea sin ser confirmada por jefatura.</p>
                    <p class="card-info w-70 text-lg-center">Indicar por WS que enviaron correo.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-3">
                <div class="card h-100 p-3">
                    <h1 class="titulo">Cuando están en llamada y es un pendiente de derivación y se corta
                    </h1>
                    <p></p>
                    <p>Es un corte con contacto para la primera llamada y si el cliente nos vuelve a llamar y les indica que se cortó que ya le había tomado varios datos el ejecutivo que toma la llamada debe tomarle nuevamente el requerimiento e ingresarlo como corresponda. (pendiente de derivación, Reagendamiento)</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-3">
                <div class="card h-100 p-3">
                    <h1 class="titulo">Cuando envíen Médicos a domicilio / urgencias dentales / gruas / para el área de coordinación es importante que en asunto coloque los datos
                    </h1>
                    <p></p>
                    <div class="box-small">
                        <ul>
                            <li>MEDICO A DOMICILIO o URGENCIA DENTAL o GRUA</li>
                            <li>RUT</li>
                            <li>NOMBRE Y APELLIDO</li>
                            <li>N°DE ORDEN ASIGNADO</li>
                            <li>SPONSOR</li>
                        </ul>
                    </div>
                    <p class="card-info w-70 text-lg-center">Indicar por WS que enviaron correo.</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 mb-3">
                <div class="card h-100 p-3">
                    <h1 class="titulo">Cuando el cliente nos llama para consultar por hora que solicito hace días.</h1>
                    <p></p>
                    <p>Lo que se debe realizar en este tipo de casos es enviar un correo con teniendo en cuenta lo siguiente:</p>
                    <p>ASUNTO: CONSULTA HORA / RUT TITULAR / NOMBRE TITULAR</p>
                    <p>En cuerpo de correo señalar los datos que cliente nos entrega, como teléfono de contacto y correo electrónico.</p>
                    <p>Señalar que se escalará el caso para que sea respondido a la brevedad tipificación CONSULTA INTERNA</p>
                    <p class="card-info w-70 text-lg-center">Indicar por WS que enviaron correo.</p>
                </div>
            </div>

        </div>

    </div>
</main>

<?php incluirTemplate('footer'); ?>