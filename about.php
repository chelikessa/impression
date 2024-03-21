<?php
    session_start();
    include 'vendor/components/header.php';
?>

<div class="about">
    <div class="title_block">
        <p>о студии</p>
    </div>
    <div class="block_about">
        <div class="block_text_about">
            <div class="gallery_a">
                <div class="gallery_a_img">
                    <img src="assets/img/images/glina.svg" alt="gallery_a_img">
                </div>
                <div class="gallery_a_img" id="delete">
                    <img src="assets/img/images/glina_2.svg" alt="gallery_a_img">
                </div>
                <div class="gallery_a_img">
                    <img src="assets/img/images/glina_3.svg" alt="gallery_a_img">
                </div>
            </div>
            <div class="text_about">
                <p>
                    Добро пожаловать в мастерскую, где рождаются уникальные произведения искусства из глины!
                </p>
            </div>
        </div>
        <div class="masters">
            <div class="title_block">
                <p>наши мастера</p>
            </div>
            <div class="text_block_masters">
                <div class="text_b_m">
                    <p>Наши гончары - настоящие художники, способные превратить простую глину в произведение искусства, которое будет радовать вас каждый день.</p>
                </div>
            </div>
            <div class="block_block_masters">
                <div class="block_m">
                    <div class="title_e">
                        <p>Мария</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/master1.svg" alt="master1">
                    </div>
                    <div class="description_mc">
                        <p>
                            Мария - мастер с многолетним опытом, которая не только поможет вам воплотить самые амбициозные фантазии по созданию гончарных изделий в жизнь, но и создаст желание возвращаться в студию снова и снова за новыми впечатлениями и релаксом.
                        </p>
                    </div>
                </div>
                <div class="block_m">
                    <div class="title_e">
                        <p>Екатерина</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/master2.svg" alt="master1">
                    </div>
                    <div class="description_mc">
                        <p>
                            Екатерина уже не первый год профессионально занимается гончарным делом, поэтому даже самое сложное изделие легко получится даже у не очень опытных участников мастер-класса.
                        </p>
                    </div>
                </div>
                <div class="block_m">
                    <div class="title_e">
                        <p>Александра</p>
                    </div>
                    <div class="img_e">
                        <img src="assets/img/images/master1.svg" alt="master1">
                    </div>
                    <div class="description_mc">
                        <p>
                            Александра многие годы оттачивала умение работать на гончарном круге, чтобы погрузить гостей мастер-классов в невероятный мир керамики и научить их делать шедевры своими руками
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts" id="contacts">
            <div class="title_block">
                <p>контакты</p>
            </div>
            <div class="block_contacts">
                <div class="link_b_c">
                    <div class="messengers_footer_img">
                        <a href=""><img src="assets/img/icons/telegram.png" alt="telegram"></a>
                    </div>
                    <div class="messengers_footer_img">
                        <a href=""><img src="assets/img/icons/vk.png" alt="vk"></a>
                    </div>
                    <div class="messengers_footer_img">
                        <a href=""><img src="assets/img/icons/whatsapp.png" alt="whatsapp"></a>
                    </div>
                </div>
                <div class="text_b_c">
                    <p><b>почта:</b><br><a href="mailto: l13yana@yandex.ru">impression.info@mail.com</a></p>
                    <p><b>телефон:</b><br><a href="tel:89196400340">8-900-900-99-99</a></p>
                    <p><b>время работы:</b><br>ПН выходной, ВТ-ВТ 11:00-21:00</p>
                    <p><b>адрес:</b><br><a href="https://yandex.ru/maps/-/CDqMmMoK">ул. Красный путь, 81</a></p>
                </div>
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