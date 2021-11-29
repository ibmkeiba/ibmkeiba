<?php require './header.php' ?>

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

        <!-- Block #0 -->
        <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Calendar</h2>
            </div>
        </div>

        <!-- Block #1 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block">
                <h2 class="tm-block-title">Latest Hits</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>

        <!-- Block #2 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block">
                <h2 class="tm-block-title">Performance</h2>
                <canvas id="barChart"></canvas>
            </div>
        </div>

        <!-- Block #3 -->
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products">
                <h2 class="tm-block-title">Storage Information</h2>
                <div id="pieChartContainer">
                    <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                </div>
            </div>
        </div>

        <!-- Block #4 -->
        <?php require './original/div_notificationlist.php' ?>

        <!-- Block #5 -->
        <?php require './original/div_orderlist.php' ?>

    </div>
</div>

<?php require './footer.php' ?>