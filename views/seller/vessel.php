<?php
//var_dump($vessel['draft']);
?>
<body>
<header class="header">
    <div class="container">
        <div class="top-navbar top-navbar--no-buttons">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="/web/site"><img src="../../web/public/img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <div class="settings">
                        <div class="settings__item">
                            <a href="/web/seller/profile" class="settings__email">
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
                                        Find a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
                                        Become a supplier
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/find/crew" class="adaptive-menu__link">
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
                <div class="main-headline main-headline--profile">
                    <h1 class="main-headline__title">
                        Profile
                    </h1>
                    <a href="#" class="settings__email settings__email--head">
                        wilkinson@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            seller information
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-message primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            incoming requests
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            my offers
                        </h3>
                    </a>
                    <a href='/web/seller/advertisement' class="primary-menu__item">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            place an adverticement
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list5 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            term and conditions
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headline">
                    <h1 class="main-headline__title">
                        information about vessel
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="info-about-ship">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="../../web/public/img/1233.jpg" alt="ship-photo" class="ship-photo">
                </div>
                <div class="col-lg-8">
                    <div class="row margin-bottom-light">
                        <div class="col-lg-12">
                            <h4 class="filter__title">
                                select the option
                            </h4>
                            <div class="select-style">
                                <select name="option" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['vessel_option']; ?></option>
                                    <option value="">text</option>
                                    <option value="">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-light">
                        <div class="col-lg-12">
                            <h4 class="filter__title">
                                vessel type
                            </h4>
                            <div class="select-style">
                                <select name="vessel-type" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['type']; ?></option>
                                    <option value="">text</option>
                                    <option value="">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-medium">
                        <div class="col-lg-12">
                            <h4 class="filter__title">
                                option for vessel type
                            </h4>
                            <div class="select-style">
                                <select name="option-vessel-type" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['option_type']; ?></option>
                                    <option value="ssss">text</option>
                                    <option value="">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-light">
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Length, м
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['length']; ?>" placeholder="<?php echo $vessel['length']; ?>" name="length">
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Draft, м
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['draft']; ?>" placeholder="<?php echo $vessel['draft']; ?>" name="draft">
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Deadweight, т
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['deadweight']; ?>" placeholder="<?php echo $vessel['deadweight']; ?>" name="deadweight">
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-light">
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Year
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['year']; ?>" placeholder="<?php echo $vessel['year']; ?>" name="year">
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Flag
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['draft']; ?>" placeholder="<?php echo $vessel['draft']; ?>" name="flag">
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Country
                            </h4>
                            <div class="select-style">
                                <select name="country" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['country']; ?></option>
                                    <option value="Country">Country</option>
                                    <option value="text">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-light">
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Port
                            </h4>
                            <div class="select-style">
                                <select name="port" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['port']; ?></option>
                                    <option value="Port">Port</option>
                                    <option value="text">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Price
                            </h4>
                            <div class="textinput-container">
                                <input type="text"  class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" value="<?php echo $vessel['price']; ?>" placeholder="<?php echo $vessel['price']; ?>" name="price">
                            </div>
                        </div>
                        <div class="col-lg-4 margin-bottom-light">
                            <h4 class="filter__title">
                                Currency
                            </h4>
                            <div class="select-style">
                                <select name="currency" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                    <option class="select-style__placeholder"><?php echo $vessel['currency']; ?></option>
                                    <option value="EUR">EUR</option>
                                    <option value="йййй">text</option>
                                </select>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-medium">
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                        <div class="col-lg-12">
                            <h4 class="filter__title">
                                Other information
                            </h4>
                            <div class="textinput-container">
                                <textarea name="message" class="textinput-container__textarea field-to-change field-to-change--unactive" disabled="" placeholder="<?php echo $vessel['information']; ?>"><?php echo $vessel['information']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 offset-lg-9 col-md-3 col-sm-4 col-4">
                            <button id="profile-seller1-2-change" class="button button--fields-change">Edit</button>
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
<script src="../../web/public/js/info-change.js"></script>
<script src="../../web/public/js/ajax-forms.js"></script>