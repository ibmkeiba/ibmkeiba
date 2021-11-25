<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AIしか勝たん</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ibmkeiba/ibmkeiba@main/styles/css/templatemo-style.css">

    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>

    <div class="" id="home">

        <!-- Navigation bar -->

        <!-- Main Contents -->

        <!-- Require a php file for check in this area -->

        <!-- Top : race -->
        <div class="keiba-race">

            <?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
            <?php # require '/var/www/.dbinfo.php'; 
            ?>
            <?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

            <?php $ymd = 20211002 ?>
            <?php $date = $pdo->query("select date from info WHERE ymd = $ymd GROUP BY date")->fetchColumn() ?>

            <!-- menu(開催状況) 毎の表示変更 -->
            <?php
            function menujudge($menu)
            {
                if ($menu == '結果・払戻') {
                    $status = 'moving';
                    $menudisp = '開催済';
                } elseif ($menu == '出馬表') {
                    $status = 'pending';
                    $menudisp = '開催前';
                } else {
                    $status = 'cancelled';
                    $menudisp = $menu;
                }
                return [$status, $menudisp];
            }
            ?>

            <?php $select = 'menu, date, start_time, place, r, title, number' ?>
            <?php $select_ja = array('開催状況', '開催日', '出走時刻', '場所', 'レース番号', 'レースタイトル', '出馬数') ?>


            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-product-categories tm-block-scroll">
                    <h2 class="tm-block-title">レース一覧<span class="float-right"><?php echo $date ?></span></h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <?php foreach ($select_ja as $col) : ?>
                                    <th scope="col" class="text-center"><?php echo $col ?></th>
                                <?php endforeach ?>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($pdo->query("select $select from info WHERE ymd = $ymd") as $row) : ?>
                                <tr class="my-tr-race">
                                    <td class="text-center">
                                        <?php list($status, $menudisp) =  menujudge($row['menu']) ?>
                                        <div class="tm-status-circle <?php echo $status ?>">
                                        </div><b><?php echo $menudisp ?></b>
                                    </td>
                                    <?php foreach (array_slice($row, 1) as $col) : ?>
                                        <td class="text-center"><b><?php echo $col ?></b></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Top : race -->
        <div class="keiba-card">
            <input type="text" id="result" value="test"><br>
            <?php //require './div_card.php' 
            ?>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        var $my_tr_race = $('.my-tr-race')

        $(function() {

            $my_tr_race.click(function() {

                $(".my-tr-race").each(function() {
                    $(".my-tr-race").css('background-color', '')
                });
                $(this).css('background-color', 'orange');


                // ajax 処理の開始
                $.ajax({
                        url: './div_card.php',
                        type: 'GET',
                        dataType: 'html'
                    })
                    .done(function(response) {
                        $('#result').val('成功');
                    })
                    .fail(function(response) {
                        $('#result').val('失敗');
                    });
                // ajax 処理の終了

            });

        });
    </script>

</body>

</html>