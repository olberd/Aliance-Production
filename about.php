<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/swiper-bundle.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <title>О компании - Aliance Production</title>
</head>
<body>
<div class="mobile-menu">
    <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контрактное производство</a>
            <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Бытовая химия</a>
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#"
                    >Дезинфицирующие средства</a
                    >
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#"
                    >Косметическая продукция</a
                    >
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
                </li>
            </ul>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
            <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
                </li>
                <li class="mobile-submenu-item">
                    <a class="mobile-submenu-link" href="#">Автохимия AP</a>
                </li>
            </ul>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>

    <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
            г. Москва, Холодильный пер. 4к1с8
        </address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
            a.dragunov@tdaliance.ru
        </a>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
        <a href="#">
            <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#vk"></use>
            </svg>
        </a>
        <a href="#">
            <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#inst"></use>
            </svg>
        </a>
    </div>
    <!-- /.mobile-web -->
</div>
<!--    <header class="header header-image">-->
<nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
    </a>

    <a href="./" class="header-logo">
        <svg class="logo-svg logo-light" width="140" height="44">
            <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark" width="140" height="44">
            <use href="img/sprite.svg#logo"></use>
        </svg>
    </a>
    <ul class="header-nav">
        <li class="header-nav-item">
            <a href="about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контакты</a>
        </li>
    </ul>
    <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">
            +7 (499) 686-10-14
        </a>
    </div>
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24px" height="24px">
            <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text" >Получить консультацию</span>
    </button>
</nav>
<!-- /.navbar -->

<header class="header-about">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-content-left">
                <div class="header-content-about">
                    <div class="separator"></div>
                    <h1 class="header-title">о компании</h1>
                    <ul class="header-breadcrumb">
                        <li class="header-breadcrumb-item">
                            <a class="header-breadcrumb-link" href="/index.php">
                                Главная
                            </a>
                        </li>
                        <li class="header-breadcrumb-item-active">О компании</li>
                    </ul>
                </div>
            </div>
            <div class="header-content-right"></div>
        </div>
    </div>
</header>
<header class="header-about">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-content-left">
                <div class="header-content-about">
                    <div class="separator"></div>
                    <h1 class="header-title">Автомобильная химия</h1>
                    <ul class="header-breadcrumb">
                        <li class="header-breadcrumb-item">
                            <a class="header-breadcrumb-link" href="/index.php">
                                Главная
                            </a>
                        </li>
                        <li class="header-breadcrumb-item">
                            <a class="header-breadcrumb-link" href="/index.php">
                                Контрактное производство
                            </a>
                        </li>
                        <li class="header-breadcrumb-item-active">
                            Автомобильная химия
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-content-left">
                <img
                        class="header-content-image"
                        src="img/header-avto-him.png"
                        alt="avto-him"
                />
            </div>
        </div>
    </div>
</header>
<header class="header-about header-background-image">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-content-left">
                <div class="header-content-about">
                    <div class="separator"></div>
                    <h1 class="header-title header-title-light">
                        Современная методология разработки одухотворила всех причастных
                    </h1>
                    <ul class="header-breadcrumb">
                        <li class="header-breadcrumb-item">
                            <a
                                    class="header-breadcrumb-link header-breadcrumb-link-light"
                                    href="/index.php">
                                Главная
                            </a>
                        </li>
                        <li class="header-breadcrumb-item">
                            <a
                                    class="header-breadcrumb-link header-breadcrumb-link-light"
                                    href="/index.php">
                                Блог
                            </a>
                        </li>
                        <li class="header-breadcrumb-item-active header-breadcrumb-item-active-light">
                            Современная методология разработки одухотворила всех
                            причастных
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-content-left"></div>
        </div>
    </div>
</header>

<?php include_once('footer.php') ?>
