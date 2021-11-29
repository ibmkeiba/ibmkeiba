<!DOCTYPE html>
<html lang="ja">

<!-- Header -->
<?php require './header.php' ?>

<body id="reportsPage">
    <div class="" id="home">

        <!-- Navigation bar -->
        <?php require './navbar.php' ?>

        <!-- Main Contents -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>

            <!-- row -->
            <div class="row tm-content-row">

                <!-- Block Example Performance -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- Block Example Storage Information -->
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>

                
            </div>
            <!-- Row End-->
        </div>
        <!-- Main Contents End-->

        <!-- Footer -->
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
</body>

</html>