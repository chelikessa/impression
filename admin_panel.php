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

    $user = $link->query("SELECT * FROM `users` WHERE `id` = '{$_SESSION['user']['id']}'");
?>
<div class="admin_panel">
    <div class="title_block">
        <p>админ панель</p>
    </div>
    <div class="block_btn_admin_panel">
        <a href="answer_question.php">
            <button>Ответить на вопрос</button>
        </a>
        <a href="add_product.php">
            <button>Добавить изделие</button>
        </a>
        <a href="list_products.php">
            <button>Список изделий</button>
        </a>
        <a href="product_status.php">
            <button>Статус готовности изделий</button>
        </a>
        <a href="rec_for_mc_admin.php">
            <button>Статус регистрации на мастер-класс</button>
        </a>
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