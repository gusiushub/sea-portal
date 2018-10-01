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

                    use app\models\User;

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
                                    <a href="#" class="adaptive-menu__link">
                                        Crew
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link adaptive-menu__link--active">
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
                                <a href="/web/find/shipboard-supply" class="secondary-navigation__link">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/web/site/become-supplier" class="secondary-navigation__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/web/find/crew" class="secondary-navigation__link">
                                    Crew
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/web/find/vessels-sale" class="secondary-navigation__link secondary-navigation__link--active">
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
                <div class="main-headline main-headline--no-underline">
                    <h1 class="main-headline__title">
                        vessels sell / chartering
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="primary-menu margin-bottom-medium">
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Vessels for sale
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-tranport primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            vessels for Chartering
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list4 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            offer a vessel for sell/chartering
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="find-a-vessels-result">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="companies-headline vertical-bottom">
                        <div class="secondary-headline text-left">
                            <h2 class="secondary-headline__title">
                                search results for vessels for sale
                            </h2>
                        </div>
                        <p class="companies-headline__found">

                            Found: <span class="companies-headline__found-num"><?php echo count($findVesselsPlus)+count($findVessels) ?></span> vessels
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($findVesselsPlus as $findVesselPlus) {
                    if (!empty($findVesselPlus)) {
                        $user = User::findIdentity($findVesselPlus['user_id']);
                        ?>
                        <div class="col-lg-3">
                            <div class="result-box result-box--active">
                                <div class="result-box__top">
                                    <div class="result-box__img-desc">
                                        <div class="result-box__image">
                                            <?php if (!empty($user['img'])){ ?>
                                            <img src="../../web/public/uploads/<?php echo $user['img'] ?>" alt="image-box" class="result-box__picture">
                                                 <?php }else{  ?>
                                            <img src="../../web/public/img/image-box.png" alt="image-box" class="result-box__picture">
                                                 <?php } ?>

                                            <button class="result-box__add-button">&nbsp;</button>
                                        </div>
                                        <div class="result-box__description">
                                            <span class="result-box__desc-line">
                                                <?php echo $findVesselPlus['year']  ?>
                                            </span>
                                            <span class="result-box__desc-line">
                                                Flag<?php echo $findVesselPlus['flag']  ?>
                                            </span>
                                            <span class="result-box__desc-line">
                                                Length
                                            </span>
                                            <span class="result-box__desc-line">
                                                Price
                                            </span>
                                        </div>
                                    </div>
                                    <div class="result-box__active-logo">
                                        <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                                    </div>
                                </div>
                                <div class="result-box__bottom">
                                    <a href="/web/find/about-ship?id=<?php echo $user['id'] ?>">
                                        <button class="button button--result-box">
                                            full info
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                //var_dump($findVessels);
                foreach ($findVessels as $findVessel) {
                    $user = User::findOne($findVessel['user_id']);
                if (!empty($findVessel)){
                    ?>
                <div class="col-lg-3">
                    <div class="result-box">
                        <div class="result-box__top">
                            <div class="result-box__img-desc">
                                <div class="result-box__image">
                                    <?php if (!empty($user['img'])){ ?>
                                        <img src="../../web/public/uploads/<?php echo $user['img'] ?>" alt="image-box" class="result-box__picture">
                                    <?php }else{  ?>
                                        <img src="../../web/public/img/image-box.png" alt="image-box" class="result-box__picture">
                                    <?php } ?>
                                    <button class="result-box__add-button">&nbsp;</button>
                                </div>
                                <div class="result-box__description">
                                            <span class="result-box__desc-line">
                                                Year
                                            </span>
                                    <span class="result-box__desc-line">
                                                Flag
                                            </span>
                                    <span class="result-box__desc-line">
                                                Length
                                            </span>
                                    <span class="result-box__desc-line">
                                                Price
                                            </span>
                                </div>
                            </div>
                            <div class="result-box__active-logo">
                                <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                            </div>
                        </div>
                        <div class="result-box__bottom">
                            <a href="/web/find/about-ship?id=<?php echo $user['id'] ?>">
                                <button class="button button--result-box">
                                    full info
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container">
        <div class="row margin-bottom-light">
            <div class="col-lg-6">
                <div class="logotype-box">
                    <img src="../../web/public/img/logotype-big.png" alt="logotype" class="logotype-box__footer">
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
                                <a href="/web/find/shipboard-supply" class="footer-nav__link">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/site/become-supplier" class="footer-nav__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/find/crew" class="footer-nav__link">
                                    Crew
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/find/shipboard-supply" class="footer-nav__link">
                                    Vessels sell/chartering
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/find/shipboard-supply" class="footer-nav__link">
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
                                <a href="/web/site/contacts" class="footer-nav__link">
                                    Contacts
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/site/faq" class="footer-nav__link">
                                    Faq
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/site/terms-conditions" class="footer-nav__link">
                                    Terms and Conditions
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/site/login" class="footer-nav__link">
                                    Sign In
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/site/signup" class="footer-nav__link">
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
                        <img src="../../web/public/img/icons/soc-mail.png" alt="mail">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../web/public/img/icons/soc-mobile.png" alt="mobile">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../web/public/img/icons/soc-skype.png" alt="skype">
                    </a>
                    <a href="#" class="social-networks__link">
                        <img src="../../web/public/img/icons/soc-mobile-2.png" alt="mobile">
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

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="../../web/public/js/common.js"></script>

