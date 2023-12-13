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
            <h1>ASISTENCIA MASCOTAS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">CERTIFICADO DE BENEFICIOS ASISTENCIA DE MASCOTAS (PERROS Y GATOS) [Código 1153075] <span> | </span></h5>

        <div class="mb-3 text-lg-center">
            <div class="card-danger text-bg-warning  rounded-1 p-3">
                <p>SE DEBE TENER INSCRITO A LA MASCOTA EN EL "REGISTRO NACIONAL DE MASCOTAS</p>
                <p> PARA ACCEDER AL BENEFICIO SE DEBE SOLICITAR EL NUMERO DEL CHIP PARA LA ATENCION</p>
            </div>
        </div>

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
                        <th scope="col">ASISTENCIA </th>
                        <th scope="col">EVENTOS EN EL AÑO</th>
                        <th scope="col">TOPE POR EVENTOS</th>
                        <th scope="col">OBSERVACION</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Asistencia médica de urgencia por accidente de la mascota</td>
                        <td>2 Eventos</td>
                        <td>10 UF</td>
                        <td>La Asistencia financiará directamente con la clínica veterinaria o médico veterinario de la Red de Prestadores de Assistime, los gastos veterinarios en los que ha incurrido en la visita médica veterinaria, según procedimientos y/o exámenes realizados</td>
                    </tr>
                    <tr>
                        <td>Asistencia médica de urgencia por enfermedad de la mascota</td>
                        <td>3 Eventos</td>
                        <td>10 UF</td>
                        <td>La Asistencia nanciará directamente con la Clínica Veterinaria o médico veterinario de la Red de Prestadores de Assistime, los gastos veterinarios en los que ha incurrido en la visita médica veterinaria, según tratamiento y/o exámenes realizados,</td>
                    </tr>
                    <tr>
                        <td>Traslado veterinario de mascota por accidente</td>
                        <td>2 Eventos</td>
                        <td>3 UF</td>
                        <td>En el caso que la mascota deba ser trasladada a un centro veterinario a consecuencia de un accidente, la Asistencia cubrirá el gasto del traslado terrestre a la consulta médica o Clínica Veterinaria más cercana al domicilio del Titular</td>
                    </tr>
                    <tr>
                        <td>Hotelería de mascotas libre elección</td>
                        <td>2 Eventos</td>
                        <td>Copago $ 4.000 x día, max 10 días al año, tope 6 U</td>
                        <td>El Servicio no tendrá cobertura si el Cliente se presenta u hospeda a su Mascota directamente en cualquier hotel o guardería veterinaria, o si se atiende en un centro fuera de la Red de Prestadores de Assistime y sin haber coordinado el servicio llamando previamente a la Plataforma</td>
                    </tr>

                    <tr>
                        <td>Orientación Médica veterinaria Telefónica 24X7</td>
                        <td>ILIMITADO</td>
                        <td>ILIMITADO</td>
                        <td>
                            <p>El beneficiario tendrá derecho a solicitar orientación médica telefónica por un profesional veterinario, que le brindará soporte médico en todos los aspectos relacionados con el ámbito veterinario. </p>

                            <p>La orientación médica telefónica le entregará Información sobre el uso y efectos de los medicamentos, Interpretación de exámenes y consultas generales de la Mascota del Titular. </p>

                            <p>El Titular debe contactarse con la Plataforma Telefónica para coordinar y recibir la orientación telefónica con el profesional médico veterinario. El servicio tiene eventos ilimitados 24/7 los 365 días del año.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Daño material a tercero</td>
                        <td>1 Evento</td>
                        <td>2 UF</td>
                        <td>
                            <p>En caso de que la mascota realice un daño material (cualquier objeto de carácter material de propiedad de un tercero, no incluye daños a las personas) a un tercero, Assistime entregará asistencia al tercero hasta un tope de 2 UF por medio de una Gift Card a la persona afectada por el daño, considerando que Titular deberá aportar con un copago de $5.000 a Assistime, para hacer efectivo el beneficio. </p>

                            <p>Se excluyen de este beneficio los familiares directos o indirectos del dueño de la Mascota y las personas que vivan en el mismo hogar, Para acreditar el daño material, el afectado debe presentar la respectiva denuncia efectuada en Carabi neros de Chile con el detalle de lo sucedido y presentarla a la empresa de Asistencia para hacer válido el beneficio.</p>

                            <p>Para entregar la cobertura del servicio, el daño material causado no puede ocurrir más allá de 22 kms a la redonda del lugar de residencia del Titular de la Mascota.</p>
                        </td>
                    </tr>

                    <tr>
                        <td>Baño cosmético de mascota</td>
                        <td>1 Evento</td>
                        <td>1 UF</td>
                        <td>
                            <p>La Asistencia otorga el servicio de baño a la mascota. No incluye peluquería. Dispone de 1 evento al año, con un tope máximo de UF 1. El servicio tiene una carencia de 30 días. </p>

                            <p>El Titular debe llamar a la Plataforma telefónica de la Asistencia para coordinar y recibir el servicio en la Red de Prestadores en convenio con Assistime Exclusiones servicio Baño Cosmético Mascota </p>

                            <p>La mascota deberá presentar a la Asistencia y al Prestador certi cado con las vacunas al día de la Mascota, previo al servicio solicitado. Cualquier atención extra será cargo del cliente.</p>
                        </td>
                    </tr>

                    <tr>
                        <td>Asistencia para entierro o cremación de mascota</td>
                        <td>1</td>
                        <td>3 UF</td>
                        <td>Este servicio estará disponible después de 90 días consecutivos, desde la contratación de la Asistencia Mascotas</td>
                    </tr>


                    <tr>
                        <td>Vacunación</td>
                        <td rowspan="2">1 Evento</td>
                        <td rowspan="2">1 UF</td>
                        <td rowspan="2">
                            <p>Se otorgará el servicio de esterilización o vacunación antirrábica para la Mascota, debe seleccionar un servicio, con un aporte o copago del Titular de $10.000 y cubre 1 evento al año de la prestación seleccionada; el tope máximo es de UF 1. </p>

                            <p>El Titular debe llamar a la Plataforma telefónica de la Asistencia para coordinar y recibir el servicio en la Red de Prestadores en convenio con Assistime.</p>

                            <p>El Titular debe presentar la acreditación de dominio de la Mascota, cuando se le requiera. </p>

                            <p class="font-bold">El servicio no tendrá cobertura si el Cliente se presenta con su mascota directamente en una clínica veterinaria o consulta médica veterinaria, sin haberlo coordinado con la Asistencia</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Esterilización</td>
                    </tr>


                    <tr>
                        <td>Orientación Legal Telefónica en temas de mascotas</td>
                        <td rowspan="3">ILIMITADO</td>
                        <td rowspan="3">ILIMITADO</td>
                        <td rowspan="3">

                            <p>Asesoría Legal sobre Ley Cholito</p>
                            <p>Asesoría legal telefónica en viaje con mascotas: entrega información previa al viaje nacional o hacia el extranjero, que quiera realizar la Mascota, para obtener información relacionada a las condiciones del viaje de la Mascota</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Asesoría Legal sobre Ley Cholito</td>
                    </tr>
                    <tr>
                        <td>- Asesoría legal en viaje con mascotas el extranjero</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<?php incluirTemplate('footer'); ?>