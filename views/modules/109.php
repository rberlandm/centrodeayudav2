<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">
        <img src="https://assets-global.website-files.com/641c71dbd14ab4774355779b/6515df4264016fc268fbe1f1_Logo%20actualizado_Medismart-04.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>MEDI-ASSIST </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">MEDI-ASSIST [Código: <b>119</b>]<span> | Vigencia: 01-02-2021 A JUNIO 2022</span></h5>

        <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i>NO APLICA PARA CLIENTES SIN PREVICIÓN VIGENTE FONASA E ISAPRES</span></p>

        <!--         <p><span class="d-flex align-items-center text-bg-warning p-2 rounded-1"><i class='bx bxs-message-alt-error text-white  me-2'></i>RENUNCIA Y RETRACTACIÓN: <br>Para tales efectos deberá realizar el procedimiento de inhabilitación o desactivación en la App “ASISTENCIA DOCTOR DIGITAL” desde el menú “cuenta” y seleccionando la opción “deshabilitar”. De este modo el servicio quedará inactivo en 24 horas. </span></p> -->


        <div class="table-responsive">
            <table id="" class="table table-hover table-bordered table-light">
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
                        <td rowspan="4">SERVICIO CONSULTAS MEDICAS Y ESPECIALIDADES</td>
                        <td class="text-bg-warning">CONSULTA MEDICA MEDICINA GENERAL</td>
                        <td>INCLUYE:
                            <ul>
                                <li>ANAMNESIS</li>
                                <li>ESTADO GENERAL DE SALUD</li>
                                <li>REVISIÓN DE ANTECEDENTES FAMILIARES</li>
                                <li>CONSULTA DE INTERÉS ESPECIFICO DEL CLIENTE</li>
                                <li>DERIVACIÓN A ESPECIALISTA SI FUESE NECESARIO</li>
                            </ul>
                        </td>
                        <td>ILIMITADO</td>
                        <td rowspan="4" class="text-bg-warning">3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="text-bg-warning">CONSULTA MÉDICA PEDIÁTRICA O MEDICINA GENERAL INFANTIL</td>
                        <td>ESPECIALISTA CAPACITADO PARA DIAGNOSTICAR Y MANEJAR DIVERSAS PATOLOGÍAS DESDE EL NACIMIENTO HASTA LOS 14 AÑOS.</td>
                        <td>ILIMITADO</td>
                        <td class="text-bg-warning">HASTA LOS 14 AÑOS</td>
                    </tr>

                    <tr>
                        <td class="text-bg-warning">CONSULTA MÉDICA DE ESPECIALIDAD UROLOGÍA</td>
                        <td>ESPECIALISTA EN UROLOGÍA CAPACITADO PARA DIAGNOSTICAR Y MANEJAR DIVERSAS PATOLOGÍAS DE LA ESPECIALIDAD</td>
                        <td>ILIMITADO</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="text-bg-warning">CONSULTA MEDICA DE ESPECIALIDAD GINECOLOGIA Y OBSTETRICIA</td>
                        <td>ESPECIALISTA EN GINECOLOGIA Y OBSTETRICIA CAPACITADO PARA DIAGNOSTICAR Y MANEJAR DIVERSAS PATOLOGÍAS DE LA ESPECIALIDAD</td>
                        <td>ILIMITADO</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>SERVICIO EXAMENES DE LABORATORIO CLINICO</td>
                        <td>EXAMENES DE LABORATORIO</td>
                        <td class="text-bg-warning">
                            <ul>
                                <li><b>EMOGRAMA:</b> FRECUENTE EN ESTUDIOS DE ANEMIAS, CUADROS INFECCIOSOS ENTRE OTROS.</li>
                                <li><b>PERFIL LIPIDICO:</b> EXAMEN DE SANGRE QUE INCLUYE PARAMETROS PARA COMPLEMENTAR DIAGNOSTICO INCLUYE: COLESTEROL TOTAL, TRIGLICERIDOS VDRL, HDL COLESTEROL, LDL COLESTEROL, COLESTEROL TOTAL/ HDL VLDL- COLESTEROL </li>
                                <li><b>PERFIL BIOQUIMICO:</b> EXAMEN DE SANGRE QUE INCLUYE PARAMETROS PARA COMPLEMENTAR DIAGNOSTICO INCLUYE: GLUCOSA,NITROGENO UREICO, UREA, ACIDO URICO, COLESTEROL TOTAL,PROTEINAS TOTALES, ALBUMINA,GLOBULINA,BILIRRUBINA TOTAL, TRANSAMINASAS GOT Y GPT, FOSFATASAS ALCALINAS, CALCIO, FOSFORO. </li>
                                <li><b>GLICEMIA:</b> PERMITE REVISAR EL NIVEL DE AZUCAR EN LA SANGRE (INCLUYE TOMA DE MUESTRA DE SANGRE)</li>
                            </ul>
                        </td>
                        <td>ILIMITADO</td>
                        <td class="text-bg-warning">3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td rowspan="6">SERVICIO DE IMAGENOLOGIA, ECOTOMOGRAFIA, MAMOGRAFIA, (E.C.G)</td>
                        <td>ECOTOMOGRAFIA OBSTETRICA</td>
                        <td>PERMITE DETERMINAR LA PRESENCIA DE EMBARAZO</td>
                        <td rowspan="6">ILIMITADO</td>
                        <td rowspan="6">3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                        <td rowspan="6">ORDEN MEDICA</td>
                    </tr>

                    <tr>
                        <td>ECOTOMOGRAFIA PELVICA MASCULINA</td>
                        <td>EXAMEN REALIZADO PARA REVISAR ÓRGANOS COMO:
                            <ul class="mt-2">
                                <li>LA PRÓSTATA</li>
                                <li>VEJIGA</li>
                                <li>VESÍCULAS SEMINALES</li>
                            </ul>
                            <p>PARA DESCARTAR ANOMALÍAS TUMORES O CÁLCULOS INCLUYE INFORME RADIOLÓGICO.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>ECOTOMOGRAFIA PELVICA FEMENINA</td>
                        <td>PERMITE VISUALIZAR EL SISTEMA REPRODUCTIVO FEMENINO INCLUYE UTERO, TROMPAS DE FALOPIO Y OVARIOS </td>
                    </tr>
                    <tr>
                        <td>ECOTOMOGRAFIA ABDOMINAL</td>
                        <td>ES UN EXAMEN DIAGNOSTICO QUE PERMITE VER ORGANIS COMO EL PANCREAS , HIGADO,RIÑONES, VESICULA, Y BAZO , ASI COMO LOS VASOS SANGUINEOS DEL CUERPO. </td>
                    </tr>
                    <tr>
                        <td>MAMOGRAFIA BILATERAL</td>
                        <td>PERMITE LA DETECCIÓN TEMPRANA DE LAS ENFERMEDADES Y CÁNCER MAMARIO.</td>
                    </tr>
                    <tr>
                        <td>ELECTROCARDIGRAMA DE REPOSO (E.C.G)</td>
                        <td>PERMITE EL ESTUDIO DE LAS ARRITMIAS Y GRAFICA LA ACTIVIDAD CARDIACA EN FUNCIÓN DEL TIEMPO.</td>
                    </tr>

                    <tr>
                        <td rowspan="10">EXÁMENES DE IMAGENOLOGÍA : RADIOGRAFÍAS</td>
                        <td>RADIOGRAFIA DE TORAX SIMPLE O AP Y LATERAL</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                        <td rowspan="10">ILIMITADO</td>
                        <td rowspan="10">3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                        <td rowspan="10">ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE HOMBRO</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE MANO</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIE </td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PELVIS, CADERA ADULTO Y NIÑOS </td>
                        <td>EXAMEN REQUERIDO PARA ADULTOS MAYORES Y PARA LOS RECIEN NACIDOS (3MESES). INCLUYE INFORME RADIOLOGICO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE RODILLA </td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE TOBILLO</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIERNA</td>
                        <td>(IZQUIERDO,DERECHO), INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE CLAVICULA</td>
                        <td>INCLUYE INFORME EMITIDO POR MEDICO RADIODOLO.</td>
                    </tr>

                    <tr>
                        <td rowspan="2">BOX DE URGENCIA AMBULATORIO</td>
                        <td class=" font-bold text-bg-warning">CONSULTA MEDICA DE URGENCIA AMBULATORIA </td>
                        <td>EN HORARIO HABIL O INHABIL ENTREGADO POR UN MEDICO GENERAL O ESPECIALISTA DE TURNO AL MOMENTO DE INGRESAR A LA CLINICA</td>
                        <td class="text-center font-bold text-bg-warning">4 UF</td>
                        <td>3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                        <td rowspan="2" class=" text-bg-warning font-bold">APLICA SOLO EN REGION METROPOLITANA</td>
                    </tr>
                    <tr>
                        <td class=" font-bold text-bg-warning">EXAMENES O PROCEDIMIENTOS MEDICOS ASOCIADOS A LA CONSULTA MEDICA DE URGENCIA</td>
                        <td>LA ATENCION INCLUYE EXAMENES DE LABORATORIO CLINICO O IMÁGENES BONIFICABLES, PROCEDIMIENTOS SOLICITADOS POR EL MEDICO DE TURNO EN URGENCIAS</td>
                        <td class="text-center font-bold text-bg-warning">2 UF</td>
                        <td>3 EVENTOS ANUALES PARA EL GRUPO FAMILIAR</td>
                    </tr>>

                </tbody>

            </table>
        </div>
        <script>
            /*             $(document).ready(function() {
                var table = $('#myTable').DataTable({
                    ordering: false,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    },
                });
            }); */
        </script>
</main>

<?php incluirTemplate('footer'); ?>