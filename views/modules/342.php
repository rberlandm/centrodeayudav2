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
            <h1>PROGRAMA ATENCION DOMICILIARIA - ASISTENCIA MÁS SALUD</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="ms-3 card-title">PROGRAMA ATENCION DOMICILIARIA - ASISTENCIA MÁS SALUD | [Código: <b>342</b>]<span> | Vigencia: 23-05-2019 A ACTUAL</span></h5>

        <p class="text-bg-warning p-3 rounded-1">MUERTE ACCIDENTAL 100 UF</p>

        <p class="text-bg-warning p-3 rounded-1">NOTA : SE EXCLUYE DE DESCUENTOS MEDICAMENTOS ONCOLOGICOS, INMUNOLOGICOS, VETERINARIOS,VACUNAS Y DE MEDICINA REPRODUCTIVO.</p>

        <p class="text-bg-success p-3 rounded-1">PARA SOLICITAR LA ATENCION DEBE LLAMAR A LOS SIGUIENTES NUMEROS : 6003003600 Y 223512599</p>

        <div class="table-responsive">
            <table id="myTable" class="table table-hover table-bordered table-light">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Monto máximo por evento</th>
                        <th scope="col">Eventos máximos por año</th>
                        <th scope="col">Observaciones y/o Exclusiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>COORDINACIÓN DE VISITA MÉDICO O DE UNA ENFERMERA A DOMICILIO</td>
                        <td class="text-bg-warning">EN RADIO URBANO EL PLAZO ES DE UNA HORA, SE PUEDE REEMPLAZAR ESTE SERVICIO POR 1 ATENCION MEDICA DE URGENCIA AMBULATORIA CON TOPE DE 2 UF</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">4 EVENTOS</td>
                        <td class="text-bg-warning">DISTANCIA DE RADIO URBANO. EL CLIENTE PUEDE ESCOGER EN REEMPLAZO DE MEDICO A DOMICILIO LA ATENCION MEDICA EN MODALIDAD VIDEO-CONSULTA POR LA APLICACIÓN DR. DIGITAL</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>TRASLADO DE AMBULANCIA EN CASO DE ACCIDENTE O ENFERMEDAD</td>
                        <td>TRASLADO EN AMBULANCIA O EN EL MEDIO MÁS IDÓNEO HASTA EL CENTRO HOSPITALARIO O DOMICILIO DEL CLIENTE</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">3 EVENTOS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>EXAMENES DE LABORATORIO</td>
                        <td>SANGRE, ORINA, ELECTROCARDIOGRAMA</td>
                        <td class="text-center text-bg-warning">2,5 UF </td>
                        <td class="text-center">2</td>
                        <td class="text-bg-warning">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>PROCEDIMIENTOS DE ENFERMERÍA EN CLÍNICAS O CENTROS MÉDICOS</td>
                        <td>
                            <ul>
                                <li>ALIVIO DE DOLOR DETERMINADO POR ORDEN MÉDICA</li>
                                <li>POSTURA VÍA INTRAVENOSA O INTRAMUSCULAR DE MEDICAMENTOS</li>
                                <li>ANTIBÍOTICOS</li>
                                <li>ANTINFLAMATORIOS</li>
                                <li>ANALGESICOS O SIMILAR</li>
                                <li>CURACIONES</li>
                                <li>NEBULIZACIONES O APLICACIÓN DE OXÍGENO</li>
                                <li>POSTURA DE YESO O INMOBILIZADOR DE EXTREMIDAD AFECTADA</li>
                            </ul>
                        </td>
                        <td class="text-center text-bg-warning">2 UF</td>
                        <td class="text-center">2 EVENTO</td>
                        <td>DEBE PRESENTAR ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>CONSULTA MÉDICA DERIVACIÓN CON ESPECIALISTA.</td>
                        <td class="text-bg-warning">EN EL CASO QUE EL MEDICO A DOMICILIO RECOMIENDE AL PACIENTE POSTERIOR A LA ATENCION SER ATENDIDO POR UN MEDICO ESPECIALISTA :
                            <ul>
                                <li>CARDIOLOGÍA</li>
                                <li>TRAUMATOLOGÍA</li>
                                <li>GINECOLOGÍA</li>
                                <li>OFTALMOLOGÍA</li>
                                <li>PEDIATRÍA</li>
                                <li>UROLOGÍA</li>
                                <li>BRONCOPULMONAR</li>
                                <li>MEDICINA INTERNA</li>
                            </ul>
                        </td>
                        <td class="text-center">COPAGO $0</td>
                        <td class="text-center">1 EVENTO</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ORIENTACION MEDICA TELEFONICA </td>
                        <td></td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td class="text-center">SIN LÍMITE</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>BENEFICIO FARMACIAS SALCOBRAND</td>
                        <td>INDICANDO RUT DEL TITULAR, 25% DE DESCUENTO EN MEDICAMENTOS GENERICOS, 10% DE DESCUENTO EN MEDICAMENTOS DE MARCA, 20% DE DESCUENTO EN MEDICAMENTOS MEDIPHARM</td>
                        <td></td>
                        <td class="text-center">$20.000</td>
                        <td></td>
                    </tr>



                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            });
        </script>
</main>

<?php incluirTemplate('footer'); ?>