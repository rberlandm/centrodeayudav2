<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://static.theclinic.cl/media/2012/02/abcdin-e1328288265294.jpg" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>ASISTENCIA SALUD INTEGRAL FAMILIAR</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                        <li class="breadcrumb-item active">Pólizas</li>
                    </ol>
                </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA SALUD INTEGRAL FAMILIAR [Código 1153096] <span> | </span></h5>

        <!--  <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">DESCUENTOS EN FARMACIAS CRUZ VERDE HASTA $ 20.000 DEACUERDO AL SIGUIENTE DETALLE </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3 h-100">
                    <p class=" text-uppercase">Se excluyen medicamentos oncologicos, inmunologicos, veterinarios, vacunas y medicina reproductiva </p>
                </div>
            </div>

            div class="col-lg-4">
                <div class="card-danger text-bg-warning  rounded-1 p-3">
                    <p class=" text-uppercase">LOS CLIENTES RIPLEY SE CONTACTARAN A LA ASISTENCIA A TRAVES DEL NUMERO 223512565</p>
                </div>
            </div> 
        </div>  -->

        <div class="table-responsive">
            <table class="table table-bordered table-light table-condensed table align-middle">
                <thead class="bg-encabezado">
                    <tr class="item-middle">
                        <th scope="col">Beneficio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Cobertura</th>
                        <th scope="col">Máximo de eventos al año</th>
                        <th scope="col">Máximo d eventos al año</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="6">CONSULTAS MEDICAS</td>
                        <td>CONSULTA MEDICA MEDICINA GENERAL</td>
                        <td>Incluye anamnesis, estado general de salud, revisión de antecedentes familiares, consulta de interés especifico del cliente, y derivación a especialista si fuese necesario.</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA TRAUMATOLOGÍA Y ORTOPEDIA</td>
                        <td>Especialista dedicado al estudio t tratamiento de lesiones o traumatismos en extremidades y columna y sus consecuencias como fracturas óseas, luxaciones, esguinces y contusiones.</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA PEDIÁTRICA O MEDICINA GENERAL INFANTIL</td>
                        <td>Especialista capacitado para diagnosticar y manejar diversas patologías desde el nacimiento hasta los 14 años.</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td>Hasta los 14 años </td>
                    </tr>
                    <tr>
                        <td>CONSULTA A GINECOLOGÍA Y OBSTETRICIA</td>
                        <td>Especialista en Ginecología y obstetricia capacitado para diagnosticar y manejar diversas patologías de la especialidad</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MÉDICA UROLOGÍA</td>
                        <td>La Urología es la especialidad médico quirúrgica que se encarga de la prevención, diagnóstico y tratamiento de enfermedades morfológicas renales, de las del aparato urinario y retro-peritoneo que afectan a ambos sexos, así como las enfermedades del aparato genital masculino, sin diferencia de edad.</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CONSULTA MEDICA CARDIOLOGÍA O MEDICINA INTERNA</td>
                        <td>Especialista en cardiología capacitado para diagnosticar y manejar diversas patologías de la especialidad</td>
                        <td>Ilimitado</td>
                        <td>2 Eventos</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td rowspan="16">EXÁMENES DE IMAGENOLOGÍA Y RADIOGRAFÍAS</td>
                        <td>RADIOGRAFIA DE TORAX FRONTAL Y LATERAL</td>
                        <td>RADIOGRAFIA DE TORAX FRONTAL Y LATERAL</td>
                        <td rowspan="16">Ilimitado</td>
                        <td rowspan="16">3 Eventos</td>
                        <td rowspan="16">Cliente debe presentar orden medica.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE COLUMNA LUMBAR O LUMBOSACRA</td>
                        <td>RADIOGRAFIA DE COLUMNA LUMBAR O LUMBOSACRA</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE CAVIDADES PERINASALES O SENOS PARANASALES</td>
                        <td>RADIOGRAFIA DE CAVIDADES PERINASALES</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PELVIS, CADERA O CLOXOFEMORAL (NIÑOS Y ADULTOS</td>
                        <td>RADIOGRAFIA DE PELVIS, CADERA O CLOXOFEMORAL (NIÑOS Y ADULTOS</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE RODILLA U HOMBRO</td>
                        <td>RADIOGRAFIA DE RODILLA U HOMBRO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE FEMUR</td>
                        <td>RADIOGRAFIA DE FEMUR</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIERNA (IZQ O DER)</td>
                        <td>RADIOGRAFIA DE PIERNA (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE PIE (IZQ O DER)</td>
                        <td>RADIOGRAFIA DE PIE (IZQ O DER)</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE COSTILLA</td>
                        <td>RADIOGRAFIA DE COSTILLA</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE ESTERNÓN FRONTAL Y LATERAL.</td>
                        <td>RADIOGRAFIA DE ESTERNÓN FRONTAL Y LATERAL.</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                        <td>RADIOGRAFIA DE BRAZO O ANTEBRAZO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE MUÑECA</td>
                        <td>RADIOGRAFIA DE MUÑECA</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE MANO</td>
                        <td>RADIOGRAFIA DE MANO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE RODILLA (IZQ O DER), INCLUYE INFORMA RADIOLOGICO</td>
                        <td>RADIOGRAFIA DE RODILLA (IZQ O DER), INCLUYE INFORMA RADIOLOGICO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE CODO</td>
                        <td>RADIOGRAFIA DE CODO</td>
                    </tr>
                    <tr>
                        <td>RADIOGRAFIA DE DEDOS</td>
                        <td>RADIOGRAFIA DE DEDOS</td>
                    </tr>


                    <tr>
                        <td>MATERNIDAD Y EMBARAZO</td>
                        <td>*ECOTOMOGRAFIA OBSTETRICA *EXAMEN DE LABORATORIO VLRL * EXAMEN HIV, * UROCULTIVO, RECUENTO DE COLONIA Y ANTIBIOGRAMA (examen de orina detecta si hay infeccion urinaria) . *CURVA TOLERANCIA A LA GLUCOSA </td>
                        <td>ECOTOMOGRAFIA OBSTETRICA, VLRL, HIV, UROCULTIVO, RECUENTO DE COLONIA Y ANTIBIOGRAMA, <span class="font-bold text-danger fs-5">CURVA DE TOLERANCIA A LA GLUCOSA A PARTIR DE LAS 25 SEMANAS </span>.</td>
                        <td>Ilimitado</td>
                        <td>1 Eventos</td>
                        <td>Cliente debe presentar orden medica.</td>
                    </tr>

                    <tr>
                        <td rowspan="2">ECOTOMOGRAFIAS</td>
                        <td>
                            <div class="py-3">
                                <p>ECOTOMOGRAFIA TRANSVAGINAL</p>
                                <p>ECOTOMOGRAFIA TRANSRECTAL</p>
                            </div>
                        </td>
                        <td>Examen realizado para revisar órganos genitales femeninos: vagina, útero, cuello del útero, trompas de Falopio y vejiga. Incluye informe radiológico</td>
                        <td rowspan="2">el cliente debe escoger entre 1 de ellas para aplicar al beneficio</td>
                        <td rowspan="2">1 Eventos</td>
                        <td rowspan="2">Cliente debe presentar orden medica.</td>
                    </tr>
                    <tr>
                        <td>ECOTOMOGRAFIA PELVICA MASCULINA </td>
                        <td>ECOTOMOGRAFIA PELVICA MASCULINA: Examen realizado para revisar órganos como la próstata, vejiga, vesículas seminales, para descartar anomalías tumores o cálculos incluye informe radiológico. </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>