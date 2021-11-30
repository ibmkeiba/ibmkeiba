<?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php # require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<h1>■ データベース：keiba</h1>
<h2>・テーブル：ymd</h2>

<body>

    <table border="1">

        <?php # 表タイトル <tr> <th></th> </tr> 
        ?>
        <tr>
            <?php foreach ($pdo->query('show columns from ymd') as $col) : ?>
                <th><?php echo $col['Field'] ?></th>
            <?php endforeach ?>
        </tr>

        <?php  # 各セル <tr> <td></td> </tr> ?>
        <?php foreach ($pdo->query('select * from ymd') as $row) : ?>
            <tr>
                <?php foreach ($row as $col) : ?>
                    <td><?php echo $col ?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
        

    </table>

</body>