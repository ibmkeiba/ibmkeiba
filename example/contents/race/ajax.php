<?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php # require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<!-- GET送信の値を格納 -->
<?php
if ( isset($_GET['ymd']) ){
    $ymd = $_GET['ymd'];
    echo "ymd= $ymd がGET送信されました";
}
else{
    $ymd = 20211002;
    echo "ymdがGET送信されていません";
}
?>

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
                    <tr>
                        <td class="text-center">
                            <?php list($status, $menudisp) =  menujudge($row['menu']) ?>
                            <div class="tm-status-circle <?php echo $status ?>">
                            </div><?php echo $menudisp ?>
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
