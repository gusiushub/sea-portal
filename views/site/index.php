<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Start page';

?>
<body>
<div class="main-page-wrapper">
    <header class="header header--blue">
        <div class="container">
            <div class="top-navbar">
                <div class="row">
                    <div class="col-lg-6 vertical-center">
                        <div class="logotype-box">
                            <a href="#"><img src="../../web/public/img/white-logo.png" alt="logotype" class="logotype-box__logo logotype-box__logo--white"></a>
                        </div>
                        <div class="adaptive-menu">
                            <div class="adaptive-menu__button adaptive-menu__button--white">
                                <img src="../../web/public/img/icons/burger-white.png" alt="burger">
                            </div>
                            <nav class="adaptive-menu__navigation adaptive-menu__navigation--main-page">
                                <ul class="adaptive-menu__list">
                                    <li class="adaptive-menu__item">
                                        <a href="/web/site/login" class="adaptive-menu__link">
                                            Sign In
                                        </a>
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a href="/web/site/signup" class="adaptive-menu__link">
                                            Sign Up
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
                    <div class="col-lg-6">
                        <div class="authorization">
                            <?php if (!Yii::$app->user->isGuest){  ?>
                            <a href="<?php if (Yii::$app->user->identity->user_status==1) {
                                echo '/web/site/profile';
                            }
                            if (Yii::$app->user->identity->user_status==2) {
                                echo '/web/company/profile';
                            }
                            if (Yii::$app->user->identity->user_status==3) {
                                echo '/web/seller/profile';
                            } ?>" class="authorization__link authorization__link--white">
                                Profile
                            </a>
                            <a href="/web/user/logout" class="authorization__link authorization__link--white">
                                Logout

                            </a>
                            <?php } else{ ?>
                            <a href="/web/site/login" class="authorization__link authorization__link--white">
                                Sign In
                            </a>
                            <a href="/web/site/signup" class="authorization__link authorization__link--white">
                                Sign Up

                            </a>
                            <?php } ?>
                            <a href="#" class="authorization__link authorization__link--white">
                                Faq
                            </a>
                            <a href="#" class="authorization__link authorization__link--white">
                                Contacts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="page-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 horizontal-center">
                    <div class="company-description">
                        <img src="../../web/public/img/logotype-big.png" alt="logotype" class="company-description__logo margin-bottom-light">
                        <div class="company-description__spetifications">
                            <p class="company-description__paragraph">
                                The main aim of the portal is to minimise the searching time of needed
                            </p>
                            <p class="company-description__paragraph margin-bottom-medium">
                                <span class="company-description__paragraph--blue">services, goods, crew, vessels and cargo</span> in any part of the world.
                            </p>
                            <p class="company-description__paragraph">
                                Thanks to the capacious data-base and unique searching system
                            </p>
                            <p class="company-description__paragraph">
                                you can easily find or offer everything you need in any port of the world!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="five-buttons horizontal-between">
                        <a href='/web/find/shipboard-supply' class="five-buttons__item">
                            <div class="icon-wrapper">
                                <img src="../../web/public/img/icons/zoom-5btn.png" alt="zoom" class="five-buttons__icon">
                            </div>
                            <h4 class="five-buttons__title">
                                Find a supplier
                            </h4>
                        </a>
                        <a href='/web/site/become-supplier' class="five-buttons__item">
                            <div class="icon-wrapper">
                                <img src="../../web/public/img/icons/hands-5btn.png" alt="hands" class="five-buttons__icon">
                            </div>
                            <h4 class="five-buttons__title">
                                Become a supplier
                            </h4>
                        </a>
                        <a href='/web/find/crew' class="five-buttons__item">
                            <div class="icon-wrapper">
                                <img src="../../web/public/img/icons/case-5btn.png" alt="case" class="five-buttons__icon">
                            </div>
                            <h4 class="five-buttons__title">
                                Crew
                            </h4>
                        </a>
                        <a href='/web/find/vessels-sale' class="five-buttons__item">
                            <div class="icon-wrapper">
                                <img src="../../web/public/img/icons/ship-5btn.png" alt="ship" class="five-buttons__icon">
                            </div>
                            <h4 class="five-buttons__title">
                                Vessels sell/chartering
                            </h4>
                        </a>
                        <a href='#' class="five-buttons__item">
                            <div class="icon-wrapper">
                                <img src="../../web/public/img/icons/changing-5btn.png" alt="changing" class="five-buttons__icon">
                            </div>
                            <h4 class="five-buttons__title">
                                Chartering market
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<script src="../../web/public/js/common.js"></script>
