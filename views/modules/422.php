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
            <h1>SERVICIO DE ASISTENCIA CUIDA TU SALUD</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">SERVICIO DE ASISTENCIA CUIDA TU SALUD<span> | </span></h5>

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

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Prestación Servicio</th>
                        <th scope="col">Detalle Prestación</th>
                        <th scope="col">Monto máximo por evento</th>
                        <th scope="col">Eventos máximos por año</th>
                        <th scope="col">Observaciones y/o Exclusiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CONSULTA INICIAL</td>
                        <td>ATENCION INICIAL O FINAL INCLUYE : ANAMNESIS, EXÁMEN FÍSICO, CONTROL DE PRESIÓN ARTERIAL, CONTROL DE PESO, LA REALIZA UN MEDICO GENERAL , ASI MISMO PUEDE REVISAR EXAMENES QUE SE HAYA REALIZADO, PARA COMPLETAR EL DIAGNOSTICO.</td>
                        <td>100% copago o Prestación</td>
                        <td>3 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>EXÁMEN DE CARDIOLOGÍA</td>
                        <td><b>ELECTROCARDIOGRAMA DE REPOSO (E.C.G)</b>, PERMITE EL ESTUDIO DE ARRITMIAS Y GRAFICA LA ACTIVIDAD CARDIACA, REALIZADO POR UN ESPECIALISTA EN CARDIOLOGIA.</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td>ORDEN MEDICA</td>
                    </tr>

                    <tr>
                        <td>EXÁMENES AUDITIVOS, OTORRINOLARINGOLOGÍA</td>
                        <td>AUDIOMETRÍA , IMPEDANCIOMETRÍA , RADIOGRAFÍA DE CAVIDADES PERINASALES</td>
                        <td>UF 2</td>
                        <td>2</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>EXÁMENES DE UROLOGÍA</td>
                        <td>ANTÍGENO PROSTÁTICO (PSA) ES UN EXAMEN DE LABORATORIO QUE PERMITE OBSERVAR LOS NIVELES DE PSA EN SANGRE, SU RESULTADO FORMA PARTE DE LA PREVENCION DEL CANCER DE PROSTATA.</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>EXÁMENES DE GINECOLOGIA</td>
                        <td>PAPANICOLAU (PAP) Es un procedimiento ginecológico simple, breve y efectivo para detectar a tiempo lesiones en el cuello del útero, que son las primeras señales del cáncer. Se hace por medio de un especulo que se introduce en la vagina y se obtiene la muestra.</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>EXÁMENES DE REUMATOLOGÍA</td>
                        <td>FACTOR REUMATOIDEO, CUANDO SE PRESENTA DOLOR O HINCHAZON EN LAS ARTICULACIONES, MUSCULOS, TENDONES O HUESOS</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td>ORDEN MEDICA</td>
                    </tr>
                    <tr>
                        <td>CONSULTA DE NUTRIOLOGO O NUTRICIONISTA</td>
                        <td>ATENCION PREVENTIVA SOBREPESO U OBESIDAD , LA ASISTENCIA ENTREGA UNA <span class="destacado1">CONSULTA CON NUTRICIONISTA O MÉDICO NUTRIOLOGO</span>, QUE CONTEMPLA EXÁMEN FÍSICO, PESO, TALLA, IMC, GUÍA DE ALIMENTACIÓN Y EDUCACIÓN PARA MODIFICAR HABITOS ALIMENTICIOS</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MEDICA ESPECIALISTA EN GINECOLOGIA Y OBSTETRICIA CONTROL DE EXAMENES </td>
                        <td>LA ASISTENCIA COORDINARA LA ATENCION MEDICA DE ESPECIALIDADES EN <span class="destacado1">GINECOLOGIA Y OBSTETRICIA</span> AMBULATORIA PARA CONTROL O REVICION DE EXAMENES MEDICOS, <span class="destacado1">INCLUYE TOMA DE MUESTRA DE PAP</span>.</td>
                        <td>100% copago o Prestación</td>
                        <td>2</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="3">Beneficio descuento en farmacia SALCOBRAND</td>
                        <td>Medicamentos genericos y bio equivalentes genéricos</td>
                        <td>30% descuento</td>
                        <td rowspan="3">El tope mensual a recibir por cada grupo es de $20.000 (en descuentos), no acumulables.</td>
                        <td rowspan="3">Se excluyen medicamentos oncológicos, inmunológicos, de medicina reproductiva y veterinarios. </td>
                    </tr>

                    <tr>
                        <td>Medicamentos de marca y bio equivalentes de marca </td>
                        <td>10% descuento</td>
                    </tr>
                    <tr>
                        <td>Productos de Laboratorios Preferentes (marca Medipharm)</td>
                        <td>20% descuento</td>
                    </tr>
                </tbody>
            </table>
        </div>

</main>

<?php incluirTemplate('footer'); ?>