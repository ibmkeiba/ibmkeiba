<!DOCTYPE html>
<html lang="ja">

<!-- Header -->
<?php require '../header.php' ?>

<body id="reportsPage">
    <div class="" id="home">

        <!-- Navigation bar -->
        <?php require '../navbar.php' ?>

        <!-- Main Contents -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Database, <b>keiba</b></p>
                </div>
            </div>

            <!-- row -->
            <div class="row tm-content-row">


                <!-- Require a php file for check in this area -->

                <!-- database : ymd -->
                <?php require './ymd/div.php' ?>

                <!-- database : info -->
                <?php require './info/div.php' ?>

                <!-- database : result -->
                <?php require './result/div.php' ?>


            </div>
        </div>
        <!-- Main Contents End-->

        <!-- Footer -->
        <?php require '../footer.php' ?>

    </div>

    <!-- JavaScript -->
    <?php require '../script.php' ?>

</body>

</html>