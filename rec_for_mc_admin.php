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

    $rec = $link->query("SELECT  `users`.*, `statuses_rec_mc`.*, `rec_mc`.*
    FROM `rec_mc` 
        LEFT JOIN `users` ON `rec_mc`.`id_user` = `users`.`id` 
        LEFT JOIN `statuses_rec_mc` ON `rec_mc`.`id_status` = `statuses_rec_mc`.`id`;");
?>
<div class="product_status">
    <div class="title_block">
        <p>подтверждение записи</p>
    </div>
    <div class="block_product_status">
        <p style="color: green" class="session_res_admin"><?php
            if(isset($_SESSION['success']['status'])){
                echo $_SESSION['success']['status'];
                unset ($_SESSION['success']['status']);
            }
        ?>
        </p>
        <p style="color: red" class="session_res_admin"><?php
            if(isset($_SESSION['error']['empty'])){
                echo $_SESSION['error']['empty'];
                unset ($_SESSION['error']['empty']);
            }
        ?>
        </p>
        <?php foreach($rec as $key => $value): ?>
            <div>
                <p>Фамилия: <strong><?= $value ['surname'] ?></strong></p>
                <p>Имя: <strong><?= $value ['name'] ?></strong></p>
                <p>Почта: <strong><?= $value ['email'] ?></strong></p>
                <p>Номер телефона: <strong><?= $value ['tel'] ?></strong></p>
                <p>Название мастер-класса: <strong><?= $value ['name_mc'] ?></strong></p>
                <p>Статус: <b><?= $value ['status'] ?></b></p>
                <form action="vendor/action/rec_for_mc_admin.php" method="post">
                    <p>Время: <input type="time" id="time" name="time" value="<?= $value ['time'] ?>"></p>
                    <p>Дата: <input type="date" id="date" name="date" value="<?= $value ['date'] ?>"></p>
                    <input type="hidden" name="id" value=<?= $value['id']?>>
                    <button name="1_">Подтверждено</button>
                    <button name="2_">Не подтверждено</button>
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