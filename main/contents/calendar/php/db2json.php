<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>JSON出力</title>
    </head>

    <body>

        <?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
        <?php # require '/var/www/.dbinfo.php'; ?>
        <?php $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>


        <h1>■ レース情報確認</h1>

        <table border="1">

            <?php $grade_limit = 3 ?>
            <?php $select = 'ymd, title, start_time, grade, race_id, url' ?>
            <?php $select_ja = array('ymd', 'title', 'start_time', 'grade', 'race_id', 'url') ?>
            

            <?php # 表タイトル <tr> <th></th> </tr> ?>
            <tr>
                <?php foreach ($select_ja as $col): ?>
                <th><?php echo $col ?></th>
                <?php endforeach ?>
            </tr>

            <?php  # 各セル <tr> <td></td> </tr> ?>
            <?php foreach ($pdo -> query("select $select from info WHERE grade <= $grade_limit") as $row): ?>
            <tr>
                <?php foreach ($row as $col): ?>
                <td><?php echo $col ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        
        </table>

        
        <h1>■ json</h1>

        <p><?php $array = Array() ?></p>

        <!-- 1. Graded race  -->
        <?php foreach ($pdo -> query("select $select from info WHERE grade <= $grade_limit") as $row): ?>
         
        <?php // イベントデータ連想配列の作成(title, start)
        
        if ($row['start_time'] == NULL){
          $start = substr($row['ymd'], 0,4). '-'. substr($row['ymd'], 4  ,2). '-'. substr($row['ymd'], 6,2);
          $end = $start;
        }
        else {
          $start = substr($row['ymd'], 0,4). '-'. substr($row['ymd'], 4  ,2). '-'. substr($row['ymd'], 6,2). 'T'. $row['start_time'];
          $end = substr($row['ymd'], 0,4). '-'. substr($row['ymd'], 4  ,2). '-'. substr($row['ymd'], 6,2). 'T'. substr($row['start_time'], 0,3). strval((int)substr($row['start_time'], 3,5) + 3);
          
        }
        
        $array[] = Array(
          'title' => 'G'. $row['grade']. ': '. $row['title'],
          'start' => $start,
          'end' => $end,
        //   'url' => $row['url'],
        );
            
        ?>

        <?php endforeach ?>

        <!-- 2. Race day -->
        <?php foreach ($pdo -> query("select ymd from info GROUP BY ymd") as $row): ?>

        <?php // イベントデータ連想配列の作成(title, start, display)
        $start = substr($row['ymd'], 0,4). '-'. substr($row['ymd'], 4  ,2). '-'. substr($row['ymd'], 6,2);
        
        $array[] = Array(
          'title' => '',
          'start' => $start,
          'display' => 'background',
          'backgroundColor' => '#ff0000',
        );
        ?>

        <?php endforeach ?>

        <!-- jsonファイルの作成・書き出し・表示 -->
        <?php $json = json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
        <?php file_put_contents('../json/events.json' , $json ) ?>
        <pre><?php echo $json ?></pre>

    </body>
</html>