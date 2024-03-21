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
?>
<div class="add_product">
    <div class="title_block">
        <p>добавить изделие</p>
    </div>
    <div class="block_add_product">
        <form action="vendor/action/add_product.php" method="post">
            <input type="text" name="number" id="number_product" placeholder="введите номер изделия">
            <button name="add">Добавить</button>
        </form>
        <p style="color: green" class="session_res"><?php
            if(isset($_SESSION['success']['product'])){
                echo $_SESSION['success']['product'];
                unset ($_SESSION['success']['product']);
            }
        ?>
        </p>
        <p style="color: red" class="session_res"><?php
            if(isset($_SESSION['error']['product'])){
                echo $_SESSION['error']['product'];
                unset ($_SESSION['error']['product']);
            }
        ?>
        </p>
        <p style="color: red" class="session_res"><?php
            if(isset($_SESSION['error']['number'])){
                echo $_SESSION['error']['number'];
                unset ($_SESSION['error']['number']);
            }
        ?>
        </p>
    </div>
</div>
<?php
    include 'vendor/components/footer.php';
?>
<script src="assets/scripts/jquery.js"></script>
<script src="assets/scripts/maskedinput.js"></script>
<script src="assets/scripts/script.js"></script>