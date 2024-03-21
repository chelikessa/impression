<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';

    if(!isset($_SESSION['user'])){
      header("location: index.php");
      }
      else{
        if($_SESSION['user']['isAdmin'] != 1){
        header("location: index.php");
      }
    }

    $product = $link->query("SELECT  `statuses_product`.*, `product`.*
    FROM `product` 
        LEFT JOIN `statuses_product` ON `product`.`statuses_id` = `statuses_product`.`id`
        WHERE `statuses_product`.`id` != 8
        ORDER BY `product`.`number_product`;");
?>
<div class="product_status">
    <div class="title_block">
        <p>статус готовности изделий</p>
    </div>
    <div class="block_product_status">
        <p style="color: green" class="session_res_admin"><?php
            if(isset($_SESSION['success']['status'])){
                echo $_SESSION['success']['status'];
                unset ($_SESSION['success']['status']);
            }
        ?>
        </p>
        <?php foreach($product as $key => $value): ?>
            <div>
                <p>Изделие № <strong><?= $value ['number_product'] ?></strong></p>
                <p>Статус: <b><?= $value ['status'] ?></b></p>
                <form action="vendor/action/product_status.php" method="post">
                    <input type="hidden" name="id" value=<?= $value['id'] ?>>
                    <button name="1">Ждет обжига</button>
                    <button name="2">1 обжиг</button>
                    <button name="3">2 обжиг</button>
                    <button name="5">Брак</button>
                    <button name="4">Готово к выдаче</button>
                    <button name="8">Выдано</button>
                </form>
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