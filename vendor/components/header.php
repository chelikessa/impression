<?php
    include 'core.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRESSION</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <link rel="stylesheet" href="assets/styles/animate.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="header_logo">
                    <div class="img">
                        <a href=""><img src="././assets/img/icons/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="header_row">
                    <div class="header_row_one">
                        <a href="./index.php" class="header_logo_text">
                            IMPRESSION
                        </a>
                        <nav class="menu_body">
                            <ul class="menu_list">
                                <li><a href="mailto: impression.info@mail.ru">impression.info@mail.ru</a></li>
                                <p>|</p>
                                <li><a href="tel:89196400340">8-900-900-99-99</a></li>
                                <p>|</p>
                                <li><a href="https://yandex.ru/maps/-/CDqMmMoK">ул. Красный путь, 81</a></li>
                            </ul>
                        </nav>
                        <div class="burger_menu" id="burger_menu">
                            <span id="span1"></span>
                            <span id="span2"></span>
                            <span id="span3"></span>
                        </div>
                    </div>
                    <div class="top_nav">
                        <div class="title_top_nav"><a href="./index.php">impression</a></div>
                        <span class="span_top_nav"></span>
                        <div class="nav_top_nav">
                            <a href="./master_class.php">мастер-классы</a>
                            <a href="./events.php">мероприятия</a>
                            <a href="./about.php">о студии</a>
                            <a href="./index.php#gallery">галерея</a>
                            <a href="./about.php#contacts">контакты</a>
                        </div>
                        <span class="span_top_nav"></span>
                        <div class="account_top_nav">
                            <?php if(!isset($_SESSION['user'])): ?>
                                <li><a href="./auth.php" class="bi">войти</a></li>
                                <?php else: ?>
                                    <li><a href="./private.php" class="b" >личный кабинет</a></li>
                                <?php if($_SESSION['user']['isAdmin'] == '1'): ?>   
                                    <a href="./admin_panel.php" class="b">админ панель</a>
                                <?php endif; ?>
                                <a href="./logout.php" class="bi">выход</a>
                            <?php endif; ?>
                        </div>
                        <span class="span_top_nav"></span>
                        <div class="info_top_nav">
                            <a href="mailto: impression.info@mail.ru">impression.info@mail.ru</a>
                            <a href="tel:89196400340">8-900-900-99-99</a>
                            <a href="https://yandex.ru/maps/-/CDqMmMoK">ул. Красный путь, 81</a>
                        </div>
                    </div>
                    <div class="header_row_two">
                        <nav class="menu_body_two">
                            <ul class="nav_neader">
                                <li><a href="./master_class.php">мастер-классы</a></li>
                                <li><a href="./events.php">мероприятия</a></li>
                                <li><a href="./about.php">о студии</a></li>
                                <li><a href="./index.php#gallery">галерея</a></li>
                                <li><a href="./about.php#contacts">контакты</a></li>
                            </ul>
                        </nav>
                        <ul class="account">
                            <?php if(!isset($_SESSION['user'])): ?>
                                <li><a href="./auth.php">войти</a></li>
                                <?php else: ?>
                                    <li><a href="./private.php">личный кабинет</a></li>
                                <?php if($_SESSION['user']['isAdmin'] == '1'): ?>   
                                    <a href="./admin_panel.php">админ панель</a>
                                <?php endif; ?>
                                <a href="./logout.php">выход</a>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">