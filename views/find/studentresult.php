<?php

use app\models\User;

?>

<body>
<header class="header">
    <div class="container">
        <div class="top-navbar">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="/web/site"><img src="../../web/public/img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <?php
                    if (Yii::$app->user->isGuest){ ?>
                        <div class="authorization">
                            <a href="/web/site/login" class="authorization__link">
                                Sign In
                            </a>
                            <a href="/web/site/signup" class="authorization__link">
                                Sign Up
                            </a>
                        </div>
                    <?php } else { ?>

                        <div class="settings">
                            <div class="settings__item">
                                <a href="/web/company/profile" class="settings__email">
                                    <?php echo Yii::$app->user->identity->email ?>
                                </a>
                            </div>
                            <div class="settings__item">
                                <button class="settings__icon settings__icon--1">

                                </button>
                                <button class="settings__icon settings__icon--2">

                                </button>
                                <button class="settings__icon settings__icon--3">

                                </button>
                                <div class="settings__hidden-menu">
                                    <ul class="settings__list">
                                        <li class="settings__list-item">
                                            <a href="#" class="settings__link">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="settings__list-item">
                                            <a href="/web/company/logout" class="settings__link">
                                                Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <div class="adaptive-menu">
                        <div class="adaptive-menu__button">
                            <img src="img/icons/burger.png" alt="burger">
                        </div>
                        <nav class="adaptive-menu__navigation">
                            <ul class="adaptive-menu__list">
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Sign Up
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link adaptive-menu__link--active">
                                        Crew
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Vessels sell/chartering
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Chartering market
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Contacts
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Faq
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-navbar margin-bottom-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="secondary-navigation">
                        <ul class="secondary-navigation__list">
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link secondary-navigation__link--active">
                                    Crew
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Vessels sell/chartering
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Chartering market
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Contacts
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
                                    Faq
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headline">
                    <h1 class="main-headline__title">
                        Find a Crew
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="primary-menu margin-bottom-medium">
                    <a href='#' class="primary-menu__item">
                        <i class="icon-users primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            find a crew
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-user-one primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            find a students (Practice on Board)
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list1 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            place a CV Crew/Students
                        </h3>
                    </a>
                </div>
                <div class="secondary-headline margin-bottom-light text-left">
                    <h2 class="secondary-headline__title">
                        search results for navigation
                    </h2>
                </div>
                <div class="companies-wrapper companies-wrapper--crew">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="companies-headline">
                                <p class="companies-headline__prime">
                                    Select one or more CV
                                </p>
                                <p class="companies-headline__found">
                                    Found: <span class="companies-headline__found-num">138</span> a CV
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 vertical-bottom margin-bottom-light">
                <aside class="right-send">
                    <h3 class="right-send__title">
                        Candidates
                    </h3>
                    <div class="criteria">
                        <p class="criteria__text">Found <span class="criteria__company-num">(138 candidates)</span></p>
                    </div>
                    <div class="criteria">
                        <p class="criteria__text">Selected <span class="criteria__company-num">(12 candidates)</span></p>
                    </div>
                    <div class="criteria">
                        <p class="criteria__text criteria__text--minifont">(your message will be sent to all selected candidates)</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="find-a-crew-result">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php
                        foreach ($model as $cv):
                        $user = User::findOne($cv['user_id']);
                        ?>
                        <div class="col-lg-4">
                            <div class="result-box result-box--active">
                                <div class="result-box__top result-box__top--crew">
                                    <div class="result-box__img-desc">
                                        <div class="result-box__image">
                                            <img src="../../web/public/img/image-box.png" alt="image-box" class="result-box__picture">
                                            <button class="result-box__add-button">&nbsp;</button>
                                        </div>
                                        <div class="result-box__description">
                                                    <span class="result-box__desc-line">
                                                        <?php echo $user['username'] ?>
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        <?php echo $user['second_name'] ?>
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        <?php echo $user['country'] ?>
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        <?php echo $user['city'] ?>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="result-box__active-logo">
                                        <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-12 horizontal-between crew-buttons-container">
                                        <button class="button button--result-box button--crew button--lighten">
                                            show cv
                                        </button>
                                        <div class="checkbox-style checkbox-style--crew">
                                            <input type="checkbox" id='select1' class="checkbox-style__input">
                                            <label for="select1" class="checkbox-style__label checkbox-style__label--crew button--result-box vertical-center horizontal-center">
                                                <span class="checkbox-style__check checkbox-style__check--accepting checkbox-style__check--crew"></span>
                                                select
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="col-lg-4">
                            <div class="result-box">
                                <div class="result-box__top result-box__top--crew">
                                    <div class="result-box__img-desc">
                                        <div class="result-box__image">
                                            <img src="../../web/public/img/image-box.png" alt="image-box" class="result-box__picture">
                                            <button class="result-box__add-button">&nbsp;</button>
                                        </div>
                                        <div class="result-box__description">
                                                    <span class="result-box__desc-line">
                                                        First name
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        Second name
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        Country
                                                    </span>
                                            <span class="result-box__desc-line">
                                                        Port.
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="result-box__active-logo">
                                        <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-12 horizontal-between crew-buttons-container">
                                        <button class="button button--result-box button--crew button--lighten">
                                            show cv
                                        </button>
                                        <div class="checkbox-style checkbox-style--crew">
                                            <input type="checkbox" id='select10' class="checkbox-style__input">
                                            <label for="select10" class="checkbox-style__label checkbox-style__label--crew button--result-box vertical-center horizontal-center">
                                                <span class="checkbox-style__check checkbox-style__check--accepting checkbox-style__check--crew"></span>
                                                select
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <aside class="right-send">
                        <h3 class="right-send__title">
                            contact a candidates
                        </h3>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="NAME" name="name">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="E-MAIL" name="email">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="PHONE" name="phone">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="COMPANY" name="company">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="ATTACH FILE" name="attach file">
                            <div class="add-plus add-plus--attach-file">
                                <p class="add-plus__symbol">
                                    +
                                </p>
                            </div>
                        </div>
                        <div class="textinput-container margin-bottom-medium">
                            <textarea name="message" class="textinput-container__textarea" placeholder="COMMENTS"></textarea>
                        </div>
                        <div class="accepting">
                            <div class="checkbox-style">
                                <input type="checkbox" id='accepting' class="checkbox-style__input">
                                <label for="accepting" class="checkbox-style__label">
                                    <span class="checkbox-style__check checkbox-style__check--accepting"></span>
                                    <p class="checkbox-style__text">I have read and agree to the <a href="#" class="checkbox-style__link">Terms and Conditions</a></p>
                                </label>
                            </div>
                        </div>
                        <button class="button">
                            send
                        </button>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row margin-bottom-light">
                <div class="col-lg-6">
                    <div class="logotype-box">
                        <img src="img/logotype-big.png" alt="logotype" class="logotype-box__footer">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-nav-wrapper">
                        <div class="footer-nav">
                            <h4 class="footer-nav__title">
                                For partners
                            </h4>
                            <ul class="footer-nav__list">
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Crew
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Vessels sell/chartering
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Chartering market
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-nav">
                            <h4 class="footer-nav__title">
                                Learn more
                            </h4>
                            <ul class="footer-nav__list">
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Contacts
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Faq
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Terms and Conditions
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="footer-nav__item">
                                    <a href="#" class="footer-nav__link">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom-light">
                <div class="col-lg-12">
                    <div class="social-networks">
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mail.png" alt="mail">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mobile.png" alt="mobile">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-skype.png" alt="skype">
                        </a>
                        <a href="#" class="social-networks__link">
                            <img src="img/icons/soc-mobile-2.png" alt="mobile">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 horizontal-between">
                    <div class="copyright">
                        <p class="copyright__content">
                            © MarineNotes, 2018
                        </p>
                    </div>
                    <div class="copyright">
                        <p class="copyright__design-by">
                            Design by HoteyCompany
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
</body>
<script src="js/common.js"></script>
