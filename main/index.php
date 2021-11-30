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
                    <p class="text-white mt-5 mb-5">AIで競馬レース予想, <b>トップ</b></p>
                </div>
            </div>

            <!-- row -->
            <div class="row tm-content-row">

                <!-- Require a php file for check in this area -->

                <!-- Block #calendar -->
                <?php require './calendar-ajax.php' ?>

                <!-- Block #race -->
                <div id="race-ajax" class="w-100"></div>

                <!-- Block #card -->
                <div id="card-ajax"></div>

                <!-- Block #recommend -->
                <div class="col-12 tm-block-col" id="recommend-ajax" style="display: none">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">予算とリスク</h2>

                        <div class="d-flex text-white">
                            <div class="p-5 flex-fill">
                                <input class="form-control bg-white text-dark" type="text" placeholder="予算 ¥" id="budget" value="">
                            </div>
                            <div class="p-5 flex-fill">

                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-info active">
                                        <input type="radio" name="risk-btn" id="option1" value="1" autocomplete="off" checked> ローリスクローリターン
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="radio" name="risk-btn" id="option2" value="2" autocomplete="off"> ハイリスクハイリターン
                                    </label>
                                </div>

                            </div>
                        </div>

                        <button type="button" class="btn btn-warning w-100" id="recommend-btn">AIから馬券の提案をもらう</button>

                        <div class="pt-4" id="budget-warning" style="display: none">
                            <div class="alert alert-danger w-100 text-center" role="alert">
                                <strong>Oops!</strong> 予算を入力してください.
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Block #result -->
                <div class="col-12 tm-block-col" id="result-ajax" style="display: none">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <h2 class="tm-block-title text-warning text-center">提案結果</h2>
                        <div class="shadow p-4 mb-5 bg-light rounded text-monospace" id="result-txt">あなたは...</div>

                    </div>
                </div>



                <!-- Target Block -->
                <div class="col-12 tm-block-col" style="display: none">

                    <div class="tm-bg-primary-dark tm-block tm-block-avatar tm-block-scroll">
                        <h2 class="tm-block-title">AJAX Result</h2>

                        <h1 id="target-d1">Date AJAX通信結果：</h1>
                        <div id="target-d2"></div>
                        <h3 id="target-d3">Date 送信data：</h3>

                        <h1 id="target-e1">Event AJAX通信結果：</h1>
                        <div id="target-e2"></div>
                        <h3 id="target-e3">Event 送信data：</h3>
                        <h3 id="target-r1">レース選択結果：</h3>
                        <h3 id="target-d">レース出馬表の表示状態：</h3>
                        <h3 id="target-rec">馬券の提案の実行状態：</h3>
                        <h3 id="target-b">予算未入力で提案した場合：</h3>
                        <h3 id="target-last">馬券提案シミュレーション結果：</h3>

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