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
                            <a href="/web/company/profile" class="settings__email">
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
                            <a href="/web/company/profile" class="settings__email settings__email--head">
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
                            <a href='/web/company/pricing' class="primary-menu__item  primary-menu__item--active">
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
                            <a href='/web/company/advertisement' class="primary-menu__item">
                                <i class="icon-window primary-menu__icon"></i>
                                <h3 class="primary-menu__title">
                                    Place an adverticement
                                </h3>
                            </a>
                            <a href='/web/company/request' class="primary-menu__item">
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
            <section class="profile2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cards-wrapper horizontal-between">
                                <div class="sell-card">
                                    <div class="sell-card__cost">
                                        <img src="../../web/public/img/sell1.png" alt="cost" class="sell-card__image">
                                    </div>
                                    <div class="sell-card__information">
                                        <p class="sell-card__paragraph">
                                            Customer support 24/7.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Personal office - selected categories,
                                            free add-on in selected categories.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Unlimited number of brands and categories.
                                        </p>
                                        <p class="sell-card__paragraph">
                                           Information about supplier - company name and webpage.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Listing in "General" for buyer.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            To send a request the buyer should go to your webpage
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Place your advertsing on our web site (special rates applied)
                                        </p>
                                    </div>
                                    <div class="sell-card__button">
                                        <button class="button button--transparent">
                                            your business plan
                                        </button>
                                    </div>
                                </div>
                                <div class="sell-card">
                                    <div class="sell-card__cost">
                                        <img src="../../web/public/img/sell2.png" alt="cost" class="sell-card__image">
                                    </div>
                                    <div class="sell-card__information">
                                        <p class="sell-card__paragraph">
                                            Customer support 24/7.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Personal office - selected categories, <span class="sell-card__paragraph--bold">information
                                            about expiration date</span>, free add-on for selected
                                            categories, <span class="sell-card__paragraph--bold">statistics on received requests.</span>
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Unlimited number of brands and categories.
                                        </p>
                                        <p class="sell-card__paragraph">
                                           Unlimited number of ports in one country. 
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Place your advertsing on our web site (special rates applied)
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Information about supplier - company name, phone and webpage.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Receive requests to your email and to the personal office.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Listng in "Recommended" for buyer.
                                        </p>
                                        <p class="sell-card__paragraph">
                                           To send a request the buyer should <span class="sell-card__paragraph--bold">only add your company</span> to the mailing list. 
                                        </p>
                                    </div>
                                    <div class="sell-card__button">
                                        <button class="button">
                                            select business plan
                                        </button>
                                    </div>
                                </div>
                                <div class="sell-card">
                                    <div class="sell-card__cost">
                                        <img src="../../web/public/img/sell3.png" alt="cost" class="sell-card__image">
                                    </div>
                                    <div class="sell-card__information">
                                        <p class="sell-card__paragraph">
                                            Customer support 24/7.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Personal office - selected categories, <span class="sell-card__paragraph--bold">information
                                            about expiration date</span>, free add-on for selected
                                            categories, <span class="sell-card__paragraph--bold">statistics on received requests.</span>
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Unlimited number of brands and categories.
                                        </p>
                                        <p class="sell-card__paragraph">
                                           Unlimited number of ports in one country. 
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Place your advertsing on our web site (special rates applied)
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Information about supplier - company name, phone and webpage.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            Receive requests to your email and to the personal office.
                                        </p>
                                        <p class="sell-card__paragraph">
                                            <span class="sell-card__paragraph--bold">Listing in “Primeg for buyer“</span>
                                        </p>
                                        <p class="sell-card__paragraph">
                                           To send a request the buyer should <span class="sell-card__paragraph--bold">only add your company</span> to the mailing list. 
                                        </p>
                                    </div>
                                    <div class="sell-card__button">
                                        <button class="button">
                                            select business plan
                                        </button>
                                    </div>
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