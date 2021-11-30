<?php # $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<!-- カレンダーのレースを選択（eventClick） -->
<?php $race_id = strval($_GET['race_id']) ?>
<?php $budget = strval($_GET['budget']) ?>
<?php $risk = strval($_GET['risk']) ?>

<?php //echo $race_id, ' ', $budget, ' ', $risk, '<br>' ?>

<?php
# $command = 'python3 ../python/sample_test.py 202106040803 2000 2';
# $command = 'python3 ../python/sample_test.py '. $race_id. ' '. $budget. ' '. $risk;
# $command = '/var/www/.venv/test/bin/python ../python/sample.py 202106040803 2000 2';
# $command = '/var/www/.venv/test/bin/python ../python/sendtest/sample.py ' . $race_id . ' ' . $budget . ' ' . $risk;
# $command = 'python3 ./recommend.py '. $race_id. ' '. $budget. ' '. $risk;
$command = '/var/www/.venv/test/bin/python /var/www/python/sendtest/sample.py ' . $race_id . ' ' . $budget . ' ' . $risk;

exec($command, $output);

#echo '実行したコマンド：', $command, '<br>';
echo '提案結果： ', $output[0];

?>