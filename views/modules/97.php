<?php

include_once '../../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

?>

<main id="main" class="main fs-Poppins color-primario">
    <div class="pagetitle d-flex align-items-center">

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Bci_Logotype.svg/1024px-Bci_Logotype.svg.png" alt="" class="img-marca">
        <div class="info-header pt-3">
            <h1>ASISTENCIA AL DECESO BICEVIDA</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/views/polizas.php">Home</a></li>
                    <li class="breadcrumb-item active">Pólizas</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <div class="card row mb-2 p-2">
        <h5 class="card-title ms-3">ASISTENCIA AL DECESO - BICE VIDA [Código - 97] <span> | </span></h5>

        <div class="row mb-3 p-2">
            <div class="col-6">
                <div class="card h-100">
                    <div class=" card-header bg-dark text-white">
                        Cobetura Póliza (contacto BICE)
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Servicio al Cliente BICE Vida: 800 20 20 22</li>
                        <li class="list-group-item">Servicio al Cliente BICE Vida: 800 390 200</li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-100">
                    <div class=" card-header bg-dark text-white">
                        Coberturade póliza
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Servicios iniciales (servicios funerarios)</li>
                        <li class="list-group-item">Incineración o inhumación</li>
                        <li class="list-group-item">Traslado nacional e internaciona</li>
                        <li class="list-group-item">Muerte Accidenta</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="table-responsive mb-3">
        <table class="table table-bordered table-light table-condensed table align-middle">
            <thead class="bg-encabezado">
                <tr class="item-middle text-lg-center">
                    <th>PRESTACION</th>
                    <th>DETALLE</th>
                    <th>MONTO MÁXIMO POR EVENTO</th>
                    <th>NÚMERO DE EVENTOS AL AÑO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Asistencia Legal Funerario Telefónica Familiar</td>
                    <td>Entrega información y orientación telefónica de trámites relacionados a los siguientes puntos: Instituto Médico Legal, Posesión Efectiva, Sistema Previsional, Cuota Mortuoria, Cobro de Seguros, Traslado del cuerpo en el Territorio Nacional o su Repatriación</td>
                    <td>1</td>
                    <td>ILIMITADO</td>
                </tr>
                <tr>
                    <td>Consulta Médica Psicológica Individual en caso de muerte</td>
                    <td>Entrega el servicio de consulta médica psicológica, en modalidad presencial en la región metropolitana o regiones, en caso del fallecimiento de un familiar para asistir a un centro médico o clínica, para el afectado del grupo familiar. El servicio se encuentra disponible a través de la Red de prestadores médicos en convenio con Imed y Assistime, el mismo que será coordinado previamente tomando contacto con la Plataforma Assistime</td>
                    <td>1</td>
                    <td>2</td>
                </tr>


            </tbody>
        </table>
    </div>


    </div>

    <script>
        new DataTable('#ffaa');
    </script>
</main>



<?php incluirTemplate('footer'); ?>