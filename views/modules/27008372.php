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
            <h1>ASISTENCIA SALUD INTEGRAL TOTAL (Septiembre 2023)</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA SALUD INTEGRAL TOTAL (Septiembre 2023)<span> | </span></h5>

        <!--         <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">APLICA A CLIENTES CON PREVISION VIGENTE FONASA O ISAPRES</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 ">
                    <p class=" text-uppercase">Orientación medica telefónica (24 horas 365 días del año)</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div>
        </div> -->

        <div class="row mb-2 p3">
            <div class="info py-1 px-3 ">
                <div class="card-warning text-bg-warning p-3 rounded-1">NUMERO DE LA ASISTENCIA 22351 2519 ( TITULAR + 3 BENEFICIARIOS ) SIN TOPE DE EDAD</div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">BENEFICIO</th>
                        <th scope="col">PRESTACIÓN SERVICIOS</th>
                        <th scope="col">DETALLE PRESTACIÓN</th>
                        <th scope="col">N° EVENTOS ANUAL</th>
                        <th scope="col">Observaciones y/o Exclusiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6">CONSULTAS MEDICAS ESPECIALISTAS</td>
                        <td>CONSULTA MEDICA MEDICINA GENERAL</td>
                        <td>Atención de un profesional de Medicina
                            General que atiende de manera integral al
                            paciente, respondiendo además temas de
                            interés específico. Derivando a especialista si
                            es necesario. Realiza diagnóstico con apoyo
                            de exámenes médicos complementarios a la
                            atención médica.</td>
                        <td>2</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>CONSULTA MEDICA DE TRAUMATOLOGIA Y ORTOPEDIA</td>
                        <td>Atención médica entregada por un Médico
                            Especialista en Traumatología dedicado al
                            estudio y tratamiento de lesiones o
                            traumatismos en extremidades o columna y
                            sus consecuencias como lo son: fracturas
                            óseas, luxaciones, esquinces y contusiones.</td>
                        <td>2</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>CONSULTA MÉDICA PEDIÁTRICA O MEDICINA GENERAL INFANTIL</td>
                        <td>Atención médica especializada en niños, la
                            entrega un médico con formación en atención
                            pediátrica, capacitado para diagnosticar y
                            manejar diversas patologías asociadas desde el
                            nacimiento del niño hasta aproximadamente los
                            14 años y adolescencia, propias de su Desarrollo</td>
                        <td>2</td>
                        <td>Hasta los 14 años </td>
                    </tr>
                    <tr>
                        <td>CONSULTA A GINECOLOGÍA Y OBSTETRICIA</td>
                        <td>Atención médica ambulatoria entregada por un
                            profesional Especialista en Ginecología y
                            Obstetricia capacitado para diagnosticar y
                            manejar diferentes patologías propias de la
                            especialidad. Así mismo puede revisar los
                            exámenes que se haya realizado el paciente para
                            complementar diagnóstico clínico.</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA UROLOGÍA</td>
                        <td>Atención médica ambulatoria entregada por un
                            profesional Especialista en Urología capacitado
                            para diagnosticar y manejar diferentes
                            patologías de la especialidad. Así mismo puede
                            revisar los exámenes que se haya realizado el
                            paciente para complementar diagnóstico clínico</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MEDICA CARDIOLOGÍA O MEDICINA INTERNA</td>
                        <td>Atención Médica Ambulatoria entregada por un
                            profesional Especialista en Cardiología o en
                            Medicina Interna, capacitado para diagnosticar y
                            manejar diferentes patologías de la especialidad.
                            Así mismo puede revisar os exámenes que se
                            haya realizado el paciente para complementar
                            diagnóstico clínico.</td>
                        <td>2</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="2">SERVICIO IMAGENOLOGÍA: </td>
                        <td>ECOTOMOGRAFIA TRANSVAGINAL ECOTOMOGRAFIA TRANSRECTAL </td>
                        <td>Examen realizado para examinar órganos
                            genitales femeninos: vagina, útero, cuello del
                            útero, trompas de Falopio y vejiga). Con un
                            Transductor especializado se explora la zona
                            en estudio. Incluye Informe médico. (Código
                            Fonasa, ISAPRES 04-04-005).</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ECOTOMOGRAFIA PELVICA MASCULINA O FEMENINA </td>
                        <td>Ecotomografía Pélvica Masculina: exámen de
                            ultrasonido que permite examinar órganos
                            como lo son: próstata, vejiga, vesículas seminales
                            y descartar anomalías, tumores o cálculos.
                            Ecotomografía Pélvica Femenina: permite
                            visualizar el sistema reproductivo femenino,
                            incluye útero, trompas de Falopio y ovarios.
                            (Códigos Fonasa, ISAPRES: 04-04-009 y
                            04-04-006).</td>
                        <td>1</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="16">SERVICIO IMAGENOLOGÍA: RADIOGRAFÍAS</td>
                        <td colspan="2">RADIOGRAFIA DE TORAX FRONTAL Y LATERAL</td>
                        <td rowspan="16">3</td>
                        <td rowspan="16">Cliente debe presentar orden medica.</td>
                    </tr>

                    <tr>
                        <td colspan='2'>RADIOGRAFIA DE COLUMNA LUMBAR O LUMBOSACRA</td>
                    </tr>

                    <tr>
                        <td colspan='2'>CAVIDADES PERINASALES </td>
                    </tr>
                    <tr>
                        <td colspan='2'> PELVIS, CADERA O CLOXOFEMORAL </td>
                    </tr>
                    <tr>
                        <td colspan='2'>HOMBRO IZQUIERDO O DERECHO</td>
                    </tr>
                    <tr>
                        <td colspan='2'>FEMUR (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>PIERNA (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'> PIE (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>COSTILLA</td>
                    </tr>
                    <tr>
                        <td colspan='2'>ESTERNÓN FRONTAL Y LATERAL</td>
                    </tr>
                    <tr>
                        <td colspan='2'>BRAZO O ANTEBRAZO (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'> MUÑECA (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>MANO (IZQ, DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>RODILLA (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>CODO (IZQ,DER)</td>
                    </tr>
                    <tr>
                        <td colspan='2'>DEDOS (IZQ,DER)</td>
                    </tr>

                    <tr>
                        <td>MATERNIDAD Y EMBARAZO
                        <td colspan="2">
                            <ul>
                                <li>Ecotomografía Obstétrica (código Fonasa, ISAPRES 04-04-002)</li>
                                <li>Examen de sangre: HIV, incluye toma de muestra sangre</li>
                                <li>Examen de sangre: VDRL, incluye toma de muestra sangre</li>
                                <li>Examen de sangre: Curva Tolerancia a la Glucosa (solo para embarazadas que será solicitado por su médico entre la semana 25 o 26 aprox.). Incluye toma de muestra sangre. No incluye la glucosa que el centro médico entrega y se paga aparte.</li>
                                <li>Examen de Orina: Urocultivo, Recuento colonias y Antibiograma (detecta si hay infección urinaria)</li>
                            </ul>
                        </td>
                        <td>1</td>
                        <td>Cliente debe presentar orden medica.</td>
                    </tr>


                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>