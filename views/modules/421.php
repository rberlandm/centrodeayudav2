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
            <h1>ASISTENCIA SALUD INTEGRAL MAYO 2023</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA SALUD INTEGRAL <span> | Mayo 2023 </span></h5>

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

        <div class="mb-2 p-2">
            <div class="p-3 text-bg-warning rounded-1">
                <h5>Beneficiarios Programa Salud Integral</h5>
                <p>Serán beneficiarios de la presente asistencia, además del afiliado contratante titular, su cónyuge o conviviente, hijos propios, en común o del cónyuge o conviviente del titular de la cuenta y con las siguientes restricciones:</p>
                <ul class="ms-5">
                    <li><b>Edad Máxima de los hijos propios o comunes para acceder al Beneficio:</b> 24 años y 364 días.</li>
                    <li><b>Edad Máxima del cónyuge o conviviente para acceder al Beneficio:</b> sin tope.</li>
                </ul>
            </div>
        </div>

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
                <tbody class="table-group-divider">

                    <tr>
                        <td rowspan="3">TELEMEDICINA:
                            Medicina General Nutrición y Psicologia</td>
                        <td>
                            <h5><b>Medicina General 24/7:</b></h5> El Servicio entrega atención de Medicina General vía Telemedicina, de forma ilimitada, para el titular y los integrantes del grupo familiar, al acceder será atendido por un profesional médico acreditado en esta modalidad de atención: -Atencion de Medicina General -Emisión de documentos : recetas, orden de exámenes, derivaciones. -Certificado médico de justificación escolar ,laboral -Ficha clínica electrónica

                        </td>
                        <td>Copago Cero</td>
                        <td>Eventos Ilimitado (teleconsultas) para cada miembro del grupo familiar</td>
                        <td>Cliente deberá descargar previamente en su celular la plataforma digital “DOCTOR DIGITAL”,ingresando con su rut y la clave son los 5 primeros digitos del rut
                            Requiere un Smartphone con conexión estable a internet o wifi. Una vez instalado, podrá acceder instantáneamente al Servicio de Teleconsulta de Medicina General, ambulatoria no de emergencia médica.</td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Teleconsulta Psicología con agendamiento:</b></h5> El Servicio entrega atención de Psicología vía telemedicina,
                            disponible para el grupo familiar, al acceder podrá agendar lo siguiente:
                            -La atención con un profesional
                            acreditado en Psicología vía teleconsulta.
                            -Evaluación de salud mental, contención
                            emocional, recomendaciones y orientación
                            psicológica.
                            - Derivación a otros especialistas
                            -Ficha clínica electrónica.
                        </td>
                        <td>Copago Cero</td>
                        <td>5 Eventos anuales (teleconsultas) para cada miembro del grupo familiar</td>
                        <td rowspan="2">Cliente debe llamar a la asistencia y solicitar la hora de psicologia, nutricion, ejecutivo de call center procede a tomarle los datos y se envia por correo a contacto@rescare.cl por medio de correo para su previo agendamiento en la hora acordada con el paciente.</td>
                    </tr>

                    <tr>
                        <td>
                            <h5><b>Teleconsulta Nutricionista, con agendamiento:</b></h5> El Servicio entrega atención de Nutrición vía telemedicina, disponible para el grupo familiar, al acceder será atendido por un profesional acreditado en Nutrición, en esta modalidad de atención. Incluye Atención Nutricionista, Evaluación Nutricional, Pautas de alimentación, Recomendaciones de alimentación, derivación a otros especialistas, ficha clínica.
                        </td>
                        <td>Copago Cero</td>
                        <td>5 Eventos anuales (teleconsultas) para cada miembro del grupo familiar</td>
                    </tr>

                    <tr>
                        <td>MEDICO A DOMICILIO O ENFERMERA A DOMICILIO </td>
                        <td>
                            <p>En caso de que el cliente y/o su grupo familiar debido a una enfermedad, requieran de una visita domiciliaria ASSISTIME, coordinará el envío de un médico de medicina general o de una enfermera universitaria al lugar donde se encuentren, previa solicitud vía telefónica del cliente.</p>
                            <h5><b>Se limita un plazo y radio urbano máximo de una hora de distancia desde el lugar de la coordinación de la visita, en el eje urbano de la ciudad.</b></h5>
                        </td>
                        <td>Hasta UF 2 por evento</td>
                        <td>4 eventos anuales para el grupo familia</td>
                        <td>
                            <p>Asistencia con Prestadores de la Red Assistime.</p>
                            <p> El tiempo de envío de Profesionales al Domicilio será determinado por la disponibilidad del Staff Médico y según Categorización de Salud del Paciente. Cliente podrá solicitar.</p>
                            <p><b>En Reemplazo a este servicio, una Atención de Consulta Médica de Medicina General de urgencia Ambulatoria en Clínicas Privadas en Convenio y señaladas por Assistime, cuyo tope será de UF2 por evento.</b></p>
                        </td>
                    </tr>

                    <tr>
                        <td>Consultas Médicas Presenciales de Especialistas en Clínicas o Centros Médicos.</td>
                        <td> En el caso de que el médico tratante recomiende al paciente, posterior a la atención, ser atendido por un médico Especialista en: *CARDIOLOGIA O MEDICINA INTERNA *TRAUMATOLOGIA Y ORTOPEDIA *GINECOLOGIA Y OBSTETRICIA *OFTALMOLOGIA *PEDIATRIA O MEDICINA GENERAL INFANTIL
                            *UROLOGIA *BRONCOPULMONAR O MEDICINA INTERNA </td>
                        <td>100% copago</td>
                        <td>3 Eventos anuales (consultas medicas) para el grupo familiar.</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Consultas Médicas Presenciales de Especialistas en Clínicas o Centros Médicos.</td>
                        <td>
                            <p>En el caso de que el médico tratante recomiende al paciente, posterior a la atención, ser atendido por un médico Especialista en:</p>
                            <ul>
                                <li>CARDIOLOGIA O MEDICINA INTERNA</li>
                                <li>GINECOLOGIA Y OBSTETRICIA</li>
                                <li>OFTALMOLOGIA</li>
                                <li>PEDIATRIA O MEDICINA GENERAL INFANTIL</li>
                                <li>UROLOGIA</li>
                                <li>TRAUMATOLOGIA Y ORTOPEDIA</li>
                                <li>BRONCOPULMONAR O MEDICINA INTERNA</li>
                            </ul>
                        </td>
                        <td>100% copago</td>
                        <td>3 Eventos anuales (consultas medicas) para el grupo familiar.</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>EXAMENES DE LABORATORIO</td>
                        <td>
                            <p>En el caso que el médico tratante recomiende la realización de exámenes de laboratorio, la Asistencia coordinará la realización de los siguientes exámenes complementarios de apoyo diagnóstico:</p>
                            <ul>
                                <li>Hemograma, vhs</li>
                                <li>Perfil Bioquímico</li>
                                <li>Perfil Lipídico</li>
                                <li>TSH</li>
                                <li>T4Libre</li>
                                <li>Toma Muestra adulto/niño</li>
                            </ul>
                        </td>
                        <td>100% copago</td>
                        <td>2 eventos
                            anuales (del set
                            completo de
                            exámenes) por
                            grupo familiar.</td>
                        <td>ORDEN MEDICA</td>
                    </tr>

                    <tr>
                        <td>EXAMENES DE IMAGENOLOGIA RADIOGRAFIAS</td>
                        <td>
                            <p>La Asistencia entrega 1 evento anual para el grupo familiar del examen de radiografía disponible; podrá seleccionar el examen según orden médica, del siguiente listado a elección:</p>
                            <ul>
                                <li>Radiografía de Brazo o Antebrazo (izq o derecha)</li>
                                <li>Radiografía de Muñeca o Mano (izq o derecha)</li>
                                <li>Radiografía de Pierna o tobillo (izq o derecha)</li>
                                <li>Radiografía de Pie (izq o derecha)</li>
                                <li>Radiografía codo (izq o derecha)</li>
                                <li>Radiografía pelvis cadera adulto o niño</li>
                                <li>Radiografía cuello o cervical</li>
                                <li>Radiografía rodilla, fémur, costilla o esternón</li>
                            </ul>
                        </td>
                        <td>100% copago</td>
                        <td>1 evento anual por grupo familiar</td>
                        <td>ORDEN MEDICA</td>
                    </tr>

                    <tr>
                        <td>EXÁMENES DE IMAGENOLOGIA : ECOTOMOGRAFIA GENERAL</td>
                        <td>
                            <p>La Asistencia pondrá a disposición de 1 examen que el paciente debe seleccionar del listado indicado a continuación, según orden médica del profesional tratante, cuya prestación estará disponible sólo en las clínicas y centros médicos que dispongan del servicio de Ecotomografía a nivel nacional</p>
                            <ul>
                                <li>Ecotomografía Ginecológica u Obstétrica</li>
                                <li>Ecotomografía Pélvica Masculina</li>
                                <li>Ecotomografía Pélvica Femenina</li>
                                <li>Ecotomografía Renal o de Bazo</li>
                            </ul>
                        </td>
                        <td>100% copago</td>
                        <td>1 evento anual para el grupo familiar</td>
                        <td class="text-center font-bold">
                            <p>ORDEN MEDICA</p>
                            <p>(Examen no incluye proyecciones especiales ni focalizaciones.)</p>
                        </td>
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