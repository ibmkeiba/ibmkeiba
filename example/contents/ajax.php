<?php require '../header.php' ?>

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

        <!-- Top : race -->
        <?php require './race/ajax.php' ?>

        <!-- Top : card -->
        <div>
        <?php require './card/div.php' ?>


    </div>
</div>

<?php require '../footer.php' ?>