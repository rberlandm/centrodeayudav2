<?php

include_once 'includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

$resp_totalMes = ejecutarProcedimiento('centro_de_ayuda.total_mes');
$totalRegistros = $resp_totalMes[0]['total_registros'];
$totalCortesSC = $resp_totalMes[0]['cortes'];


$resp_totalMes = ejecutarProcedimiento('centro_de_ayuda.registros_recientes');

//++++++++++++++++++++++++++++++++++++++++++++++++++
$resp_budgetReport = ejecutarProcedimiento('centro_de_ayuda.budget_report');
$dp_budgetReport = convertirAJSON($resp_budgetReport, 'sponsor', 'cant');
$JsonBudgetReport = json_encode($dp_budgetReport);

//++++++++++++++++++++++++++++++++++++++++++++++++++
$resp_statusCalidad = ejecutarProcedimiento('centro_de_ayuda.count_status_calidad');
$dp_statusCalidad  = convertirAJSON($resp_statusCalidad, 'status_calidad', 'cant');
$JsonstatusCalidad  = json_encode($dp_statusCalidad);

//++++++++++++++++++++++++++++++++++++++++++++++++++

$resRegistro = ejecutarProcedimiento('centro_de_ayuda.detalle_registros');

$dp_Registro = array();
foreach ($resRegistro as $fila) {
    $dp_Registro[] = array(
        'x' => $fila['dia_mes'],
        'ySonido' => (int)$fila['sonido'],
        'yCorte' => (int)$fila['cortes'],
        'yRegistros' => (int)$fila['registros'],
    );
}
$JsonRegistro = json_encode($dp_Registro);


?>

<main id="main" class="main ">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Registros <span>| Mes Actual</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $totalRegistros ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">


                            <div class="card-body">
                                <h5 class="card-title">Cortes <span>| Este mes</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $totalCortesSC ?></h6>
                                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">% Cumplimiento <span>| Este mes</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-percent"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>100%</h6>
                                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Estadísticas Tipificaciones Reporte <span>| Diario</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    var JsonRegistro = <?php echo json_encode($JsonRegistro); ?>;

                                    var data = JSON.parse(JsonRegistro);

                                    // Extrae los valores necesarios
                                    var seriesDataSonido = data.map(item => parseFloat(item.ySonido) || 0);
                                    var seriesDataCorteSC = data.map(item => parseFloat(item.yCorte) || 0);
                                    var seriesDataRegistros = data.map(item => parseFloat(item.yRegistros) || 0);

                                    var labelsData = data.map(item => item.x);

                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Sonido',
                                                data: seriesDataSonido,
                                            }, {
                                                name: 'Cortes',
                                                data: seriesDataCorteSC
                                            }, {
                                                name: 'Registros',
                                                data: seriesDataRegistros
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#ff771d', '#2eca6a'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                categories: labelsData
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Status Calidad Reporte <span>| Mes Actual</span></h5>

                                <!-- Vertical Bar Chart -->
                                <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    var JsonstatusCalidad = <?php echo json_encode($JsonstatusCalidad); ?>;
                                    var data = JSON.parse(JsonstatusCalidad);

                                    // Extrae los valores necesarios
                                    var serieDataStatusY = data.map(item => item.y);
                                    var labelsDataStatusX = data.map(item => item.x);

                                    function getColorByLabel(label) {
                                        // Puedes definir una lógica para asignar colores basados en las etiquetas
                                        if (label === 'CORTE SC') {
                                            return '#435585';
                                        }
                                        // Agrega más condiciones según sea necesario

                                        // Por defecto, devuelve un color predeterminado
                                        return '#BE3144';
                                    }


                                    document.addEventListener("DOMContentLoaded", () => {
                                        var verticalBarChart = echarts.init(document.querySelector("#verticalBarChart"));

                                        verticalBarChart.setOption({
                                            tooltip: {
                                                trigger: 'axis',
                                                axisPointer: {
                                                    type: 'shadow'
                                                }
                                            },
                                            legend: {},
                                            grid: {
                                                left: '3%',
                                                right: '4%',
                                                bottom: '3%',
                                                containLabel: true
                                            },
                                            xAxis: {
                                                type: 'value',
                                                boundaryGap: [0, 0.01]
                                            },
                                            yAxis: {
                                                type: 'category',
                                                data: labelsDataStatusX
                                            },
                                            series: [{
                                                type: 'bar',
                                                label: {
                                                    show: true,
                                                    position: 'insideRight',
                                                    formatter: '{c}'
                                                },
                                                itemStyle: {
                                                    color: function(params) {
                                                        // Asigna colores basados en las etiquetas
                                                        var label = labelsDataStatusX[params.dataIndex];
                                                        return getColorByLabel(label);
                                                    }
                                                },
                                                data: serieDataStatusY
                                            }]
                                        });
                                    });
                                </script>


                            </div>
                        </div>
                    </div><!-- End Recent Sales -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad Reciente <span>| Hoy</span></h5>

                        <div class="activity">
                            <?php
                            foreach ($resp_totalMes as $registro) {
                                // Extraer información del array asociativo
                                $hora_gestion = $registro['hora_gestion'];
                                $status_calidad = $registro['calidad_status'];
                                $fono = $registro['fono'];
                            ?>
                                <div class="activity-item d-flex">
                                    <div class="activite-label"><?php echo $hora_gestion  ?></div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        <?php echo '[' . $fono . '] ' . $status_calidad  ?>
                                    </div>
                                </div><!-- End activity item-->

                            <?php } ?>

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Reporte Sponsor <span>| Mes Actual</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            // Ahora puedes usar la variable PHP en tu código JavaScript
                            var JsonBudgetReport = <?php echo json_encode($JsonBudgetReport); ?>;
                            var data = JSON.parse(JsonBudgetReport);

                            // Extrae los valores necesarios
                            var serieData1 = data.map(item => item.y);

                            var labelsData1 = data.map(item => item.x);

                            console.log(serieData1)
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                    radar: {
                                        indicator: labelsData1.map(label => ({
                                            name: label,
                                            max: 40
                                        }))
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: serieData1,
                                            name: 'Sponsor'
                                        }]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

            </div><!-- End Right side columns -->

        </div>
    </section>
</main>

<?php incluirTemplate('footer'); ?>