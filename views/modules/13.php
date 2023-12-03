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
        <h5 class="card-title">AP PROTECCION DENTAL [13] <span>| Vigencia 01/01/20/08/2018 ACTUAL</span></h5>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> Seguro por muerte accidental por 200 UF</span></p>

        <p><span class="d-flex align-items-center"><i class='bx bxs-message-alt-error text-danger  me-2'></i> COBERTURAS EN CASO DE URGENCIAS, DOLOR, INFECCION, INFLAMACION, SANGRAMIENTO Y FRACTURA </span></p>

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
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Procedimientos</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Prescripcion medica</td>
                        <td>Evaluacioon que se realiza para determinar las difrente patologias buco dental presentes en el cliente</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Procedimientos</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>RAYOS X</td>
                        <td>Periapicales individuales y coronales requeridas</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Radiografias panoramicas</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Colocacion de cemento temporal (solo fracturas)</td>
                        <td>Cementado provisional de coronas y puentes fijos. Reparacion de fracturas en la porcion acrilica de dentaduras parciales o totales</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>No aplica</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Trepanacion por urgencia dental</td>
                        <td>Tratamientos de conducto en adultos y tratamiento de pulpotomia o cura formocresolada para niños</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>No aplica</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Ferulizacion por luxacion dentaria</td>
                        <td>En caso de que el cliente sufra un accidente y a concecuencia de este sufra una luxacion, (soltura de pieza dental) se realizara el tratamiento dental de urgencia</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Retiro de cuerpo extraño</td>
                        <td>Se retirara cualquier objeto o cuerpo extraño que haya quedado en algun procedimiento dental</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Scanner inicial a la evaluacion de este procedimiento</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Sutura de tejidos</td>
                        <td>A causa de algun accidente, el cliente podra solicitar la asistencia para el procedimiento de suturacion</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Drenaje abceso intra oral</td>
                        <td>En caso de infeccion a nivel de encia el cliente podra hacer uso de esta cobertura, en la que consiste en drenar y remover el abseso e infeccion, dentro de la bolsa que se forma</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Alivio de oclucion diente sintomatico</td>
                        <td>En caso de que el cliente sienta molesta dolor a causa de la altura de la tapadura, el podra obtener el servicio de asistencia para pulir la tapadura y dejarla a la altura correspondiente y evitarle la molestia y el dolor</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Tratamiento de alveolitis o hemorragia post exodoncia</td>
                        <td>En caso de que el cliente presente sintomas dedolor o sangrado excesivo podra solicitar la asistencia para realizar tratamiento correspondiente a la uregencia</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Recementacion coronas o protesis fijas y correcciones</td>
                        <td>Cementado provicional de coronas y puentes fijos. Reparacion de fracturas en la porcion acrilica de dentaduras parciales</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Pulido radicular</td>
                        <td>En caso de que el cliente a causa de una infeccion o sangramiento, podra solicitar limpieza de infeccion interna bajo la encia</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Destartraje supragingibal</td>
                        <td>Limpiez bucal o eliminacion del tartaro o calculo dental</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Profilaxis (pulido dental)</td>
                        <td>Remocion mecanica de la placa bacteriana o dental</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Tecnicas de cepillado</td>
                        <td>En caso de enfermedades periodontales (encias)el cliente podra solicitar la educacion y tecnicas de un correcto cepillado</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior y materiales</td>
                    </tr>
                    <tr>
                        <td>URGENCIAS</td>
                        <td>Rx Bite Wing</td>
                        <td>El cliente podra acceder a la toma de radiografias interdentales</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior a la radiografia</td>
                    </tr>
                    <tr>
                        <td>CIRUIA ORAL URGENCIAS</td>
                        <td>Exodoncia simple o compleja por urgencia</td>
                        <td>Extraccion o sacada de muela</td>
                        <td>100%</td>
                        <td>2 eventos por año de vigencia</td>
                        <td>Tratamiento definitivo o posterior/ Extraccion de muela del juicio o tercer molar</td>
                    </tr>
                    <tr>
                        <td>RESTAURACION URGENCIAS</td>
                        <td>Obturacion amalgama simple, compuesta o compleja</td>
                        <td>Es una aleacion de metales que se utiliza para restaurar los tejidos perdidos por caries</td>
                        <td>100%</td>
                        <td>Por caries o fractura dental o desalojo de tapadura: 2 eventos por año de vigencia</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>RESTAURACION URGENCIAS</td>
                        <td>Obturacion en resina simple, compuesta o compleja</td>
                        <td>La resina es un material utilizado en el sector anterior de la cavidad bucal en dientes anteriores para restaurar los daños causados por las caries o por traumatismos</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior</td>
                    </tr>
                    <tr>
                        <td>RESTAURACION URGENCIAS</td>
                        <td>Exodoncia diente temporal por urgencia (odontopediatria)</td>
                        <td>Extraccion o sacada de muela</td>
                        <td>100%</td>
                        <td>2 eventos por año de vigencia</td>
                        <td>Tratamiento definitivo o posterior/ Extraccion de muela del juicio o tercer molar/ Odontosedacion</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td>Obturacion amalgama simple, compuesta o compleja diente temporal (odontopediatria)</td>
                        <td>Es una aleacion de metales que se utiliza para restaurar los tejidos perdidos por caries</td>
                        <td>100%</td>
                        <td>Por caries o fractura dental o desalojo de tapadura: 2 eventos por año de vigencia</td>
                        <td>Tratamiento definitivo o posterior/ Odontosedacion</td>
                    </tr>
                    <tr>
                        <td>ODONTOPEDIATRIA</td>
                        <td>Obturacion en resina simple, compuesta o compleja diente temporal (odontopediatria)</td>
                        <td>La resina es un material utilizado en el sector anterior de la cavidad bucal en dientes anteriores para restaurar los daños causados por las caries o por traumatismos</td>
                        <td>100%</td>
                        <td>ilimitados</td>
                        <td>Tratamiento definitivo o posterior/ Odontosedacion</td>
                    </tr>


                </tbody>
            </table>
        </div>
        <script>
            var table = new DataTable('#myTable', {
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                },
            });
        </script>
</main>

<?php incluirTemplate('footer'); ?>