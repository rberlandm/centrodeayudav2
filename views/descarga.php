<?php

include_once '../includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

$datos = obtenerTabla();


?>
<main id="main" class="main fs-Poppins">
    <div class="pagetitle">
        <h1>Listado de ingresos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Formulario Registro Atenciones</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card p-3">
        <div class="table-responsive p-2">
            <table id="example" class="table hover">
                <thead>
                    <tr>
                        <th>orden</th>
                        <th>ejecutivo</th>
                        <th>fecha_gestion</th>
                        <th>mes_gestion</th>
                        <th>year_gestion</th>
                        <th>hora_gestion</th>
                        <th>rut_titular</th>
                        <th>nombre_titular</th>
                        <th>rut_paciente</th>
                        <th>nombre_paciente</th>
                        <th>edad</th>
                        <th>fecha_nacimiento</th>
                        <th>prevision</th>
                        <th>direccion</th>
                        <th>comuna</th>
                        <th>cuidad</th>
                        <th>region</th>
                        <th>fono</th>
                        <th>fono_dos</th>
                        <th>fono_tres</th>
                        <th>email</th>
                        <th>tipo_atencion</th>
                        <th>descripcion_atencion</th>
                        <th>prestador</th>
                        <th>servicio</th>
                        <th>producto</th>
                        <th>fecha_contratacion</th>
                        <th>sponsor</th>
                        <th>status_calidad</th>
                        <th>tipo_alerta</th>
                        <th>validacion_cobertura</th>
                        <th>clasificacion</th>
                        <th>observacion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $fila) {  ?>
                        <tr>
                            <td><?php echo $fila['orden']; ?></td>
                            <td><?php echo $fila['ejecutivo']; ?></td>
                            <td><?php echo $fila['fecha_gestion']; ?></td>
                            <td><?php echo $fila['mes_gestion']; ?></td>
                            <td><?php echo $fila['year_gestion']; ?></td>
                            <td><?php echo $fila['hora_gestion']; ?></td>
                            <td><?php echo $fila['rut_titular']; ?></td>
                            <td><?php echo $fila['nombre_titular']; ?></td>
                            <td><?php echo $fila['rut_paciente']; ?></td>
                            <td><?php echo $fila['nombre_paciente']; ?></td>
                            <td><?php echo $fila['edad']; ?></td>
                            <td><?php echo $fila['fecha_nacimiento']; ?></td>
                            <td><?php echo $fila['prevision']; ?></td>
                            <td><?php echo $fila['direccion']; ?></td>
                            <td><?php echo $fila['comuna']; ?></td>
                            <td><?php echo $fila['cuidad']; ?></td>
                            <td><?php echo $fila['region']; ?></td>
                            <td><?php echo $fila['fono']; ?></td>
                            <td><?php echo $fila['fono_dos']; ?></td>
                            <td><?php echo $fila['fono_tres']; ?></td>
                            <td><?php echo $fila['email']; ?></td>
                            <td><?php echo $fila['tipo_atencion']; ?></td>
                            <td><?php echo $fila['descripcion_atencion']; ?></td>
                            <td><?php echo $fila['prestador']; ?></td>
                            <td><?php echo $fila['servicio']; ?></td>
                            <td><?php echo $fila['producto']; ?></td>
                            <td><?php echo $fila['fecha_contratacion']; ?></td>
                            <td><?php echo $fila['sponsor']; ?></td>
                            <td><?php echo $fila['status_calidad']; ?></td>
                            <td><?php echo $fila['tipo_alerta']; ?></td>
                            <td><?php echo $fila['validacion_cobertura']; ?></td>
                            <td><?php echo $fila['clasificacion']; ?></td>
                            <td><?php echo $fila['observacion']; ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excel',
                    className: 'btn-excel',
                    text: 'Exportar Excel'
                }],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
                }
            });
        });
    </script>
</main>

<?php

?>