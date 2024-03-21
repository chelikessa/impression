<?php
    session_start();
    include 'vendor/components/header.php';
?>

<div class="master_class">
    <div class="title_block">
        <p>мастер-классы</p>
    </div>
    <div class="block_master_class">
        <div class="block_gallery_mc">
            <div class="gallery_mc">
                <div class="gallery_mc_img">
                    <div class="_1_g_mc_img">
                        <img src="assets/img/images/whiteplate.png" alt="gallery_mc_img">
                    </div>
                    <div class="_1_g_mc_img">
                        <img src="assets/img/images/sheep.png" alt="gallery_mc_img">
                    </div>
                </div>
                <div class="gallery_mc_img">
                    <div class="_1_g_mc_img">
                        <img src="assets/img/images/manycoconut.png" alt="gallery_mc_img">
                    </div>
                    <div class="_1_g_mc_img">
                        <img src="assets/img/images/cat.png" alt="gallery_mc_img">
                    </div>
                </div>
                <div class="gallery_mc_img_2">
                    <img src="assets/img/images/cupwhale.png" alt="gallery_mc_img">
                    <img src="assets/img/images/coconut.png" alt="gallery_mc_img">
                </div>
                <div class="gallery_mc_img_2">
                    <img src="assets/img/images/brownplate.png" alt="gallery_mc_img">
                    <img src="assets/img/images/vase.png" alt="gallery_mc_img">
                </div>
            </div>
            <div class="text_gallery_mc">
                <p>
                    Почувствуйте себя настоящим мастером, отвлекитесь от повседневных забот и приятно проведите время.
                </p>
                <br>
                <p>
                    Вдохновитесь уникальным творческим процессом и унесите домой шедевр собственного изготовления.
                </p>
            </div>
        </div>
        <div class="block_theme_mc" id="theme">
            <div class="mini_title_block_mc">
                <p>тематические мастер-классы</p>
            </div>
            <div class="theme_mc">
                <div class="block_mc">
                    <div class="title_e">
                        <p>“гончарный круг”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/potterswheel.png" alt="mc1">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                            закатайте рукава, будем лепить и декорировать!
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 1,5 часа</li>
                            <li>тип занятия: ручная лепка</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: готовое керамическое изделие, 
                                функциональное в быту или интерьере</li>
                            <li>какие изделия: кружки, тарелки, миски, вазочки и декор</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 1700 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>“лепка”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/lepka.png" alt="mc2">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        сосредоточит ваш ум и сердце на работе, и вы не 
                        будете беспокоиться ни о чем другом
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 1,5 часа</li>
                            <li>тип занятия: ручная лепка</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: готовое керамическое изделие, 
                                функциональное в быту или интерьере</li>
                            <li>какие изделия: кружки, тарелки, миски, вазочки и декор</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 1500 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>“индивидуальный”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/freelepka.png" alt="mc3">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        только Вы, глина и мастер
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 2 часа</li>
                            <li>тип занятия: на Ваш выбор</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: готовое керамическое изделие, 
                                функциональное в быту или интерьере</li>
                            <li>глазуровка - проходит вторым занятием, после 
                                первого обжига изделий</li>
                            <li>какие изделия: что захотите, то и сделаем!</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2500 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>“чайная пара”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/cup.svg" alt="mc4">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        сделает Ваши вечера приятнее
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 2 часа</li>
                            <li>тип занятия: гончарный круг и ручная лепка</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: 2 готовых керамических изделия, 
                                функциональных в быту</li>
                            <li>глазуровка - проходит вторым занятием, после 
                                первого обжига изделий</li>
                            <li>какие изделия: чашка и блюдце</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2200 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>“бусы”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/busi.png" alt="mc4">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        сделает вас уникальнее!
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 2.5 часа</li>
                            <li>тип занятия: ручная лепка</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: 1 изделие, которое сделает 
                                Вас ярче!</li>
                            <li>глазуровка - проходит вторым занятием, после 
                                первого обжига изделий</li>
                            <li>какие изделия: чокер, бусы или браслет</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 3000 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>“бокалы”</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/bokali.png" alt="mc6">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        для тех, кто хочет себе посуду 
                        для романтических вечеров
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 2 часа</li>
                            <li>тип занятия: ручная лепка</li>
                            <li>что входит: глина, все инструменты, материалы и 
                                оборудование, обжиг, глазуровка, повторный обжиг</li>
                            <li>что Вы получите: 1 изделие, которое сделает 
                                Вас ярче!</li>
                            <li>глазуровка - проходит вторым занятием, после 
                                первого обжига изделий</li>
                            <li>какие изделия: 2 бокала</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 2700 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_theme_mc" id="rosp">
            <div class="mini_title_block_mc">
                <p>роспись</p>
            </div>
            <div class="theme_mc">
                <div class="block_mc">
                    <div class="title_e">
                        <p>роспись глазурями</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/paint.png" alt="mc1">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                            роспись Ваших изделий цветными глазурями 
                            для реализации задумок
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>время мастер-класса: 1 час</li>
                            <li>на этом мастер-классе вы сможете заглазуровать 
                                только сделанные Вами изделия</li>
                            <li>что входит: материалы, обжиги</li>
                            <li>Вы делаете изделие, и после первого обжига,
                                 записываетесь на МК по глазуровке</li>
                        </ul>
                        <span class="span_d_mc"><p>Мы не можем гарантировать идеальное 
                                глазурное покрытие изделий. Это ручная работа. 
                                Брак возможен при любом варианте глазуровки, это 
                                обусловлено сложным и многофакторным тех. процессом 
                                изготовления керамики.</p></span>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>600 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>pottery-cafe</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/many_plate.svg" alt="mc1">
                    </div>
                    <div class="mini_title_mc">
                        <p>
                        отличный способ провести выходные и создать 
                        уникальное творение своими руками
                        </p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>выбирайте себе изделие из уже имеющихся готовых
                                 в мастерской, покрывайте глазурями</li>
                            <li>изделия выкупаются - от 100 рублей</li>
                            <li>стоимость мастер-класса по росписи в формате Pottery 
                                cafe - 600 рублей, плюс стоимость изделия которое вы 
                                хотите расписать и забрать себе</li>
                        </ul>
                        <span class="span_d_mc"><p>Мы не можем гарантировать идеальное 
                                глазурное покрытие изделий. Это ручная работа. 
                                Брак возможен при любом варианте глазуровки, это 
                                обусловлено сложным и многофакторным тех. процессом 
                                изготовления керамики.</p></span>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 600 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="block_theme_mc" id="fire">
            <div class="mini_title_block_mc">
                <p>обжиг</p>
            </div>
            <div class="theme_mc">
                <div class="block_mc">
                    <div class="title_e">
                        <p>утиль</p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>1 изделие - 50 руб</li>
                            <li>1 полка - 500 руб</li>
                            <li>печь - 1000 руб</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 50 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="title_e">
                        <p>глазурный обжиг</p>
                    </div>
                    <div class="description_mc">
                        <ul>
                            <li>1 изделие - 150 руб</li>
                            <li>1 полка - 700 руб</li>
                            <li>печь - 1300 руб</li>
                        </ul>
                    </div>
                    <div class="btn_price_e">
                        <div class="price_e">
                            <p>от 50 руб.</p>
                        </div>
                        <?php if(!isset($_SESSION['user'])): ?>
                            <a href="auth.php"><button>записаться</button></a>
                        <?php else: ?>
                            <a href="record_for_mc.php"><button>записаться</button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="block_mc">
                    <div class="description_mc">
                        <ul>
                            <li>при аренде места в печи обязательна 
                                информация о глине (производителе) и 
                                глазурях, и знание температуры, на 
                                которой обжигать</li>
                            <li>глазурованные тарелки (в зависимости 
                                от диаметра) идут чаще всего как "за полку"</li>
                            <li>температура для обжига ваших изделий 
                                - до 1200 С</li>
                            <li>режим обжига можем настроить Ваш, 
                                можем оставить свой</li>
                        </ul>
                        <span class="span_d_mc"><p>Не несем ответственности 
                            за разрывы изделий, потеки глазурей и т.д., 
                            так как такие нюансы закладываются на этапе 
                            производства изделий Вами.</p></span>
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