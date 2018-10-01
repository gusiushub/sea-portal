<?php
use yii\bootstrap\ActiveForm;
?>

<body xmlns="http://www.w3.org/1999/html">
<header class="header">
    <div class="container">
        <div class="top-navbar top-navbar--no-buttons">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="#"><img src="../../web/public/img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <div class="settings">
                        <div class="settings__item">
                            <a href="#" class="settings__email">
                                <?php  echo Yii::$app->user->identity->email ?>
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
                                        <a href="/web/seller/profile" class="settings__link">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="settings__list-item">
                                        <a href="/web/seller/logout" class="settings__link">
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="adaptive-menu">
                        <div class="adaptive-menu__button">
                            <img src="../../web/public/img/icons/burger.png" alt="burger">
                        </div>
                        <nav class="adaptive-menu__navigation">
                            <ul class="adaptive-menu__list">
                                <?php if (!Yii::$app->user->isGuest){  ?>
                                    <li class="adaptive-menu__item">
                                        <a class="adaptive-menu__link" href="<?php if (Yii::$app->user->identity->user_status==1) {
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
                                    </li>
                                    <li class="adaptive-menu__item">
                                        <a class="adaptive-menu__link" href="/web/user/logout" class="authorization__link authorization__link--white">
                                            Logout
                                        </a>
                                    </li>
                                <?php } else{ ?>

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
                                <?php } ?>

                                <li class="adaptive-menu__item">
                                    <a href="/web/find/shipboard-supply" class="adaptive-menu__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/site/become-supplier" class="adaptive-menu__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/site/crew" class="adaptive-menu__link">
                                        Crew
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/find/vessels-sale" class="adaptive-menu__link">
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
                                <a href="/web/find/vessels-sale" class="secondary-navigation__link">
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
                <div class="main-headline main-headline--profile">
                    <h1 class="main-headline__title">
                        Profile
                    </h1>
                    <a href="#" class="settings__email settings__email--head">
                        <?php  echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/company/profile' class="primary-menu__item ">
                        <i class="icon-town primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            about the company
                        </h3>
                    </a>
                    <a href='/web/company/pricing' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='/web/company/statistics' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='/web/company/contracts' class="primary-menu__item">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            contracts
                        </h3>
                    </a>
                    <a href='/web/company/advertisement' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Place an adverticement
                        </h3>
                    </a>
                    <a href='/web/company/request' class="primary-menu__item ">
                        <i class="icon-message primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            incoming requests
                        </h3>
                    </a>
                    <a href='/web/company/terms-conditions' class="primary-menu__item">
                        <i class="icon-list3 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            terms and conditions
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="profile5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cards-wrapper horizontal-between margin-bottom-light">
                        <div class="sell-card sell-card--mini">
                            <div class="sell-card__cost">
                                <img src="../../web/public/img/silver.png" alt="cost" class="sell-card__image">
                            </div>
                            <div class="sell-card__information">
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Placement of advertisng  banner on two pages of the we iste (On your choice from Ad
                                    space available at the time of the placement).
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Banner placement for 1 month
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Possibility to place a banner in GIF or JPEG format
                                </p>
                            </div>
                            <div class="sell-card__button">
                                <button class="button button--transparent">
                                    your package
                                </button>
                            </div>
                        </div>
                        <div class="sell-card sell-card--mini">
                            <div class="sell-card__cost">
                                <img src="../../web/public/img/gold.png" alt="cost" class="sell-card__image">
                            </div>
                            <div class="sell-card__information">
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Placement of advertisng  banner on three pages of the we iste (On your choice from Ad
                                    space available at the time of the placement).
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Banner placement for 1 month
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Possibility to place a banner in GIF or JPEG format
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Possibility to change the desing of the banner
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                    - Transition from the banner to the company's webpage upon clicking
                                </p>
                            </div>
                            <div class="sell-card__button">
                                <button class="button">
                                    Select package
                                </button>
                            </div>
                        </div>
                        <div class="sell-card sell-card--mini">
                            <div class="sell-card__cost">
                                <img src="../../web/public/img/platinum.png" alt="cost" class="sell-card__image">
                            </div>
                            <div class="sell-card__information">
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Placement of advertisng  banner on all pages of the we iste (On your choice from Ad
                                    space available at the time of the placement).
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Banner placement for 1 month
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Possibility to place a banner in GIF or JPEG format
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left">
                                    - Possibility to change the desing of the banner
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                    - Transition from the banner to the company's webpage upon clicking
                                </p>
                                <p class="sell-card__paragraph sell-card__paragraph--no-margin text-left margin-bottom-light">
                                    - Desing process of the advertising banner by our specialists
                                </p>
                            </div>
                            <div class="sell-card__button">
                                <button class="button">
                                    Select package
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-title margin-bottom-light">
                        <h3 class="sub-title__title">
                            select the page to place your advertising:
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-advertising">
                        <div class="slider-advertising__slide" data-number='1'>
                            <div class="slider-advertising__display">
                                <img src="../../web/public/img/mini_find_a_supplier.jpg" alt="screen-image" class="slider-advertising__image">
                                <h5 class="slider-advertising__headline">
                                    find a supplier
                                </h5>
                            </div>
                        </div>
                        <div class="slider-advertising__slide" data-number='2'>
                            <div class="slider-advertising__display">
                                <img src="../../web/public/img/mini_find_a_crew.jpg" alt="screen-image" class="slider-advertising__image">
                                <h5 class="slider-advertising__headline">
                                    find a crew
                                </h5>
                            </div>
                        </div>
                        <div class="slider-advertising__slide" data-number='3'>
                            <div class="slider-advertising__display">
                                <img src="../../web/public/img/mini_find_a_student.jpg" alt="screen-image" class="slider-advertising__image">
                                <h5 class="slider-advertising__headline">
                                    find a student
                                </h5>
                            </div>
                        </div>
                        <div class="slider-advertising__slide" data-number='4'>
                            <div class="slider-advertising__display">
                                <img src="../../web/public/img/mini_find_vessels.jpg" alt="screen-image" class="slider-advertising__image">
                                <h5 class="slider-advertising__headline" >
                                    find a vessels
                                </h5>
                            </div>
                        </div>
                        <div class="slider-advertising__slide" data-number='5'>
                            <div class="slider-advertising__display">
                                <img src="../../web/public/img/mini_find_chartering.jpg" alt="screen-image" class="slider-advertising__image">
                                <h5 class="slider-advertising__headline">
                                    find a chartering
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row horizontal-between">
                <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                    <button class="button">
                        back
                    </button>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                    <button class="button">
                        pay
                    </button>
                </div>
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
                        Design by HoteyCompany
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="slider-advertising__modal vertical-center" data-number='1'>
    <div class="slider-advertising__wrapper">
        <f class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">

                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a supplier
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../web/public/img/modal/modal_find_a_supplier_500x289.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div name="text" disabled="false" data-num="1"  class="slider-advertising__available available">
                                                available
                                            </div>
                                            <div onclick="select2()" data-num="2" class="slider-advertising__available available">
                                                available
                                            </div>
                                            <div onclick="select3()" data-num="3" class="slider-advertising__available available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div onclick="select6()" data-num="4" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div onclick="select5()" data-num="5" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div onclick="select4()" data-num="6" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row horizontal-between">
                            <div  class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button onclick="save()" class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">

                                <!--                                скрытие type=file-->
                                <button type="button" class="button button--profile">
                                    <label class="submit" for="uploadbtn" >upload</label>
                                </button>
                                <?= $form->field($upload, 'image')->fileInput( ['id' => 'uploadbtn','style'=>"opacity: 0"]) ?>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button type="button" class="button button--profile slider-advertising__back" data-number='1'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                    <input type="hidden" name="inp"  value="asd">
                    <?php ActiveForm::end() ?>
                </div>
            </div>
    </div>
</div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='2'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a crew
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../web/public/img/modal/modal_find_a_crew_500x400.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="7" onclick="select7()" class="slider-advertising__available available">
                                                available
                                            </div>
                                            <div data-num="8" onclick="select8()" class="slider-advertising__available available">
                                                available
                                            </div>
                                            <div data-num="9" onclick="select9()" class="slider-advertising__available available">
                                                available
                                            </div>
                                            <div data-num="10" onclick="select10()" class="slider-advertising__available available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="11" onclick="select11()" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="12" onclick="select12()" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="13" onclick="select13()" class="slider-advertising__available slider-advertising__available--no-margin available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button type="button" class="button button--profile">
                                    <label class="submit" for="uploadbtn2" >upload</label>
                                </button>
                                <?= $form->field($upload, 'image')->fileInput( ['id' => 'uploadbtn2','style'=>"opacity: 0"]) ?>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button type="button" class="button button--profile slider-advertising__back" data-number='2'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                    <input type="hidden" name="inp"  value="asd">
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='3'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            Find a student
                                        </h1>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../web/public/img/modal/modal_find_a_student_500x435.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select14()" class="slider-advertising__available">
                                                select
                                            </div>
                                            <div data-num="6" onclick="select15()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select16()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select17()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select20()" class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select21()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select22()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select23()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='3'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='4'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            find a vessels
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../web/public/img/modal/modal_find_vessels_500x480.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select24()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select25()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select26()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select27()" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" onclick="select28()" class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select29()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select30()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" onclick="select31()" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='4'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--motd-end-->
<div class="slider-advertising__modal vertical-center" data-number='5'>
    <div class="slider-advertising__wrapper">
        <div class="container">
            <div class="row horizontal-center">
                <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                    <div class="slider-advertising__modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sub-title margin-bottom-light text-center">
                                    <h3 class="sub-title__title">
                                        select the page to place your advertising:
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="slider-advertising__adv-place">
                                    <div class="main-headline main-headline--modal">
                                        <h1 class="main-headline__title main-headline__title--modal">
                                            find a chartering
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <img src="../../web/public/img/modal/modal_find_chartering_500x480.jpg" alt="screen-page" class="slider-advertising__page-screen" >
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" class="slider-advertising__available">
                                                available
                                            </div>
                                            <div data-num="6" class="slider-advertising__available">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div data-num="6" class="slider-advertising__available slider-advertising__available--no-margin">
                                                available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile">
                                    save
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <button class="button button--profile slider-advertising__back" data-number='5'>
                                    back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<script>-->
<!--    // Описываем общие установки для всех ajax-запросов-->
<!--    $.ajaxSetup({-->
<!--        url: 'path/to/handler.php', // путь к php-обработчику-->
<!--        type: 'POST', // метод передачи данных-->
<!--        dataType: 'json', // тип ожидаемых данных в ответе-->
<!--        beforeSend: function(){ // Функция вызывается перед отправкой запроса-->
<!--            console.debug('Запрос отправлен. Ждите ответа.');-->
<!--            // тут можно, к примеру, начинать показ прелоадера, в общем, на ваше усмотрение-->
<!--        },-->
<!--        error: function(req, text, error){ // отслеживание ошибок во время выполнения ajax-запроса-->
<!--            console.error('Упс! Ошибочка: ' + text + ' | ' + error);-->
<!--        },-->
<!--        complete: function(){ // функция вызывается по окончании запроса-->
<!--            console.debug('Запрос полностью завершен!');-->
<!--            // тут завершаем показ прелоадера, если вы его показывали-->
<!--        }-->
<!--    });-->
<!--</script>-->
<!--<form action="/web/site/form" method="post" id="my_form" enctype="multipart/form-data"><br>-->
<!--    <label for="fio">Ф.И.О:</label><br>-->
<!--    <input type="text" name="fio" id="fio"><br><br>-->
<!--    <label for="avatar">Аватар:</label><br>-->
<!--    <input type="file" name="avatar" id="avatar"><br><br>-->
<!--    <input type="submit" id="submit" value="Отправить"><br>-->
<!--</form><br>-->
<!--<script>-->
<!--    $(function(){-->
<!--        $('#my_form').on('submit', function(e){-->
<!--            e.preventDefault();-->
<!--            var $that = $(this),-->
<!--                formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)-->
<!--            $.ajax({-->
<!--                contentType: false, // важно - убираем форматирование данных по умолчанию-->
<!--                processData: false, // важно - убираем преобразование строк по умолчанию-->
<!--                data: formData,-->
<!--                success: function(json){-->
<!--                    if(json){-->
<!--                        // тут что-то делаем с полученным результатом-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->
<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
<!--motd-end-->
</body>
<!--<script src="../../web/public/libs/jQuery/jquery-3.3.1.min.js"></script>-->
<script src="../../web/public/js/common.js"></script>
<script src="../../web/public/libs/slick/slick.min.js"></script>
<script>
    $('.slider-advertising').slick({
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1238,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1026,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 800,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<style>
    .slick-prev:before,
    .slick-next:before {
        display: none;
    }

    .slick-prev,
    .slick-next {
        width: 50px;
        height: 100px;
        z-index:5;
    }

    .slick-prev,.slick-prev:hover,.slick-prev:focus {
        left: 24px;
        background: url(../../web/public/img/icons/arrow-left.png);
        background-repeat: no-repeat;
        background-position: center;
        transform: translate(-60%,-50%);
    }

    .slick-next,.slick-next:hover,.slick-next:focus {
        right: 24px;
        background: url(../../web/public/img/icons/arrow-right.png);
        background-repeat: no-repeat;
        background-position: center;
        transform: translate(60%,-50%);
    }
</style>

<script>


    $(document).ready(function(){
        $('.available').click(function(){
            var text = $('input[name="inp"]').text();
            var qwe = $(this).data('num');
            console.log($('input[name="inp"]').val(text + qwe));
        });
    });








    var _csrf = $('input[name="_csrf"]').val();




    // Переменная куда будут располагаться данные файлов

    var files;

    // Вешаем функцию на событие
    // Получим данные файлов и добавим их в переменную

    // $('input[type=file]').change(function(){
    //     files = this.files;
    //     //$('.submit').click(function( event ){
    //         event.stopPropagation(); // Остановка происходящего
    //         event.preventDefault();  // Полная остановка происходящего
    //
    //         // Создадим данные формы и добавим в них данные файлов из files
    //
    //         var data = new FormData();
    //         $.each( files, function( key, value ){
    //             data.append( key, value );
    //
    //         });
    //    // alert(data[3]);
    //         // Отправляем запрос
    //
    //
    //
    //
    //
    //
    //
    //
    //         $.ajax({
    //             url: '/web/ajax.php?uploadfiles',
    //             type: 'POST',
    //             data: data,
    //             cache: false,
    //             dataType: 'json',
    //             processData: false, // Не обрабатываем файлы (Don't process the files)
    //             contentType: false, // Так jQuery скажет серверу что это строковой запрос
    //             success: function( respond, textStatus, jqXHR ){
    //
    //                 // Если все ОК
    //                //
    //                 if( typeof respond.error === 'undefined' ){
    //                     // Файлы успешно загружены, делаем что нибудь здесь
    //
    //                     // выведем пути к загруженным файлам в блок '.ajax-respond'
    //
    //                     var files_path = respond.files;
    //
    //                     var html = '';
    //                     $.each( files_path, function( key, val ){ html += val +'<br>'; } );
    //                     // $('.ajax-respond').html( html );
    //                 }
    //                 else{
    //                     console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
    //                 }
    //             },
    //             error: function( jqXHR, textStatus, errorThrown ){
    //                // alert(respond);
    //                 console.log('ОШИБКИ AJAX запроса: ' + textStatus );
    //             }
    //         });
    //         alert(data)
    //
    //     });
    //


    // document.getElementById('div').onclick = function(e){
    //     var e = e || event;
    //     if(e.target.attributes[1] == undefined){
    //         return;
    //     }
    //     catalog.linkId = e.target.attributes[1].value;
    //     alert(catalog.setInfoFromCatalogProduct());
    // }


    //$('#upload').on('click', function() {
    //     var file_data = $('#uploadbtn').prop('files')[0];
    //     var form_data = new FormData();
    //     form_data.append('file', file_data);
    //     alert(form_data);
    //     $.ajax({
    //         url: '/web/site/ajax-adv',
    //         dataType: 'text',
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         data: {data:form_data,_csrf:_csrf},
    //         type: 'post',
    //         success: function(php_script_response){
    //             alert(php_script_response);
    //         }
    //     });
    // });


    //});

    function save()
    {
        $.post('/web/site/ajax-adv', { save: 'save',_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }

    //alert($('#div'))
    $('#div').click(function () {
        // var attr = $('#div').attr('id');
        // var attr2 = $('#div').attr('data-id');
        $('#div').text('sele');
        // console.log(attr);
        // console.log(attr2);
    });


    // $.post('/web/site/ajax-adv', { field1: 1, field2 :1,field3: 0,_csrf:_csrf},
    //     function(returnedData){
    //         console.log(returnedData);
    //     }).fail(function(){
    //     console.log("error");
    // });

    function select2(i=1)
    {
        $.post('/web/site/ajax-adv', { field1: 1, field2 : 2,_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select3()
    {
        $.post('/web/site/ajax-adv', { field1: "1", field2 : "3",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select4()
    {
        $.post('/web/site/ajax-adv', { field1: "1", field2 : "4",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select5()
    {
        $.post('/web/site/ajax-adv', { field1: "1", field2 : "5",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select6()
    {
        $.post('/web/site/ajax-adv', { field1: "1", field2 : "6",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select7()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "1",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select8()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "2",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select9()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "3",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select10()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "4",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select11()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "5",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select12()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "6",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select13()
    {
        $.post('/web/site/ajax-adv', { field1: "2", field2 : "7",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select14()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "1",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select15()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "2",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select16()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "3",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select17()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "4",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select18()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "5",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select19()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "6",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select20()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "7",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select21()
    {
        $.post('/web/site/ajax-adv', { field1: "3", field2 : "8",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select22()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "1",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select23()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "2",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select24()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "3",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select25()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "4",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select26()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "5",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select27()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "6",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select28()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "7",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select29()
    {
        $.post('/web/site/ajax-adv', { field1: "4", field2 : "8",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select30()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "1",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select31()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "2",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select32()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "3",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select33()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "4",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select34()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "5",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select35()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "6",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select36()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "7",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select37()
    {
        $.post('/web/site/ajax-adv', { field1: "5", field2 : "8",_csrf:_csrf},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            alert('adasdasd');
        });
    }
    function select38()
    {
        $.post('/web/site/ajax-adv', { field1: "hello", field2 : "hello2"},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }
    function select39()
    {
        $.post('/web/site/ajax-adv', { field1: "hello", field2 : "hello2"},
            function(returnedData){
                console.log(returnedData);
            }).fail(function(){
            console.log("error");
        });
    }


    // Вешаем функцию ан событие click и отправляем AJAX запрос с данными файлов


</script>