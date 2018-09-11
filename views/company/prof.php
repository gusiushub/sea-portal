<body>

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
                    <div class="adaptive-menu">
                        <div class="adaptive-menu__button">
                            <img src="../../web/public/img/icons/burger.png" alt="burger">
                        </div>
                        <nav class="adaptive-menu__navigation">
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
                                    <a href="/web/site/find-supplier" class="adaptive-menu__link">
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/site/become-supplier" class="adaptive-menu__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
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
                                <a href="/web/site/find-supplier" class="secondary-navigation__link">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/web/site/become-supplier" class="secondary-navigation__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
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
                                <a href="/web/site/faq" class="secondary-navigation__link">
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
                    <a href="/web/company/profile" class="settings__email settings__email--head">
                        <?php echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/company/profile' class="primary-menu__item primary-menu__item--active">
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
                    <a href='/web/company/pricing' class="primary-menu__item">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Place an adverticement
                        </h3>
                    </a>
                    <a href='/web/company/incoming-requests' class="primary-menu__item">
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
    <section class="profile1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profile">
                        <img src="../../web/public/img/company-logo-big.jpg" alt="company-logo" class="profile__photo margin-bottom-light">
                        <button class="profile__upload-photo margin-bottom-medium">
                            select file
                        </button>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row block-underline">
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                        <div class="col-lg-6">
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    Company:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="COMPANY" name="company" value="<?php echo Yii::$app->user->identity->username ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    Phone:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="PHONE" name="phone" value="<?php echo Yii::$app->user->identity->phone ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    Country:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="COUNTRY" name="country" value="<?php echo Yii::$app->user->identity->country ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    City:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="CITY" name="city" value="<?php echo Yii::$app->user->identity->city ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    Website:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="WEBSITE" name="website" value="<?php echo Yii::$app->user->identity->website ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    E-mail:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="E-MAIL" name="email" value="<?php echo Yii::$app->user->identity->email ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 vertical-center">
                                                <span class="profile__details">
                                                    Contacts:
                                                </span>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="CONTACTS" name="contacts" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5 offset-lg-6">
                                    <button id="profile-change" class="button button--profile button--fields-change">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                            <div class="profile__setting profile__setting--no-margin">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Password:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input  type="text" class="textinput-container__input textinput-container__input--change-pass  textinput-container__input--change-unactive" disabled="" value="7ngdc5cn" disabled="" placeholder="PASSWORD" name="currency">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-3 col-md-3 col-sm-3 col-3">
                            <button class="button button--profile button--profile--change-pass">
                                change
                            </button>
                        </div>
                    </div>
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
</body>
<script src="../../web/public/js/common.js"></script>
<script src="../../web/public/js/info-change.js"></script>