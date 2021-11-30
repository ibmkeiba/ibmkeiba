<?php $pdo = new PDO('mysql:host=localhost; dbname=keiba; charset=utf8', 'root', 'root'); ?>
<?php # require '/var/www/.dbinfo.php'; 
?>
<?php $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); ?>

<div class="col-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-categories tm-block-scroll">
        <h2 class="tm-block-title">レース情報（ info ） </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php foreach ($pdo->query('show columns from info') as $col) : ?>
                        <th scope="col" class="text-center"><?php echo $col['Field'] ?></th>
                    <?php endforeach ?>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($pdo->query('select * from info') as $row) : ?>
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