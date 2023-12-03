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
            <h1>AP PROTECCION DENTAL</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title">AP PROTECCION DENTAL [27] <span>| Vigencia 20/08/2018 ACTUAL</span></h5>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> COBERTURAS EN CASO DE URGENCIAS, DOLOR, INFECCION, INFLAMACION, SANGRAMIENTO Y FRACTURA </span></p>

        <div class="row">
            <div class="col-3 d-flex align-items-center justify-content-center">
                <p>Se eliminan</p>
            </div>
            <div class="col-9">
                <p>No incluye pulpotomia o cura formocresolada para niños</p>
                <p>Se elimina Exodoncia diente temporal por urgencia (odontopediatria) de este item</p>
                <p>Se elimina la obturacion en resina y amalgama</p>
            </div>
        </div>

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
                        <td>URGENCIAS</td>
                        <td>Diagnostico de urgencia dental y derivacion a especialista</td>
                        <td>Evaluacioon que se realiza para determinar las difrente patologias buco dental presentes en el cliente</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Procedimientos</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Prescripcion medica</td>
                        <td>Evaluacioon que se realiza para determinar las difrente patologias buco dental presentes en el cliente</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Procedimientos</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>RAYOS X</td>
                        <td>Periapicales individuales y coronales requeridas RETROALVEOLAR: RAYOS POR PIEZA DENTARIA</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Radiografias panoramicas</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td class="text-bg-warning">Colocacion de cemento temporal ( desalojo o solo fracturas)</td>
                        <td>Cementado provisional de coronas y puentes fijos. Reparacion de fracturas en la porcion acrilica de dentaduras parciales o totales</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>No aplica</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Trepanacion por urgencia dental</td>
                        <td class="text-bg-warning">Realiza la trepanacion correspondiente al inicio del ratamiento de conducto en adultos, incluye un control de le especialidad de endodoncia</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Ferulizacion por luxacion dentaria</td>
                        <td>En caso de que el cliente sufra un accidente y a concecuencia de este sufra una luxacion, (soltura de pieza dental) se realizara el tratamiento dental de urgencia</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Retiro de cuerpo extraño</td>
                        <td>Se retirara cualquier objeto o cuerpo extraño que haya quedado en algun procedimiento dental</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td class="text-bg-warning">Scanner inicial a la evaluacion de este procedimiento/ pabellon</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Sutura de tejidos</td>
                        <td class="text-bg-warning">A causa de algun accidente, que comprometa tejido mucoso u oseo el cliente podra solicitar la asistencia para el procedimiento de suturacion</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Drenaje abceso intra oral</td>
                        <td class="text-bg-warning">En caso de infeccion a nivel de encia, pieza dentaria o mucoso el cliente podra hacer uso de esta cobertura, en la que consiste en drenar y remover el abseso e infeccion, dentro de la bolsa que se forma</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Alivio de oclucion diente sintomatico</td>
                        <td class="text-bg-warning">En caso de que el cliente sienta molesta dolor a causa de la altura de la obturacion, podra obtener el servicio de asistencia para pulir la tapadura y dejarla a la altura correspondiente y evitarle la molestia y el dolor</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Tratamiento de alveolitis o hemorragia post exodoncia</td>
                        <td>En caso de que el cliente presente sintomas dedolor o sangrado excesivo podra solicitar la asistencia para realizar tratamiento correspondiente a la uregencia</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Recementacion coronas o protesis fijas y correcciones</td>
                        <td>Cementado provicional de coronas y puentes fijos. Reparacion de fracturas en la porcion acrilica de dentaduras parciales</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td class="text-bg-warning">Pulido radicular sesion de urgencia</td>
                        <td>En caso de que el cliente a causa de una infeccion o sangramiento, podra solicitar limpieza de infeccion interna bajo la encia</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Destartraje supragingibal</td>
                        <td>Limpiez bucal o eliminacion del tartaro o calculo dental</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Profilaxis (pulido dental)</td>
                        <td>Remocion mecanica de la placa bacteriana o dental</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Tecnicas de cepillado</td>
                        <td>En caso de enfermedades periodontales (encias)el cliente podra solicitar la educacion y tecnicas de un correcto cepillado</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior y materiales</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Rx Bite Wing</td>
                        <td>El cliente podra acceder a la toma de radiografias interdentales</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior a la radiografia</td>
                    </tr>
                    <tr>
                        <td>CIRUIA ORAL URGENCIAS</td>
                        <td class="text-bg-warning">Exodoncia simple por urgencia</td>
                        <td class="text-bg-warning">Extraccion de pieza dentaria simple</td>
                        <td class="text-center">100%</td>
                        <td class="text-bg-warning">3 Eventos</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior/ Extraccion de muela del juicio o tercer molar</td>
                    </tr>
                    <tr>
                        <td>CIRUIA ORAL URGENCIAS</td>
                        <td class="text-bg-warning">Exodoncia compleja por urgencia</td>
                        <td class="text-bg-warning">Extraccion de pieza dentaria, incluye un control de extraccion de puntos, si la exodoncia considera la colocacion de puntos</td>
                        <td class="text-center">100%</td>
                        <td class="text-bg-warning">2 Eventos</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior/ Extraccion de muela del juicio o tercer molar/ pabellon</td>
                    </tr>
                    <tr>
                        <td>RESTAURACION URGENCIAS</td>
                        <td>Obturacion amalgama simple, compuesta o compleja</td>
                        <td>Es una aleacion de metales que se utiliza para restaurar los tejidos perdidos por caries</td>
                        <td class="text-center">100%</td>
                        <td>Por caries o fractura dental o desalojo de tapadura: 2 Eventos</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>RESTAURACION URGENCIAS</td>
                        <td>Obturacion en resina simple, compuesta o compleja</td>
                        <td>La resina es un material utilizado en el sector anterior de la cavidad bucal en dientes anteriores para restaurar los daños causados por las caries o por traumatismos</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td class="text-bg-warning">Obturacion compuesta o compleja diente temporal</td>
                        <td class="text-bg-warning">Es una aleacion de vidrio ionomero simple, que se utiliza para restaurar los tejidos perdidos por caries. Es el material ulilizado para las obturaciones en niños</td>
                        <td class="text-center">100%</td>
                        <td>2 Eventos</td>
                        <td>Tratamiento definitivo o posterior/ Odontosedacion</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td class="text-bg-warning">INSTRUCCIÓN ORAL MAS TECNICAS DE CEPILLADO (MOLARES)</td>
                        <td class="text-bg-warning">Se realiza instrucción bucal ademas de tecnicas de cepillado</td>
                        <td class="text-center text-bg-warning">100%</td>
                        <td class="text-bg-warning">2 Eventos</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior/ Odontosedacion</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td class="text-bg-warning">Trepanacion por urgencia dental</td>
                        <td class="text-bg-warning">Realiza la trepanacion correspondiente al inicio de una pulpotomia, o cura formocresolada para niños incluye un control de la especialidad</td>
                        <td class="text-center">100%</td>
                        <td>ilimitados</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior/ Odontosedacion</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td class="text-bg-warning">Exodoncia diente temporal por urgencia (odontopediatria)</td>
                        <td class="text-bg-warning">Extraccion de pieza dentaria en niños</td>
                        <td class="text-center text-bg-warning">100%</td>
                        <td class="text-bg-warning">2 Eventos</td>
                        <td class="text-bg-warning">Tratamiento definitivo o posterior/ Odontosedacion</td>
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