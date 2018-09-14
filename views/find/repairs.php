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
                                    <a href="/web/find/shipboard-supply" class="adaptive-menu__link adaptive-menu__link--active">
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
                                <a href="/web/find/shipboard-supply" class="secondary-navigation__link secondary-navigation__link--active">
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
                        Find a supplier
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/find/shipboard-supply' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Shipboard supply
                        </h3>
                    </a>
                    <a href='/web/find/port-services' class="primary-menu__item">
                        <i class="icon-tap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Port services
                        </h3>
                    </a>
                    <a href='/web/find/inspection-equipment' class="primary-menu__item">
                        <i class="icon-list2 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Inspection of equipment
                        </h3>
                    </a>
                    <a href='/web/find/repairs' class="primary-menu__item">
                        <i class="icon-tools primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Repairs
                        </h3>
                    </a>
                    <a href='/web/find/courses' class="primary-menu__item">
                        <i class="icon-users primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Courses/air tickets for crew
                        </h3>
                    </a>
                    <a href='/web/find/legal-services' class="primary-menu__item">
                        <i class="icon-list3 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Legal services
                        </h3>
                    </a>
                    <a href='/web/find/fishery-sector' class="primary-menu__item">
                        <i class="icon-fish primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Fishery sector
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-headline margin-bottom-light">
                        <h2 class="secondary-headline__title">
                            Find necessary goods, spare parts, equipment and organise delivery on board
                        </h2>
                    </div>
                    <div class="sub-title margin-bottom-medium">
                        <p class="sub-title__paragraph">Spare parts and equipment, Transport and Logistics, Provision & Bonded Store, General Ship</p>
                        <p class="sub-title__paragraph">Supply, Marine chemicals, Marine paint, Nautical charts, Ship ropes, chains and etc.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form id="myform" method="POST" action="/web/find/shipboard-result">
                        <div class="filter">
                            <div class="secondary-headline margin-bottom-light">
                                <h2 class="secondary-headline__title">
                                    shipboard supply, transport and logistics
                                </h2>
                            </div>
                            <div class="filter__item margin-bottom-light">
                                <h4 class="filter__title">
                                    Refine your search
                                </h4>
                                <div class="select-style">

                                    <select  name="search" id="" class="select-style__select">
                                        <option value="spare parts and equipment" class="select-style__placeholder">spare parts and equipment</option>
                                        <option value="spare parts and equipment">spare parts and equipment</option>
                                        <option value="MARINE PAINTS">MARINE PAINTS</option>
                                        <option value="MARINE PAINTS">MARINE PAINTS</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                            </div>
                            <div class="filter__item margin-bottom-light">
                                <h4 class="filter__title">
                                    Spare parts and equipment
                                </h4>
                                <div class="select-style">
                                    <select name="equipment" id="" class="select-style__select">
                                        <option value="pumps" class="select-style__placeholder">pumps</option>
                                        <option value="COMPRESSORS">COMPRESSORS</option>
                                        <option value="SEPARATORS">SEPARATORS</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                            </div>
                            <div class="filter__item margin-bottom-medium">
                                <h4 class="filter__title">
                                    maker
                                </h4>
                                <div class="select-style">
                                    <select name="maker" id="" class="select-style__select">
                                        <option value="adasdasdasd" class="select-style__placeholder">Shipping and Logistics</option>
                                        <option value="MAK">MAK</option>
                                        <option value="MTU">MTU</option>
                                        <option value="cummins">cummins</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            </div>
                            <div class="filter__item">
                                <input type="submit"  id="request" class="button button--show-results">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-4">
                    <div class="advertising-wrapper">
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">advertising</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">advertising</p>
                    </a>
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
<script>
    var Btn = document.querySelector('#request');
    Btn.onclick = function(){

        var search = $('select[name="search"]').val(),
            equipment = $('select[name="equipment"]').val(),
            maker = $('select[name="maker"]').val(),
            _csrf = $('input[name="_csrf"]').val(),
            profile1 = {
                search,
                equipment,
                maker,
                _csrf
            };
        var jsdata = JSON.stringify(profile1);
        $.ajax({
            type: "POST",
            url: "/web/find/shipboard-result",
            data: {
                profile1: jsdata,
                _csrf: _csrf
            },
            success: window.location.replace("/web/find/shipboard-result")

        });

    };



    // $("#myform").submit( function(e){
    //     var form = $(this);
    //     $.ajax({
    //         url    : '/web/find/shipboard-result',
    //         type   : 'POST',
    //         async: true,
    //         cache: false,
    //         data   : form.serialize(),
    //         success: function (response)
    //         {
    //             window.location.replace("/web/find/shipboard-result");
    //         },
    //         error  : function (e)
    //         {
    //             console.log(e);
    //         }
    //     });
    //     return false;
    // })
</script>

