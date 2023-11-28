<?php
include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');


$datos = obtenerDatosJson('fonaza');
$datosComuna = obtenerDatosJson('comuna');
$datosProducto = obtenerDatosJson('producto');
$datosAtencion = obtenerDatosJson('tipoatencion');
$datosCalidad = obtenerDatosJson('estadocalidad');
$datosAlertas = obtenerDatosJson('alertas');
$datosCobertura = obtenerDatosJson('cobertura');




?>

<main id="main" class="main fs-Poppins">
    <div class="pagetitle">
        <h1>Formulario de Registro</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Formulario Registro Atenciones</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="btn-nuevo mb-3">
        <button type="button" class="btn btn-primary btn-nuevo" onclick="nuevoRegistro()">Nuevo +</button>
    </div>

    <div id="formNuevoRegistroDinomi" class="card">
        <form id="fromNuevoRegistro" class="row  p-3">
            <h5 class="titulo">Información Dinomi</h5>
            <div class="info-dinomi row mb-3">
                <div class="col-md-3">
                    <label for="idDinomi" class="form-label">Agente</label>
                    <input type="text" class="form-control" id="idDinomi" name="idDinomi" value="Administrador" disabled>
                </div>
                <div class="col-md-3">
                    <label for="idDinomi" class="form-label">Id Dinomi</label>
                    <input type="text" class="form-control" id="idDinomi" name="idDinomi">
                </div>

                <div class="col-md-2">
                    <label for="idTelefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="idTelefono" name="idTelefono">
                </div>

                <div class="col-md-2">
                    <label for="idFecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" id="idFecha" name="idFecha" disabled>
                </div>

                <div class="col-md-2">
                    <label for="idHora" class="form-label">Hora</label>
                    <input type="text" class="form-control" id="idHora" name="idHora" disabled>
                </div>
            </div>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <h5 class="titulo">Información Titular</h5>
            <div class="informacion-paciente mb-3 row">
                <div class="col-md-2">
                    <label for="idRutTitular" class="form-label">Rut Titular</label>
                    <input type="text" class="form-control" id="idRutTitular" name="idRutTitular">
                </div>
                <div class="col-md-2">
                    <label for="idNombreTitular" class="form-label">Nombre Titular</label>
                    <input type="text" class="form-control" id="idNombreTitular" name="idNombreTitular">
                </div>
            </div>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <h5 class="titulo">Información Paciente</h5>
            <div class="informacion-paciente mb-3 row">
                <div class="col-md-2">
                    <label for="idOrden" class="form-label">Orden medica</label>
                    <input type="text" class="form-control" id="idOrden" name="idOrden">
                </div>
                <div class="col-md-2">
                    <label for="idRutPaciente" class="form-label">Rut Paciente</label>
                    <input type="text" class="form-control" id="idRutPaciente" name="idRutPaciente">
                </div>
                <div class="col-md-2">
                    <label for="idNombrePaciente" class="form-label">Nombre Paciente</label>
                    <input type="text" class="form-control" id="idNombrePaciente" name="idNombrePaciente">
                </div>
                <div class="col-md-2">
                    <label for="idFechaNacimiento" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="idFechaNacimiento" name="idFechaNacimiento">
                </div>
                <div class="col-md-2">
                    <label for="idEdad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="idEdad" name="idEdad">
                </div>


                <div class="col-md-2">
                    <label for="idFonasa" class="form-label">Fonasa</label>
                    <select id="idFonasa" name="idFonasa" class="form-select">
                        <option selected disabled>Seleccione...</option>
                        <?php
                        foreach ($datos as $option) {
                            echo "<option value='{$option['id']}'>{$option['prevision']}</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>

            <!-- Información Dirección -->
            <div class="informacion-direccion mb-3 row">
                <div class="col-md-6">
                    <label for="idDireccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="idDireccion" name="idDireccion">
                </div>

                <div class="col-md-2">
                    <label for="idComuna" class="form-label">Comuna</label>
                    <select id="idComuna" name="idComuna" class="form-select" onchange="obtenerValoresSeleccionados()">
                        <option disabled selected>Selecciona...</option>
                        <?php
                        foreach ($datosComuna as $comuna) {
                            echo "<option value='{$comuna['id']}' 
                                            data-comuna='{$comuna['comuna']}' 
                                            data-ciudad='{$comuna['ciudad']}' 
                                            data-region='{$comuna['region']}'>
                                        {$comuna['comuna']}
                                    </option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="idCiudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="idCiudad" name="idCiudad" readonly disabled>
                </div>

                <div class="col-md-2">
                    <label for="idRegion" class="form-label">Región</label>
                    <input type="text" class="form-control" id="idRegion" name="idRegion" disabled>
                </div>
            </div>

            <!-- Información Contacto -->
            <div class="informacion-contacto mb-3 row">

                <div class="col-md-2">
                    <label for="idTelefono1" class="form-label">Teléfono 1</label>
                    <input type="text" class="form-control" id="idTelefono1" name="idTelefono1">
                </div>

                <div class="col-md-2">
                    <label for="idTelefono2" class="form-label">Teléfono 2</label>
                    <input type="text" class="form-control" id="idTelefono2" name="idTelefono2">
                </div>

                <div class="col-md-2">
                    <label for="idTelefono3" class="form-label">Teléfono 3</label>
                    <input type="text" class="form-control" id="idTelefono3" name="idTelefono3">
                </div>

                <div class="col-md-6">
                    <label for="idEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="idEmail" name="idEmail">
                </div>
            </div>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <!-- Información Contacto -->
            <h5 class="titulo">Tipificación de Caso</h5>
            <div class="informacion-contacto mb-3 row">
                <div class="col-md-2 mb-3">
                    <label for="idPrestador" class="form-label">Prestador</label>
                    <input type="text" class="form-control" id="idPrestador" name="idPrestador">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="idProducto" class="form-label">Servicio</label>
                    <select id="idProducto" name="idProducto" class="form-select" onchange="OptionProducto()">
                        <option disabled selected>Selecciona...</option>
                        <?php
                        foreach ($datosProducto as $option) {
                            echo "<option value='{$option['id']}' 
                                            data-servicio='{$option['servicio']}' 
                                            data-producto='{$option['producto']}' 
                                            data-sponsor='{$option['sponsor']}'>
                                        {$option['servicio']}
                                    </option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="idServicio" class="form-label">Producto [Abreviado] </label>
                    <input type="text" class="form-control" id="idServicio" name="idServicio" disabled>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="idSponsor" class="form-label">Sponsor </label>
                    <input type="text" class="form-control" id="idSponsor" name="idSponsor" disabled>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="idFechaContratacion" class="form-label">Fecha Contratación </label>
                    <input type="date" class="form-control" id="idFechaContratacion" name="idFechaContratacion">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="idCobertura" class="form-label">Status Calidad</label>
                    <select id="idCobertura" name="idCobertura" class="form-select"">
                        <option disabled selected>Selecciona...</option>
                        <?php
                        foreach ($datosCalidad as $option) {
                            echo "<option value='{$option['id']}'>{$option['status']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class=" col-md-3 mb-3">
                        <label for="idCobertura" class="form-label">Tipo de Alertas</label>
                        <select id="idCobertura" name="idCobertura" class="form-select"">
                        <option disabled selected>Selecciona...</option>
                        <?php
                        foreach ($datosAlertas as $option) {
                            echo "<option value='{$option['id']}'>{$option['alertas']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class=" col-md-3 mb-3">
                            <label for="idCobertura" class="form-label">Validación Cobertura</label>
                            <select id="idCobertura" name="idCobertura" class="form-select"">
                        <option disabled selected>Selecciona...</option>
                        <?php
                        foreach ($datosCobertura as $option) {
                            echo "<option value='{$option['id']}'>{$option['cobertura']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class=" col-md-3 mb-3">
                                <label for="idCobertura" class="form-label">Tipo de Atención</label>
                                <select id="idCobertura" name="idCobertura" class="form-select">
                                    <option disabled selected>Selecciona...</option>

                                    <?php
                                    foreach ($datosAtencion as $option) {
                                        echo "<option value='{$option['id']}'>{$option['tipoatencion']}</option>";
                                    }
                                    ?>
                                </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="idDescripcionAtencion" class="form-label">Descripción Atención</label>
                    <textarea name="idDescripcionAtencion" id="idDescripcionAtencion" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="idObsFront" class="form-label">Observación Front 1</label>
                    <textarea name="idObsFront" id="idObsFront" cols="30" rows="10" class="form-control"></textarea>
                </div>


            </div>

        </form>
    </div>

</main>

<?php incluirTemplate('footer'); ?>