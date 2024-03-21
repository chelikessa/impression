<?php
    session_start();
    include 'vendor/components/header.php';
?>

    <div class="main_screen">
        <div class="img_and_text">
            <div class="animated fadeInLeft slow">
                <div class="img_main_screen">
                    <img src="assets/img/images/main_screen.png" alt="img_main_screen">
                </div>
            </div>
            <div class="animated fadeInRight slow">
                <div class="text_main_screen">
                    <p class="text_main_screen_title">IMPRESSION</p>
                    <p class="text_main_screen_bottom_text">гончарная мастерская</p>
                </div>
            </div>
        </div>
        <div class="btn_scroll">
            <div class="animated infinite pulse slow">
                <div class="img_btn_scroll">
                    <a href="#welcome" id="welcome_arrow"><img src="assets/img/icons/arrow_dark.png" alt="btn_scroll"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome" id="welcome">
        <div class="wow fadeInLeft slow welcome_1">
            <div class="welcome_1_img">
                <img src="assets/img/images/welcome_1.png" alt="1">
            </div>
        </div>
        <div class="welcome_text">
            <div class="text_p">
                <p>Добро пожаловать в мастерскую</p>
            </div>
            <div class="text_name">
                <p>IMPRESSION</p>
            </div>
            <div class="text_p">
                <p>Здесь рождаются уникальные произведения искусства из глины! 
                Каждая глиняная форма обретает свое неповторимое лицо, каждая 
                линия и узор становятся отражением вдохновения и мастерства. 
                Погрузитесь в мир творчества и красоты, ощутите тепло рук и сердца, 
                вложенное в каждую работу.</p>
                <br>
                <br>
                <p>Добро пожаловать в мир гончарного искусства!</p>
            </div>
        </div>
        <div class="wow fadeInRight slow welcome_2">
            <div class="welcome_2_img">
                <img src="assets/img/images/welcome_2.png" alt="2">
            </div>
        </div>
    </div>
    <div class="we_offer">
        <div class="title_block">
            <p>МЫ ПРЕДЛАГАЕМ</p>
        </div>
        <div class="block_category_btn">
            <a href="master_class.php#theme" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/clay.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>ТЕМАТИЧЕСКИЕ МК</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
            <a href="master_class.php#rosp" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/paint.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>РОСПИСЬ</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
            <a href="master_class.php#fire" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/furnace.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>ОБЖИГ</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
        </div>
        <div class="mini_title_block">
            <p>а также возможность провести</p>
        </div>
        <div class="block_category_btn">
            <a href="events.php" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/confetti.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>ДЕНЬ РОЖДЕНИЯ</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
            <a href="events.php" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/cheers.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>ТЕМАТИЧЕСКИЙ ВЕЧЕР</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
            <a href="events.php" class="link_category_btn">
                <div class="category_btn">
                    <div class="top_btn"></div>
                    <div class="img_btn">
                        <img src="assets/img/icons/collaborative.png" alt="img_category">
                    </div>
                    <div class="text_btn"><p>КОРПОРАТИВ</p></div>
                    <div class="bottom_btn"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="title_block"><p>РАБОТЫ НАШИХ ГОСТЕЙ</p></div>
        <div class="big_block_gallery">
            <div class="block_gallery">
                <div class="img_block_gallery">
                    <img src="assets/img/images/cup.png" alt="cup">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/color.png" alt="color">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/plate.png" alt="plate">
                </div>
            </div>
            <div class="block_gallery">
                <div class="img_block_gallery">
                    <img src="assets/img/images/cup_2.png" alt="cup_2">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/body.png" alt="body">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/twocup.png" alt="twocup">
                </div>
            </div>
            <div class="block_gallery">
                <div class="img_block_gallery">
                    <img src="assets/img/images/manyplate.png" alt="manyplate">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/cupandplate.png" alt="cupandplate">
                </div>
                <div class="img_block_gallery">
                    <img src="assets/img/images/clouds.png" alt="clouds">
                </div>
            </div>
        </div>
    </div>
    <div class="about_product">
        <div class="block_about_product">
            <p class="block_about_product_title">
                Красивые и цветные
            </p>
            <p class="block_about_product_p">
                мы работаем на испанской белой глиняной массе и 
                предлагаем варианты декорирования - цветными 
                глинами сразу же на мастер-классе (включено в 
                стоимость)
            </p>
        </div>
        <div class="block_about_product">
            <p class="block_about_product_title">
                Удобны в использовании
            </p>
            <p class="block_about_product_p">
                их можно спокойно мыть руками (за исключением 
                глазурей-металликов)
            </p>
        </div>
        <div class="block_about_product">
            <p class="block_about_product_title">
                Надежные в быту
            </p>
            <p class="block_about_product_p">
                на финальной стадии изделие переносит обжиг при
                    температуре выше 1000 градусов, так что кипяток
                    ему не страшен
            </p>
        </div>
    </div>
    <div class="anyquestions" id="anyquestions">
        <div class="block_anyquestions">
            <div class="title_block">
                <p>ОСТАЛИСЬ ВОПРОСЫ?</p>
            </div>
            <div class="form_">
                <form action="vendor/action/call_me_back.php" method="post">
                    <input type="text" name="name" placeholder="введите Ваше имя">
                    <input type="text" id="phone" name="tel" placeholder="введите Ваш номер телефона">
                    <button name="btn_aq">
                        перезвоните мне
                    </button>
                </form>
                <p style="color: red" class="session_res"><?php
                    if(isset($_SESSION['error']['btn_aq'])){
                        echo $_SESSION['error']['btn_aq'];
                        unset ($_SESSION['error']['btn_aq']);
                    }
                ?>
                </p>
                <p style="color: green" class="session_res"><?php
                    if(isset($_SESSION['success']['btn_aq'])){
                        echo $_SESSION['success']['btn_aq'];
                        unset ($_SESSION['success']['btn_aq']);
                    }
                ?>
                </p>
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