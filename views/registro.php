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
        <form id="fromNuevoRegistro" class=" p-3">
            <fieldset class="mb-2">
                <legend>
                    <h5 class="titulo">Información Dinomi</h5>
                </legend>

                <div class="row">
                    <div class="col-lg-3 mb-2">
                        <label for="ejecutivo" class="form-label">Agente</label>
                        <input type="text" class="form-control" id="ejecutivo" name="ejecutivo" value="RICARDO BERLAND">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="fecha_gestion" class="form-label">Fecha</label>
                        <input type="text" class="form-control" id="fecha_gestion" name="fecha_gestion">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="hora_gestion" class="form-label">Hora</label>
                        <input type="text" class="form-control" id="hora_gestion" name="hora_gestion">
                    </div>
                </div>
            </fieldset>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <fieldset class="mb-2">
                <legend>
                    <h5 class="titulo">Información Titular</h5>
                </legend>

                <div class="row">
                    <div class="col-lg-3 mb-2">
                        <label for="rut_titular" class="form-label">Rut Titular</label>
                        <input type="text" class="form-control" id="rut_titular" name="rut_titular">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="nombre_titular" class="form-label">Nombre Titular</label>
                        <input type="text" class="form-control" id="nombre_titular" name="nombre_titular">
                    </div>
                </div>

            </fieldset>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <fieldset class="mb-2">
                <legend>
                    <h5 class="titulo">Información Paciente</h5>
                </legend>

                <div class="row">
                    <div class="col-lg-2 mb-2">
                        <label for="orden" class="form-label">Orden medica</label>
                        <input type="text" class="form-control" id="orden" name="orden">
                    </div>
                    <div class="col-lg-2 mb-2">
                        <label for="rut_paciente" class="form-label">Rut Paciente</label>
                        <input type="text" class="form-control" id="rut_paciente" name="rut_paciente">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente">
                    </div>
                    <div class="col-lg-2 mb-2">
                        <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" onchange="calcularEdad()">
                    </div>
                    <div class="col-lg-2 mb-2">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="prevision" class="form-label">Fonasa</label>
                        <select id="prevision" name="prevision" class="form-select">
                            <option selected disabled></option>
                            <?php
                            foreach ($datos as $option) {
                                echo "<option value='{$option['prevision']}' data-prevision='{$option['prevision']}'>{$option['prevision']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-lg-6 mb-2">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="comuna" class="form-label">Comuna</label>
                        <select id="comuna" name="comuna" class="form-select" onchange="scriptComuna()">
                            <option disabled selected></option>
                            <?php
                            foreach ($datosComuna as $comuna) {
                                echo "<option value='{$comuna['comuna']}' 
                                            data-comuna='{$comuna['comuna']}' 
                                            data-ciudad='{$comuna['ciudad']}' 
                                            data-region='{$comuna['region']}'>
                                        {$comuna['comuna']}
                                    </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="region" class="form-label">Región</label>
                        <input type="text" class="form-control" id="region" name="region">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="fono" class="form-label">Teléfono 1</label>
                        <input type="text" class="form-control" id="fono" name="fono">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="fono_dos" class="form-label">Teléfono 2</label>
                        <input type="text" class="form-control" id="fono_dos" name="fono_dos">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="fono_tres" class="form-label">Teléfono 3</label>
                        <input type="text" class="form-control" id="fono_tres" name="fono_tres">
                    </div>

                    <div class="col-lg-2 mb-2">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                </div> <!-- fin row -->
            </fieldset>

            <div class="line-divisor mb-2">
                <hr>
            </div>

            <fieldset class="mb-2">
                <legend>
                    <h5 class="titulo">Tipificación de Caso</h5>
                </legend>

                <div class="row">

                    <div class="col-lg-2 mb-3">
                        <label for="prestador" class="form-label">Prestador</label>
                        <input type="text" class="form-control" id="prestador" name="prestador">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="producto" class="form-label">Servicio</label>
                        <select id="producto" name="producto" class="form-select" onchange="ScriptProducto()">
                            <option value="" disabled selected>Selecciona...</option>
                            <?php
                            foreach ($datosProducto as $option) {
                                echo "<option value='{$option['servicio']}' 
                                            data-prevision='{$option['servicio']}'
                                            data-servicio='{$option['servicio']}' 
                                            data-producto='{$option['producto']}' 
                                            data-sponsor='{$option['sponsor']}'>
                                        {$option['servicio']}
                                    </option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-lg-2 mb-3">
                        <label for="servicio" class="form-label">Producto [Abreviado] </label>
                        <input type="text" class="form-control" id="servicio" name="servicio">
                    </div>

                    <div class="col-lg-2 mb-3">
                        <label for="sponsor" class="form-label">Sponsor </label>
                        <input type="text" class="form-control" id="sponsor" name="sponsor">
                    </div>

                    <div class="col-lg-2 mb-3">
                        <label for="fecha_contratacion" class="form-label">Fecha Contratación </label>
                        <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label for="status_calidad" class="form-label">Status Calidad</label>
                        <select id="status_calidad" name="status_calidad" class="form-select"">
                                <option value="" disabled selected>Selecciona...</option>
                                <?php
                                foreach ($datosCalidad as $option) {
                                    echo "<option value='{$option['status']}'
                                    data-prevision='{$option['status']}'>{$option['status']}</option>";
                                }
                                ?>
                            </select>
                    </div>

                    <div class=" col-lg-3 mb-3">
                            <label for="tipo_alerta" class="form-label">Tipo de Alertas</label>
                            <select id="tipo_alerta" name="tipo_alerta" class="form-select"">
                                <option value="" disabled selected>Selecciona...</option>
                                <?php
                                foreach ($datosAlertas as $option) {
                                    echo "<option value='{$option['alertas']}'
                                    data-prevision='{$option['alertas']}'>{$option['alertas']}</option>";
                                }
                                ?>
                        </select>
                    </div>

                    <div class=" col-lg-3 mb-3">
                                <label for="validacion_cobertura" class="form-label">Validación Cobertura</label>
                                <select id="validacion_cobertura" name="validacion_cobertura" class="form-select"">
                                <option value="" disabled selected>Selecciona...</option>
                                    <?php
                                    foreach ($datosCobertura as $option) {
                                        echo "<option value='{$option['cobertura']}'
                                        data-prevision='{$option['cobertura']}'>{$option['cobertura']}</option>";
                                    }
                                    ?>
                            </select>
                    </div>

                    <div class=" col-lg-3 mb-3">
                                    <label for="tipo_atencion" class="form-label">Tipo de Atención</label>
                                    <select id="tipo_atencion" name="tipo_atencion" class="form-select">
                                        <option value="" disabled selected>Selecciona...</option>

                                        <?php
                                        foreach ($datosAtencion as $option) {
                                            echo "<option value='{$option['tipoatencion']}'
                                        data-prevision='{$option['status']}'>{$option['tipoatencion']}</option>";
                                        }
                                        ?>
                                    </select>
                    </div>


                    <div class="col-lg-6 mb-3">
                        <label for="descripcion_atencion" class="form-label">Descripción Atención</label>
                        <textarea name="descripcion_atencion" id="descripcion_atencion" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="observacion" class="form-label">Observación Front 1</label>
                        <textarea name="observacion" id="observacion" cols="30" rows="10" class="form-control"></textarea>
                    </div>



                </div>
            </fieldset>


            <div class=" botones d-flex align-items-center justify-content-between">
                <button type="button" onclick="guardarInformacion()" class="btn btn-primary">Agregar Registro</button>


            </div>
        </form>
</main>

<?php incluirTemplate('footer'); ?>