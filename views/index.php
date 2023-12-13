<?php

include_once 'includes/funciones.php';

incluirTemplate('header');
incluirTemplate('navbar');
incluirTemplate('sidebar');

// Llamadas procedimientos
$resStatusCalidad = ejecutarProcedimiento('centro_de_ayuda.count_status_calidad');
$resRgistrosDiarios = ejecutarProcedimiento('centro_de_ayuda.registros_diarios');
$resp_topProducto = ejecutarProcedimiento('centro_de_ayuda.top_producto');
$resp_totalMes = ejecutarProcedimiento('centro_de_ayuda.total_mes');


// Convertir a String
$dataPoints = convertirAJSON($resStatusCalidad, 'status_calidad', 'cant');
$dp_registros = convertirAJSON($resRgistrosDiarios, 'dia_mes', 'cant');
$dp_toProducto = convertirAJSON($resp_topProducto, 'producto', 'cant');

// Convertir a Json
$jsonDataPoints2 = json_encode($dataPoints);
$jsonDP_Registros = json_encode($dp_registros);
$jsonDP_topProducto = json_encode($dp_toProducto);

//++++++++++++++++++++++++++++++++++++++++++++++++++

$resTotalRegistros = ejecutarProcedimiento('centro_de_ayuda.detalle_registros');

$dp_TotalRegistros = array();
foreach ($resTotalRegistros as $fila) {
    $dp_TotalRegistros[] = array(
        'x' => $fila['dia_mes'],
        'ySonido' => (int)$fila['sonido'],
        'yCorte' => (int)$fila['cortes'],
        'yRegistros' => (int)$fila['registros'],
    );
}

$jsonDP_TotalRegistros = json_encode($dp_TotalRegistros);


//++++++++++++++++++++++++++++++++++++++++++++++++
$totalRegistros = $resp_totalMes[0]['total_registros'];
$totalCortesSC = $resp_totalMes[0]['cortes'];

?>

<main id="main" class="main ">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="contenido-mb-3 p-2">

        <!-- Inicio Card Informativas -->
        <div class="contenedor-card row dashboard">
            <div class="col-md-3">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Registros <span>| Este mes</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?php echo $totalRegistros ?></h6>
                                <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End  Card -->

            <div class="col-md-3">
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
            </div><!-- End  Card -->

            <div class="col-md-3">
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
            </div><!-- End  Card -->

            <div class="col-md-3">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Calidad <span>| Este mes</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>100%</h6>
                                <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End  Card -->

        </div>

        <!-- Inicio Graficos -->
        <div class="row mb-2">
            <div class="col-lg-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Top 5 Productos</h5>

                        <!-- Pie Chart -->
                        <div id="pieChart"></div>

                        <script>
                            var pieProductos = <?php echo json_encode($jsonDP_topProducto); ?>;

                            var data = JSON.parse(pieProductos);

                            var seriesDataProductos = data.map(item => parseFloat(item.y));
                            var labelsDataProductos = data.map(item => item.x);

                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart"), {
                                    series: seriesDataProductos,
                                    chart: {
                                        height: 350,
                                        type: 'pie',
                                        toolbar: {
                                            show: true
                                        }
                                    },
                                    labels: labelsDataProductos
                                }).render();
                            });
                        </script>
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Top 5 Tipificaciones</h5>

                        <!-- Pie Chart -->
                        <div id="pieChart2"></div>

                        <script>
                            var json = <?php echo json_encode($jsonDataPoints2); ?>;
                            var data = JSON.parse(json);

                            // Extrae los valores necesarios
                            var seriesData1 = data.map(item => parseFloat(item.y));
                            var labelsData2 = data.map(item => item.x);

                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart2"), {
                                    series: seriesData1,
                                    chart: {
                                        height: 350,
                                        type: 'pie',
                                        toolbar: {
                                            show: true
                                        }
                                    },
                                    labels: labelsData2
                                }).render();
                            });
                        </script>
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="d-flex align-items-center justify-content-center h-100 card">
                    <h2>Registro de Gestiones</h2>
                    <div id="lineChart" class="w-100"></div>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function() {
                resaltarColumnaDia();
            });

            function resaltarColumnaDia() {
                var table = document.getElementById("tblTurnos");

                if (table) {
                    var today = new Date();
                    var dayOfWeek = (today.getDay() + 6) % 7; // Ajuste para que la semana comience en lunes

                    // Resaltar primera fila de encabezados
                    var headersRow1 = table.querySelector("thead tr:nth-child(1)");
                    if (headersRow1) {
                        var headers = headersRow1.getElementsByTagName("th");
                        if (headers.length >= dayOfWeek + 1) {
                            headers[dayOfWeek].classList.add("resaltado");
                        }
                    }

                    // Resaltar segunda fila de encabezados
                    var headersRow2 = table.querySelector("thead tr:nth-child(2)");
                    if (headersRow2) {
                        var headers2 = headersRow2.getElementsByTagName("th");
                        if (headers2.length >= dayOfWeek + 1) {
                            headers2[dayOfWeek].classList.add("resaltado");
                        }
                    }

                    // Resaltar celdas de datos
                    var rows = table.getElementsByTagName("tr");

                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].getElementsByTagName("td");

                        if (cells.length >= dayOfWeek + 1) {
                            cells[dayOfWeek].classList.add("resaltado");
                        }
                    }
                }
            }
        </script>

        <!-- Status Calidad-->
        <script>
            // Obtén el valor de $jsonDP_topProducto en JavaScript
            var jsonDP_topProducto = <?php echo json_encode($jsonDataPoints2); ?>;

            // Parsea la cadena JSON
            var data = JSON.parse(jsonDP_topProducto);

            // Extrae los valores necesarios
            var seriesData = data.map(item => parseFloat(item.y));
            var labelsData = data.map(item => item.x);


            /*           var options = {
                          series: seriesData,
                          chart: {
                              width: 600,
                              type: 'pie',
                          },
                          labels: labelsData,
                          responsive: [{
                              breakpoint: 480,
                              options: {
                                  chart: {
                                      width: 200
                                  },
                                  legend: {
                                      position: 'bottom'
                                  }
                              }
                          }]
                      };
                      var chart = new ApexCharts(document.querySelector("#statusCalidad"), options);
                      chart.render(); */


            document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#statusCalidad"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                        height: 550,
                        type: 'pie',
                        toolbar: {
                            show: true
                        }
                    },
                    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E']
                }).render();
            });
        </script>

        <!-- Top 5 Productos -->
        <script>
            // Obtén el valor de $jsonDP_topProducto en JavaScript
            var jsonDP_topProducto = <?php echo json_encode($jsonDP_topProducto); ?>;

            // Parsea la cadena JSON
            var data = JSON.parse(jsonDP_topProducto);

            // Extrae los valores necesarios
            var seriesData = data.map(item => parseFloat(item.y));
            var labelsData = data.map(item => item.x);

            console.log(seriesData);
            console.log(labelsData);
            // Actualiza los valores del gráfico con los datos obtenidos
            var options = {
                series: seriesData,
                chart: {
                    width: 600,
                    type: 'pie',
                },
                labels: labelsData,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            // Crea y renderiza el nuevo gráfico
            var chart = new ApexCharts(document.querySelector("#topProductos"), options);
            chart.render();
        </script>

        <!-- Line Chart -->
        <script>
            var jsonDP_topProducto = <?php echo json_encode($jsonDP_TotalRegistros); ?>;

            // Parsea la cadena JSON
            var data = JSON.parse(jsonDP_topProducto);

            // Extrae los valores necesarios
            var seriesDataSonido = data.map(item => parseFloat(item.ySonido) || 0);
            var seriesDataCorteSC = data.map(item => parseFloat(item.yCorte) || 0);
            var seriesDataRegistrosC = data.map(item => parseFloat(item.yRegistros) || 0);


            var labelsData = data.map(item => item.x);

            var options = {
                series: [{
                    name: 'SONIDO',
                    data: seriesDataSonido
                }, {
                    name: 'CORTE SC',
                    data: seriesDataCorteSC
                }, {
                    name: 'REGISTROS',
                    data: seriesDataRegistrosC
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    stacked: true,
                    toolbar: {
                        show: true
                    },
                    zoom: {
                        enabled: true
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom',
                            offsetX: -10,
                            offsetY: 0
                        }
                    }
                }],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        borderRadius: 5,
                        dataLabels: {
                            total: {
                                enabled: true,
                                style: {
                                    fontSize: '13px',
                                    fontWeight: 900
                                }
                            }
                        }
                    },
                },
                xaxis: {

                    categories: labelsData,
                },
                legend: {
                    position: 'right',
                    offsetY: 40
                },
                fill: {
                    opacity: 1
                },
                colors: ['#F4CE14', '#B31312', '#7ED7C1'] // Personaliza los colores aquí

            };


            var chart = new ApexCharts(document.querySelector("#lineChart"), options);
            chart.render();
        </script>


</main>

<?php incluirTemplate('footer'); ?>