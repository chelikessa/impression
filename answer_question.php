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

    $call_1 = $link->query("SELECT `statuses_call_me_back`.*, `call_me_back`.*
    FROM `statuses_call_me_back` 
        LEFT JOIN `call_me_back` ON `call_me_back`.`status_id` = `statuses_call_me_back`.`id`
        WHERE `statuses_call_me_back`.`id` = 1;");

    $call_2 = $link->query("SELECT `statuses_call_me_back`.*, `call_me_back`.*
    FROM `statuses_call_me_back` 
        LEFT JOIN `call_me_back` ON `call_me_back`.`status_id` = `statuses_call_me_back`.`id`
        WHERE `statuses_call_me_back`.`id` = 2;");

    $call_3 = $link->query("SELECT `statuses_call_me_back`.*, `call_me_back`.*
    FROM `statuses_call_me_back` 
        LEFT JOIN `call_me_back` ON `call_me_back`.`status_id` = `statuses_call_me_back`.`id`
        WHERE `statuses_call_me_back`.`id` = 3;");
?>
<div class="answer_question">
    <div class="title_block">
        <p>обзвон</p>
    </div>
    <div class="block_answer_question">
        <div class="mini_block_answer_question">
            <p class="name_status">Звонок совершен</p>
            <p style="color: green" class="session_res_admin"><?php
                if(isset($_SESSION['success']['answer_1'])){
                    echo $_SESSION['success']['answer_1'];
                    unset ($_SESSION['success']['answer_1']);
                }
            ?>
            </p>
            <?php foreach($call_1 as $key => $value): ?>
                <div class="_1_answer_question">
                    <p>Имя: <?= $value ['name'] ?></p>
                    <p>Номер телефона: <?= $value ['tel'] ?></p>
                    <!-- <p>Статус: <strong><?= $value ['status'] ?></strong></p> -->
                    <form action="vendor/action/answer_question.php" method="post">
                        <input type="hidden" name="id" value=<?= $value['id'] ?>>
                        <button name="-">Ждут звонка</button>
                        <button name="--">Номер недоступен</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mini_block_answer_question">
            <p class="name_status">Ждут звонка</p>
            <p style="color: green" class="session_res_admin"><?php
                if(isset($_SESSION['success']['answer_2'])){
                    echo $_SESSION['success']['answer_2'];
                    unset ($_SESSION['success']['answer_2']);
                }
            ?>
            </p>
            <?php foreach($call_2 as $key => $value): ?>
                <div class="_1_answer_question">
                    <p>Имя: <?= $value ['name'] ?></p>
                    <p>Номер телефона: <?= $value ['tel'] ?></p>
                    <!-- <p>Статус: <strong><?= $value ['status'] ?></strong></p> -->
                    <form action="vendor/action/answer_question.php" method="post">
                        <input type="hidden" name="id" value=<?= $value['id'] ?>>
                        <button name="+">Звонок совершен</button>
                        <button name="--">Номер недоступен</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mini_block_answer_question">
            <p class="name_status">Номер недоступен</p>
            <p style="color: green" class="session_res_admin"><?php
                if(isset($_SESSION['success']['answer_3'])){
                    echo $_SESSION['success']['answer_3'];
                    unset ($_SESSION['success']['answer_3']);
                }
            ?>
            </p>
            <?php foreach($call_3 as $key => $value): ?>
                <div class="_1_answer_question">
                    <p>Имя: <?= $value ['name'] ?></p>
                    <p>Номер телефона: <?= $value ['tel'] ?></p>
                    <!-- <p>Статус: <strong><?= $value ['status'] ?></strong></p> -->
                    <form action="vendor/action/answer_question.php" method="post">
                        <input type="hidden" name="id" value=<?= $value['id'] ?>>
                        <button name="+">Звонок совершен</button>
                        <button name="-">Ждут звонка</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
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