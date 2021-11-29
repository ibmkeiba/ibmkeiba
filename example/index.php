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
                    <p class="text-white mt-5 mb-5">Welcome check, <b>Develop</b></p>
                </div>
            </div>

            <!-- row -->
            <div class="row tm-content-row">

                <!-- Require a php file for check in this area -->

                <!-- Top : calendar -->
                <?php require './calendar-ajax.php' ?>

                <!-- Target Block -->
                <div class="col-12 tm-block-col">

                    <div class="tm-bg-primary-dark tm-block tm-block-avatar tm-block-scroll">
                        <h2 class="tm-block-title">AJAX Result</h2>

                        <h1 id="target-d1">Date AJAX通信結果：</h1>
                        <div id="target-d2"></div>
                        <h3 id="target-d3">Date 送信data：</h3>

                        <h1 id="target-e1">Event AJAX通信結果：</h1>
                        <div id="target-e2"></div>
                        <h3 id="target-e3">Event 送信data：</h3>

                    </div>
                </div>

                <!-- Top : race -->
                <?php // require './contents/race/div.php' 
                ?>

                <!-- Top : card -->
                <?php // require './contents/card/div.php' 
                ?>


            </div>
        </div>


        <!-- Fotter -->
        <?php require './footer.php' ?>

    </div>

    <!-- Script -->
    <?php require './script.php' ?>
    
</body>

</html>