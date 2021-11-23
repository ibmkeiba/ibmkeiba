<?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php # require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
        <h2 class="tm-block-title">レース開催日（ ymd ）  </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php foreach ($pdo->query('show columns from ymd') as $col) : ?>
                        <th scope="col"><?php echo $col['Field'] ?></th>
                    <?php endforeach ?>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($pdo->query('select * from ymd') as $row) : ?>
                    <tr>
                        <?php foreach ($row as $col) : ?>
                            <td><b><?php echo $col ?></b></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>