<?php
    session_start();
    include 'vendor/components/header.php';
?>

<div class="events">
    <div class="title_block">
        <p>ваше мероприятие в нашей студии</p>
    </div>
    <div class="block_events">
        <div class="block_gallery_events">
            <div class="gallery_events">
                <div class="img_gallery_events">
                    <img src="assets/img/images/big.png" alt="room">
                </div>
                <div class="text_gallery_events">
                    <p>
                    Мероприятия для незабываемого времени вместе!
                    <br>
                    <br>
                    Ежедневно проводим мастер-классы для детей и взрослых,
                    организовываем творческие праздники и романтические
                    свидания.
                    </p>
                </div>
                <div class="img_gallery_events_2">
                    <img src="assets/img/images/mini.png" alt="room_2">
                </div>
            </div>
        </div>
        <div class="block_1_event">
            <div class="mini_title_block">
                <p>у нас можно провести</p>
            </div>
            <div class="events_block">
                <div class="block_e">
                    <div class="title_e">
                        <p>день рождения</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/birth.png" alt="event1">
                    </div>
                    <div class="description_e">
                        <p>День рождения для детей или взрослых, 
                            а может всей семьи в нашей студии - 
                            это не просто особенный мастер-класс, 
                            а день который вы проведете с удовольствием. 
                            Приходите большой компанией, веселитесь и 
                            создавайте шедевры вместе, которые останутся 
                            вам на память.</p>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2500 руб/час</p>
                        </div>
                        <span class="span_e">
                            <p>Время, дата проведения и цена обсуждается индивидуально по телефону.</p>
                        </span>
                    </div>
                </div>
                <div class="block_e">
                    <div class="title_e">
                        <p>тематический вечер</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/date.png" alt="event1">
                    </div>
                    <div class="description_e">
                        <p>У нас вы можете запланировать свой необычный вечер: 
                            романтическое свидание при свечах с бокалом игристого, 
                            веселый девичник или тематическая вечеринка, которая 
                            запомнится навсегда и подарит яркие впечатления. Мы 
                            сделаем ваш день особенным и незабываемым.</p>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2500 руб/час</p>
                        </div>
                        <span class="span_e">
                            <p>Время, дата проведения и цена обсуждается индивидуально по телефону.</p>
                        </span>
                    </div>
                </div>
                <div class="block_e">
                    <div class="title_e">
                        <p>корпоратив</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/team.png" alt="event1">
                    </div>
                    <div class="description_e">
                        <p>Запланируйте оригинальное корпоративное мероприятие, 
                            сочетающее в себе современный тимбилдинг, творчество 
                            и полноценный отдых. Для вас в уютной атмосфере 
                            студии увлекательный мастер-класс по лепке или рисованию, 
                            вкусный фуршет, музыка, фото на память.</p>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2500 руб/час</p>
                        </div>
                        <span class="span_e">
                            <p>Время, дата проведения и цена обсуждается индивидуально по телефону.</p>
                        </span>
                    </div>
                </div>
            </div>
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