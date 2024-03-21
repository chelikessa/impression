<?php
    include 'vendor/components/core.php';
    include 'vendor/components/header.php';

    if(!isset($_SESSION['user'])){
        header("location: index.php");
    }

?>
<div class="record_for_mc">
    <div class="mini_gallery"></div>
    <div class="form_auth_reg">
        <div class="title_block">
            <p>запись на мастер-класс</p>
        </div>
        <div class="form_">
            <form action="vendor/action/rec.php" method="post">
                <input type="text" name="name" placeholder="введите название мастер-класса">
                <input type="text" id="phone" name="tel" placeholder="введите Ваш номер телефона">
                <button name="rec">записаться</button>
            </form>
            <p style="color: red" class="session_res"><?php
                if(isset($_SESSION['error']['rec'])){
                    echo $_SESSION['error']['rec'];
                    unset ($_SESSION['error']['rec']);
                }
            ?>
            <p style="color: green" class="session_res"><?php
                if(isset($_SESSION['success']['rec'])){
                    echo $_SESSION['success']['rec'];
                    unset ($_SESSION['success']['rec']);
                }
            ?>
        </div>
    </div>
    <div class="mini_gallery"></div>
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