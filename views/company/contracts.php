<?php use yii\bootstrap\Html; ?>
<body>
<header class="header">

    <!--  1 МЕНЮ  -->

    <div class="container">
        <div class="top-navbar top-navbar--no-buttons">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="/web/site"><img src="../../web/public/img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <div class="settings">
                        <div class="settings__item">
                            <a href="#" class="settings__email">
                                <?php echo Yii::$app->user->identity->email ; ?>
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
                                        <a href="/web/company/profile" class="settings__link">
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
                                    <a href="/web/site/contacts" class="adaptive-menu__link">
                                        Contacts
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/site/faq" class="adaptive-menu__link">
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

    <!--  1 МЕНЮ  -->

    <!--  2 МЕНЮ  -->

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
                                <a href="/web/site/chartering-market" class="secondary-navigation__link">
                                    Chartering market
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="/web/site/contacts" class="secondary-navigation__link">
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

    <!--  2 МЕНЮ  -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headline main-headline--profile">
                    <h1 class="main-headline__title">
                        Profile
                    </h1>
                    <a href="#" class="settings__email settings__email--head">
                        <?php echo Yii::$app->user->identity->email ; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/company/profile' class="primary-menu__item">
                        <i class="icon-town primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            about the company
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            contracts
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Place an adverticement
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
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

    <section class="profile4">

        <div class="container">
            <div class="row">
                <div class="col-lg-2 offset-lg-10">
                    <a style="text-decoration: none;" href="/web/company/add-contracts">
                        <button class="button">
                            add
                        </button>
                    </a>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="secondary-headline text-left margin-bottom-light">-->
<!--                        <h2 class="secondary-headline__title">-->
<!--                            contract 1:-->
<!--                        </h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <?php
            if($model){
                foreach ($model as $m){
            ?>
            <div class="contract-line">

                <div class="row">
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    Contract
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                            <?php echo $m->name ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    Date
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info">
                                            <?php echo $m->date ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    Date of expiry
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info">
                                            <?php echo $m->date_of_expiry ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    <?php echo $m->category  ?>
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                            courses/AIR TICKETS for crew
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    Plan
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                            business
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    Status
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                            paid
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php
                }
            }
            ?>
            <div class="contract-information block-underline-top block-underline margin-bottom-light">
                <div class="row contract-information__desktop">
                    <div class="col-lg-12 horizontal-between">
                        <div class="contract-information__column">

                        </div>
                        <!--info column-->
                        <div class="contract-information__column">

                        </div>
                        <!--info column-->
                        <div class="contract-information__column">

                        </div>
                        <!--info column-->

                        <!--info column-->
                    </div>
                </div>
                <div class="row contract-information__mobile">
                    <div class="col-lg-12">

                        <!--list-end-->
                    </div>
                </div>
                <!--mobile-version-->

                <div class="row horizontal-center">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                        <a href="/web/company/choose-plan">
                            <button class="button margin-bottom-light">
                                choose your plan
                            </button>
                        </a>
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
                                <a href="#" class="footer-nav__link">
                                    Become a supplier
                                </a>
                            </li>
                            <li class="footer-nav__item">
                                <a href="/web/find/crew" class="footer-nav__link">
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
                                <a href="/web/company/terms-conditions" class="footer-nav__link">
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
<script>
    var editBtn = document.querySelector('.button--edit');
    editBtn.onclick = function() {
        var inputs = document.querySelectorAll('.checkbox-style__input');
        var inputsContainer = document.querySelectorAll('.checkbox-style');
        if (inputsContainer[0].classList.contains('checkbox-style--unactive')) {
            editBtn.textContent = 'save';
        } else {
            editBtn.textContent = 'edit';
        }
        for (var i = 0; i < inputsContainer.length; i++) {
            inputsContainer[i].classList.toggle('checkbox-style--unactive');
        }
        for (var i = 0; i < inputsContainer.length; i++) {
            if(inputs[i].hasAttribute('disabled')) {
                inputs[i].removeAttribute('disabled');
            } else {
                inputs[i].setAttribute('disabled', 'disabled');
            }
        }
    }

    var radios = document.querySelectorAll('input[name="category"]');
    for (var i = 0; i < radios.length; i++) {
        var contentInfo = document.querySelectorAll('.contract-information__tab-wrapper');
        contentInfo[0].classList.add('contract-information__tab-wrapper--active');
        radios[i].dataset.number = i;
        radios[i].addEventListener('change', function() {
            for(var i = 0; i < contentInfo.length; i++) {
                if(contentInfo[i].classList.contains('contract-information__tab-wrapper--active')) {
                    contentInfo[i].classList.remove('contract-information__tab-wrapper--active');
                }
            }
            for(var i = 0; i < radios.length; i++) {
                if(radios[i].checked) {
                    var indexContent = radios[i].dataset.number;
                    contentInfo[indexContent].classList.add('contract-information__tab-wrapper--active');
                }
            }

        })
    }

</script>