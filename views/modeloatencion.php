<?php

require '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

$datos = obtenerDatosJson('detalletipificaciones');

?>

<main id="main" class="main ">
    <div class="pagetitle">
        <h1>Modelo Atención</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Tips Atenciones</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row fs-Poppins">
        <div class="col-lg-6 script-atencion">
            <div class="card p-2">
                <div class="text-center pt-2">
                    <h2 class="titulo">SCRIPT MODELO DE ATENCIÓN</h2>
                    <h3 class="subtitulo">AGENDAMIENTO OPERACIONES</h3>
                </div>
                <div class="contenido px-3">
                    <p><i>Protocolo de Atención</i></p>
                    <blockquote>
                        <div class="bg-warning p-2 rounded-1"><b>Script de bienvenida:</b>
                            <ul class="list-colas">
                                <li><span class="font-bold">Cola 69: </span> Bienvenido/da a agendamiento de exámenes medicos, habla xxxx ¿En que te puedo ayudar?</li>
                                <li><span class="font-bold">Otras: </span>Buenos días/tardes/noches, Bienvenido a Assistime mi nombre es ………………… ¿Con quién tengo el gusto de hablar?</li>
                            </ul>
                        </div>
                        <p></p>
                        <p>Don/Sra./Srta. ¿En qué le puedo ayudar?</p>
                        <p>Para mejorar la calidad del servicio le informamos que la llamada está siendo grabada con fecha de hoy XX</p>
                        <p class="text-center"><i>(Cuando retomes el contacto con cliente)</i> <strong>“Gracias por mantenerse en línea”</strong></p>
                        <p><i>Verificar Con Rut, PRODUCTO Y VIGENCIA en base.</i></p>
                        <p><b>Don/Sra./Srta. Su Producto es XXXXXXXX con Vigencia desde el XX-XX-XX</b></p>
                        <div class="d-flex justify-content-center py-3">
                            <div class="recuadro">
                                <p><i>(En caso de que cliente no tenga Rut del titular)</i></p>
                                <p><b>Don/Sra./Srta. Favor se solicita que en cuanto usted posea el Rut nos vuelva a llamar para atender su solicitud</b></p>
                            </div>
                        </div>
                        <p><b>Entonces Don/Sra./Srta. De acuerdo con lo informado su solicitud es:</b></p>
                        <p><i>(Reformular la petición del cliente)</i></p>
                        <p><b>Evaluar cobertura,</b> en caso que su requerimiento de asistencia no este dentro de la cobertura debe informar al Cliente.</p>
                        <P><b>De acuerdo con su solicitud vamos a ingresar los datos para que, en un plazo máximo de 48 a 72 horas HÁBILES, se contacten con usted para gestionar su coordinación. (Dependiendo de la gestión de urgencia)</b></P>
                        <div class="d-flex justify-content-center py-3">
                            <div class="w-75">
                                <p><i>(Gestionar Registro de los datos del requerimiento de acuerdo con el producto que cliente tiene vigente)</i></p>
                            </div>
                        </div>
                    </blockquote>
                    <blockquote class="datosPlanilla">
                        <h2 class="titulo text-center">Datos que se deben solicitar y tipificar</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2">
                                    <ul>
                                        <li>RUT TITULAR / RUT PACIENTE</li>
                                        <li>NOMBRE COMPLETO</li>
                                        <li>TELÉFONOS DE CONTACTO (DEBE SOLICITAR 2)</li>
                                        <li>CORREO ELECTRÓNICO</li>
                                        <li>DIRECCIóN</li>
                                        <li>EDAD</li>
                                        <li>PREVISION</li>
                                        <li>TIPO DE ATENCIÓN</li>
                                        <li>PRODUCTO</li>
                                        <li>DESCRIPCIóN</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2">
                                    <ul>
                                        <li class="mb-2"><b>STATUS CALIDAD</b> <i>
                                                <ul>
                                                    <li>CONSULTA INTERNA</li>
                                                    <li>CONSULTA EXTERNA</li>
                                                    <li>PENDIENTE DERIVACION</li>
                                                    <li>DERIVACION</li>
                                                    <li>REAGENDAMIENTO</li>
                                                    <li>CORTE CON CONTACTO</li>
                                                    <li>CORTE SIN CONTACTO</li>
                                                </ul>
                                            </i></li>
                                        <li><b>OBSERVACION FRONT 1</b> <i>(Se debe solicitar a cliente rango de hora y disponibilidad de día para la atención, detallar claramente las necesidades)</i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </blockquote>
                    <blockquote>
                        <p><b>¿Tiene usted alguna otra duda o consulta?</b> <i>Si la respuesta es no (ofrece ayuda adicional)</i></p>
                        <p>Personaliza el llamado con nombre de cliente en despedida</p>
                        <p><b>Gracias por llamar a Assistime, le agradezco su tiempo y recuerde que hablo con </b><i>(Nombre y Apellido)</i> <b>Que tenga buena tarde</b></p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-lg-6 tips-atencion">
            <div class="card p-2">
                <div class="text-center pt-2">
                    <h2 class="titulo">TIPS DE ATENCIÓN</h2>
                    <h3 class="subtitulo">FRONT 1</h3>
                </div>
                <div class="contenido px-3">
                    <ul>
                        <li>Saludar a la persona que no llama por su nombre (titular, paciente)</li>
                        <li>Usar un lenguaje adecuado y amable</li>
                        <li>Tener siempre una sonrisa Telefónica.</li>
                        <li>Si llama un vendedor y te indica que desea hacer una solicitud se debe preguntar si el cliente esta con él, que por favor lo pase al teléfono.</li>
                        <li>Cuando te soliciten exámenes preguntar, si tiene la orden médica a la mano y que te indique textual cuales son los exámenes que necesita para saber si tiene cobertura o no. </li>
                        <li>Si son exámenes de laboratorio se dejan en una sola línea y si solicita otros como mamografía, pap, electro, se hacen en líneas diferentes nunca escribir todo junto.</li>
                        <li>. Ser concretos en las respuestas antes las dudas de los clientes. (siempre tener la póliza a la mano)</li>
                        <li>Indicar tiempo de gestión de 48 a 72 hrs hábiles.</li>
                        <li>Si se tiene algún inconveniente al momento de la atención en el centro médico y le están cobrando o no le reconocen el convenio siempre llamar a la asistencia para dar los pasos a seguir no se debe cancelar las atenciones.</li>
                        <li>Indicar que siempre se gestiona los exámenes de acuerdo a la cobertura de la póliza el resto se cancela por aparte. </li>
                        <li>Si solicitan exámenes de laboratorio hay que solicitar correo para en la o llamada o cuando la finalice pueda enviar un correo para que envíen las ordenes médicas.</li>
                    </ul>
                </div>
            </div>

            <div class="card p-2 bg-warning">
                <div class="contenido px-3">
                    <p class="m-0">NOTA: EJECUTIVO DE SAC NO PUEDE OFRECER REEMBOLSOS O DEVOLUCIONES, SOLO COORDINACION LO PUEDE OFRECER, EN CASO QUE CLIENTE INDIQUE QUE LE COBRARON EN CENTRO MEDICO EN ESE CASO SE LE TOMARA LOS DATOS Y SE ESCALARA POR MENSAJE Y POR CORREO A COORDINACION PARA QUE LO REVICE</p>
                </div>
            </div>

            <div class="card p-2 bg-warning">
                <div class="contenido px-3">
                    <p class="m-0">NOTA: ATENCIONES DE TELECONSULTA POR ESPECIALIDAD DE TURBUS SE ESCALA A COORDINACION HORAS MEDICAS</p>
                </div>
            </div>

            <div class="card p-2 bg-warning">
                <div class="contenido px-3">
                    <p class="m-0">NOTA: RECORDAR SIEMPRE VERIFICAR EN CASO QUE SOLICITEN RE ENVIO DE CARTA SI CLIENTE ESTA HABILIDADO POR CONVENIO O I-MED, ESTO SE PUEDE REVISAR CON LA PREVISION DE CLIENTE, ESTE DATO SE VERIFICA CON LA CARTA DE ATENCION</p>
                </div>
            </div>

            <div class="card p-2 bg-warning">
                <div class=" px-3">
                    <p class="m-0">NOTA: SI CLIENTE INDICA QUE ESTABA EN LLAMADA CON EJECUTIVO PERO SE LE CORTA, DEBEN TOMAR NUEVO REQUERIMIENTO, AHORA SI USTEDES ESTABAN HABLANCO CON CLIENTE Y SE CORTA EL LLAMADO, DEBEN DEJARLO COMO UN CORTE CON CONTACTO</p>
                </div>
            </div>
        </div>
    </div>



</main>

<?php incluirTemplate('footer');

?>