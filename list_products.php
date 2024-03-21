<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';

    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }

    $product = $link->query("SELECT  `statuses_product`.*, `product`.*
    FROM `product` 
        LEFT JOIN `statuses_product` ON `product`.`statuses_id` = `statuses_product`.`id`
        WHERE `statuses_product`.`id` != 8
        ORDER BY `product`.`number_product`;");
?>
<div class="product_status">
    <div class="title_block">
        <p>список изделий</p>
    </div>
    <div class="block_product_status">
        <?php foreach($product as $key => $value): ?>
            <div>
                <input type="hidden" name="id" value=<?= $value['id'] ?>>
                <p>Изделие № <strong><?= $value ['number_product'] ?></strong></p>
                <p>Статус: <b><?= $value ['status'] ?></b></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
    include 'vendor/components/footer.php';
?>
<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/maskedinput.js"></script>
<script src="assets/scripts/script.js"></script>
<script src="assets/scripts/WOW-master/dist/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>