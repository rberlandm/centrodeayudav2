document.addEventListener("DOMContentLoaded", () => {
    new ApexCharts(document.querySelector("#lineChart"), {
        series: [{
            name: "Desktops",
            data: <?php echo $jsonDataPointsRegistrosDiarios; ?> // Asignar los datos de PHP aquí
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // toma un array que se repetirá en las columnas
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
    }).render();
});