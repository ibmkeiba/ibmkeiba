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

        <!-- Fotter -->
        <?php require './footer.php' ?>

    </div>

    <!-- JavaScript -->
    <?php require './script.php' ?>

</body>

</html>