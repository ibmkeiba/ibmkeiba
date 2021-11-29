<!-- JavaScript -->

<script src="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/js/moment.min.js"></script>
<!-- https://momentjs.com/ -->
<script src="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/js/Chart.min.js"></script>
<!-- http://www.chartjs.org/docs/latest/ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- https://getbootstrap.com/ -->
<script src="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/js/tooplate-scripts.js"></script>
<script>
    Chart.defaults.global.defaultFontColor = 'white';
    let ctxLine,
        ctxBar,
        ctxPie,
        optionsLine,
        optionsBar,
        optionsPie,
        configLine,
        configBar,
        configPie,
        lineChart;
    barChart, pieChart;
    // DOM is ready
    $(function() {
        drawLineChart(); // Line Chart
        drawBarChart(); // Bar Chart
        drawPieChart(); // Pie Chart

        $(window).resize(function() {
            updateLineChart();
            updateBarChart();
        });
    })
</script>