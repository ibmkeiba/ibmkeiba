<!-- Fotter -->
<footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2021</b> 若手経営タスク 開発チームA. 
                    
                    <!-- Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a> -->
                </p>
            </div>
        </footer>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- https://jquery.com/download/ -->
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
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>