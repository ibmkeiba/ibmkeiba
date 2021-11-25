<?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php # require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<?php $race_id = 202106040802 ?>
<?php $title = $pdo->query("select title from info WHERE race_id = $race_id")->fetchColumn() ?>


<?php $select = 'waku, umaban, bamei, sexage, handicap, jockey, popular, odds, stable, weight, ranking_pre, racetime_pre' ?>
<?php $select_ja = array('枠', '馬番', '馬名', '性齢', '斤量', '騎手', '人気', '単勝オッズ', '厩舎', '馬体重', '予想着順', '予想タイム') ?>

<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-categories tm-block-scroll">
        <h2 class="tm-block-title">レース出馬表<span class="float-right"><?php echo $title ?></span></h2>
        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($select_ja as $col): ?>
                        <th scope="col" class="text-center"><?php echo $col ?></th>
                    <?php endforeach ?>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($pdo->query("select $select from result WHERE race_id = $race_id") as $row) : ?>
                    <tr>
                        <?php foreach ($row as $col) : ?>
                            <td class="text-center"><b><?php echo $col ?></b></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>