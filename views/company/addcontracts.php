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
                                    <a href="/web/site/crew" class="adaptive-menu__link">
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
                                <a href="/web/site/crew" class="secondary-navigation__link">
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
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="secondary-headline text-left margin-bottom-light">-->
<!--                        <h2 class="secondary-headline__title">-->
<!--                            contract 1:-->
<!--                        </h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="contract-line">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-2">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    Contract-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info contract-line__info--uppercase">-->
<!--                                            Contract 1-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-2">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    Date-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info">-->
<!--                                            31/02/2018-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-2">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    Date of expiry-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info">-->
<!--                                            31/02/2019-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    category-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info contract-line__info--uppercase">-->
<!--                                            courses/AIR TICKETS for crew-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-2">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    Plan-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info contract-line__info--uppercase">-->
<!--                                            business-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-1">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                <h4 class="contract-line__headline">-->
<!--                                    Status-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">-->
<!--                                        <span class="contract-line__info contract-line__info--uppercase">-->
<!--                                            paid-->
<!--                                        </span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="contract-information block-underline-top block-underline margin-bottom-light">
                <div class="row contract-information__desktop">
                    <div class="col-lg-12 horizontal-between">
                        <div class="contract-information__column">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='shipboard' class="checkbox-style__input" disabled>
                                    <label for="shipboard" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Shipboard supply, transport and logistics</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='port-service' class="checkbox-style__input" disabled>
                                    <label for="port-service" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">PORT SERVICE</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='inspection' class="checkbox-style__input" disabled>
                                    <label for="inspection" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">INSPECTION OF EQUIPMEN</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='repairs' class="checkbox-style__input" disabled>
                                    <label for="repairs" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">REPAIRS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='crew' class="checkbox-style__input" disabled>
                                    <label for="crew" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">CREW</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='legal' class="checkbox-style__input" disabled>
                                    <label for="legal" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">LEGAL AND OTHER SERVICES</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='fishery' class="checkbox-style__input" disabled>
                                    <label for="fishery" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">FISHERY SECTOR</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--info column-->
                        <div class="contract-information__column">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='spare' class="checkbox-style__input" disabled>
                                    <label for="spare" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Spare parts and equipment</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='transport' class="checkbox-style__input" disabled>
                                    <label for="transport" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Transport and Logistics</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='provision' class="checkbox-style__input" disabled>
                                    <label for="provision" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Provision & Bonded Store</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='general' class="checkbox-style__input" disabled>
                                    <label for="general" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">General Ship Supply</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='chemicals' class="checkbox-style__input" disabled>
                                    <label for="chemicals" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine chemicals</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='paints' class="checkbox-style__input" disabled>
                                    <label for="paints" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine paints</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='charts' class="checkbox-style__input" disabled>
                                    <label for="charts" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Nautical charts</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='anchors' class="checkbox-style__input" disabled>
                                    <label for="anchors" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Ship ropes, chains, anchors</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='safety' class="checkbox-style__input" disabled>
                                    <label for="safety" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine Safety Equipment</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--info column-->
                        <div class="contract-information__column">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='engines' class="checkbox-style__input" disabled>
                                    <label for="engines" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">MAIN AND AUXILIARY ENGINES</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='turbocharger' class="checkbox-style__input" disabled>
                                    <label for="turbocharger" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">TURBOCHARGER</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='governors' class="checkbox-style__input" disabled>
                                    <label for="governors" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">GOVERNORS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pumps' class="checkbox-style__input" disabled>
                                    <label for="pumps" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pumps</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='compressors' class="checkbox-style__input" disabled>
                                    <label for="compressors" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">compressors</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='separators' class="checkbox-style__input" disabled>
                                    <label for="separators" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">separators</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='burners' class="checkbox-style__input" disabled>
                                    <label for="burners" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">boilers and burners</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='exchangers' class="checkbox-style__input" disabled>
                                    <label for="exchangers" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">heat exchangers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='components' class="checkbox-style__input" disabled>
                                    <label for="components" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">hydraulic and pneumatic components</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='generator' class="checkbox-style__input" disabled>
                                    <label for="generator" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">fresh water generator</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='winch' class="checkbox-style__input" disabled>
                                    <label for="winch" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">winch</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='steering' class="checkbox-style__input" disabled>
                                    <label for="steering" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">steering engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bearings' class="checkbox-style__input" disabled>
                                    <label for="bearings" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">roller and ball bearings</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='filters' class="checkbox-style__input" disabled>
                                    <label for="filters" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">filters</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='separator' class="checkbox-style__input" disabled>
                                    <label for="separator" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">oily water separator</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sewage' class="checkbox-style__input" disabled>
                                    <label for="sewage" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sewage treatment plants</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='seals' class="checkbox-style__input" disabled>
                                    <label for="seals" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">stern tube seals</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='cranes' class="checkbox-style__input" disabled>
                                    <label for="cranes" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">cranes</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='propellers' class="checkbox-style__input" disabled>
                                    <label for="propellers" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">propellers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='thermometers' class="checkbox-style__input" disabled>
                                    <label for="thermometers" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">shipboard manometers and thermometers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='fittings' class="checkbox-style__input" disabled>
                                    <label for="fittings" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">shipboard pipes, valves, fittings</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='equipment' class="checkbox-style__input" disabled>
                                    <label for="equipment" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">navigation and communications equipment</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='componends' class="checkbox-style__input" disabled>
                                    <label for="componends" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">electronic componends</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--info column-->
                        <div class="contract-information__column">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='alpha' class="checkbox-style__input" disabled>
                                    <label for="alpha" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">alpha diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='anqing' class="checkbox-style__input" disabled>
                                    <label for="anqing" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">anqing diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bergen' class="checkbox-style__input" disabled>
                                    <label for="bergen" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">bergen diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bmz' class="checkbox-style__input" disabled>
                                    <label for="bmz" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">bmz russia diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='caterpillar' class="checkbox-style__input" disabled>
                                    <label for="caterpillar" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">caterpillar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='cummins' class="checkbox-style__input" disabled>
                                    <label for="cummins" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">cummins</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='daihatsu' class="checkbox-style__input" disabled>
                                    <label for="daihatsu" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">daihatsu</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='detroit' class="checkbox-style__input" disabled>
                                    <label for="detroit" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">detroit diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='deutz' class="checkbox-style__input" disabled>
                                    <label for="deutz" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">deutz</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='guaskor' class="checkbox-style__input" disabled>
                                    <label for="guaskor" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">guaskor diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='nmw' class="checkbox-style__input" disabled>
                                    <label for="nmw" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">nmw deutz</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='hitachi' class="checkbox-style__input" disabled>
                                    <label for="hitachi" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">hitachi diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='holeby' class="checkbox-style__input" disabled>
                                    <label for="holeby" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">holeby diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mak' class="checkbox-style__input" disabled>
                                    <label for="mak" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mak</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='man' class="checkbox-style__input" disabled>
                                    <label for="man" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">man b&w</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mitsubishi' class="checkbox-style__input" disabled>
                                    <label for="mitsubishi" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mitsubishi</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mitsui' class="checkbox-style__input" disabled>
                                    <label for="mitsui" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mitsui diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mirrless' class="checkbox-style__input" disabled>
                                    <label for="mirrless" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mirrless blackstone</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mtu' class="checkbox-style__input" disabled>
                                    <label for="mtu" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mtu</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mwm' class="checkbox-style__input" disabled>
                                    <label for="mwm" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mwm engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='nohab' class="checkbox-style__input" disabled>
                                    <label for="nohab" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">nohab polar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='paxman' class="checkbox-style__input" disabled>
                                    <label for="paxman" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">paxman diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='perkins' class="checkbox-style__input" disabled>
                                    <label for="perkins" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">perkins</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pielstick' class="checkbox-style__input" disabled>
                                    <label for="pielstick" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pielstick</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='ruston' class="checkbox-style__input" disabled>
                                    <label for="ruston" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">ruston</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='saab' class="checkbox-style__input" disabled>
                                    <label for="saab" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">saab</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sisu' class="checkbox-style__input" disabled>
                                    <label for="sisu" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sisu engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='scania' class="checkbox-style__input" disabled>
                                    <label for="scania" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">scania</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='scoda' class="checkbox-style__input" disabled>
                                    <label for="scoda" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">scoda</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='skl' class="checkbox-style__input" disabled>
                                    <label for="skl" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">skl</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='stx' class="checkbox-style__input" disabled>
                                    <label for="stx" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">stx engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='stork' class="checkbox-style__input" disabled>
                                    <label for="stork" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">swd stork werkspoor</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sulzer' class="checkbox-style__input" disabled>
                                    <label for="sulzer" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sulzer</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='valmet' class="checkbox-style__input" disabled>
                                    <label for="valmet" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">valmet</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='penta' class="checkbox-style__input" disabled>
                                    <label for="penta" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">volvo penta</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='wartsila' class="checkbox-style__input" disabled>
                                    <label for="wartsila" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">wartsila</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='yanmar' class="checkbox-style__input" disabled>
                                    <label for="yanmar" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">yanmar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='yichang' class="checkbox-style__input" disabled>
                                    <label for="yichang" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">yichang diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='zibo' class="checkbox-style__input" disabled>
                                    <label for="zibo" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">zibo diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pervomaisk' class="checkbox-style__input" disabled>
                                    <label for="pervomaisk" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pervomaisk dieselmash</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='rumo' class="checkbox-style__input" disabled>
                                    <label for="rumo" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">rumo diesel</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--info column-->
                    </div>
                </div>
                <div class="row contract-information__mobile">
                    <div class="col-lg-12">
                        <div class="contract-information__list contract-information__list--level-1">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='shipboard2' class="checkbox-style__input" disabled>
                                    <label for="shipboard2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Shipboard supply, transport and logistics</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='port-service2' class="checkbox-style__input" disabled>
                                    <label for="port-service2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">PORT SERVICE</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='inspection2' class="checkbox-style__input" disabled>
                                    <label for="inspection2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">INSPECTION OF EQUIPMEN</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='repairs2' class="checkbox-style__input" disabled>
                                    <label for="repairs2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">REPAIRS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='crew2' class="checkbox-style__input" disabled>
                                    <label for="crew2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">CREW</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='legal2' class="checkbox-style__input" disabled>
                                    <label for="legal2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">LEGAL AND OTHER SERVICES</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='fishery2' class="checkbox-style__input" disabled>
                                    <label for="fishery2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">FISHERY SECTOR</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--list-end-->
                        <div class="contract-information__list contract-information__list--level-2">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='spare2' class="checkbox-style__input" disabled>
                                    <label for="spare2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Spare parts and equipment</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='transport2' class="checkbox-style__input" disabled>
                                    <label for="transport2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Transport and Logistics</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='provision2' class="checkbox-style__input" disabled>
                                    <label for="provision2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Provision & Bonded Store</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='general2' class="checkbox-style__input" disabled>
                                    <label for="general2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">General Ship Supply</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='chemicals2' class="checkbox-style__input" disabled>
                                    <label for="chemicals2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine chemicals</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='paints2' class="checkbox-style__input" disabled>
                                    <label for="paints2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine paints</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='charts2' class="checkbox-style__input" disabled>
                                    <label for="charts2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Nautical charts</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='anchors2' class="checkbox-style__input" disabled>
                                    <label for="anchors2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Ship ropes, chains, anchors</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='safety2' class="checkbox-style__input" disabled>
                                    <label for="safety2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">Marine Safety Equipment</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--list-end-->
                        <div class="contract-information__list contract-information__list--level-3">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='engines2' class="checkbox-style__input" disabled>
                                    <label for="engines2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">MAIN AND AUXILIARY ENGINES</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='turbocharger2' class="checkbox-style__input" disabled>
                                    <label for="turbocharger2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">TURBOCHARGER</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='governors2' class="checkbox-style__input" disabled>
                                    <label for="governors2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">GOVERNORS</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pumps2' class="checkbox-style__input" disabled>
                                    <label for="pumps2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pumps</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='compressors2' class="checkbox-style__input" disabled>
                                    <label for="compressors2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">compressors</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='separators2' class="checkbox-style__input" disabled>
                                    <label for="separators2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">separators</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='burners2' class="checkbox-style__input" disabled>
                                    <label for="burners2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">boilers and burners</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='exchangers2' class="checkbox-style__input" disabled>
                                    <label for="exchangers2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">heat exchangers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='components2' class="checkbox-style__input" disabled>
                                    <label for="components2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">hydraulic and pneumatic components</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='generator2' class="checkbox-style__input" disabled>
                                    <label for="generator2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">fresh water generator</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='winch2' class="checkbox-style__input" disabled>
                                    <label for="winch2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">winch</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='steering2' class="checkbox-style__input" disabled>
                                    <label for="steering2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">steering engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bearings2' class="checkbox-style__input" disabled>
                                    <label for="bearings2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">roller and ball bearings</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='filters2' class="checkbox-style__input" disabled>
                                    <label for="filters2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">filters</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='separator2' class="checkbox-style__input" disabled>
                                    <label for="separator2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">oily water separator</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sewage2' class="checkbox-style__input" disabled>
                                    <label for="sewage2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sewage treatment plants</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='seals2' class="checkbox-style__input" disabled>
                                    <label for="seals2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">stern tube seals</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='cranes2' class="checkbox-style__input" disabled>
                                    <label for="cranes2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">cranes</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='propellers2' class="checkbox-style__input" disabled>
                                    <label for="propellers2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">propellers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='thermometers2' class="checkbox-style__input" disabled>
                                    <label for="thermometers2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">shipboard manometers and thermometers</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='fittings2' class="checkbox-style__input" disabled>
                                    <label for="fittings2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">shipboard pipes, valves, fittings</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='equipment2' class="checkbox-style__input" disabled>
                                    <label for="equipment2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">navigation and communications equipment</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='componends2' class="checkbox-style__input" disabled>
                                    <label for="componends2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">electronic componends</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--list-end-->
                        <div class="contract-information__list contract-information__list--level-4">
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='alpha2' class="checkbox-style__input" disabled>
                                    <label for="alpha2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">alpha diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='anqing2' class="checkbox-style__input" disabled>
                                    <label for="anqing2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">anqing diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bergen2' class="checkbox-style__input" disabled>
                                    <label for="bergen2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">bergen diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='bmz2' class="checkbox-style__input" disabled>
                                    <label for="bmz2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">bmz russia diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='caterpillar2' class="checkbox-style__input" disabled>
                                    <label for="caterpillar2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">caterpillar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='cummins2' class="checkbox-style__input" disabled>
                                    <label for="cummins2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">cummins</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='daihatsu2' class="checkbox-style__input" disabled>
                                    <label for="daihatsu2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">daihatsu</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='detroit2' class="checkbox-style__input" disabled>
                                    <label for="detroit2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">detroit diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='deutz2' class="checkbox-style__input" disabled>
                                    <label for="deutz2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">deutz</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='guaskor2' class="checkbox-style__input" disabled>
                                    <label for="guaskor2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">guaskor diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='nmw2' class="checkbox-style__input" disabled>
                                    <label for="nmw2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">nmw deutz</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='hitachi2' class="checkbox-style__input" disabled>
                                    <label for="hitachi2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">hitachi diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='holeby2' class="checkbox-style__input" disabled>
                                    <label for="holeby2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">holeby diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mak2' class="checkbox-style__input" disabled>
                                    <label for="mak2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mak</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='man2' class="checkbox-style__input" disabled>
                                    <label for="man2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">man b&w</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mitsubishi2' class="checkbox-style__input" disabled>
                                    <label for="mitsubishi2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mitsubishi</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mitsui2' class="checkbox-style__input" disabled>
                                    <label for="mitsui2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mitsui diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mirrless2' class="checkbox-style__input" disabled>
                                    <label for="mirrless2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mirrless blackstone</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mtu2' class="checkbox-style__input" disabled>
                                    <label for="mtu2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mtu</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='mwm2' class="checkbox-style__input" disabled>
                                    <label for="mwm2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">mwm engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='nohab2' class="checkbox-style__input" disabled>
                                    <label for="nohab2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">nohab polar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='paxman2' class="checkbox-style__input" disabled>
                                    <label for="paxman2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">paxman diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='perkins2' class="checkbox-style__input" disabled>
                                    <label for="perkins2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">perkins</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pielstick2' class="checkbox-style__input" disabled>
                                    <label for="pielstick2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pielstick</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='ruston2' class="checkbox-style__input" disabled>
                                    <label for="ruston2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">ruston</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='saab2' class="checkbox-style__input" disabled>
                                    <label for="saab2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">saab</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sisu2' class="checkbox-style__input" disabled>
                                    <label for="sisu2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sisu engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='scania2' class="checkbox-style__input" disabled>
                                    <label for="scania2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">scania</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='scoda2' class="checkbox-style__input" disabled>
                                    <label for="scoda2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">scoda</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='skl2' class="checkbox-style__input" disabled>
                                    <label for="skl2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">skl</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='stx2' class="checkbox-style__input" disabled>
                                    <label for="stx2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">stx engine</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='stork2' class="checkbox-style__input" disabled>
                                    <label for="stork2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">swd stork werkspoor</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='sulzer2' class="checkbox-style__input" disabled>
                                    <label for="sulzer2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">sulzer</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='valmet2' class="checkbox-style__input" disabled>
                                    <label for="valmet2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">valmet</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='penta2' class="checkbox-style__input" disabled>
                                    <label for="penta2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">volvo penta</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='wartsila2' class="checkbox-style__input" disabled>
                                    <label for="wartsila2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">wartsila</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='yanmar2' class="checkbox-style__input" disabled>
                                    <label for="yanmar2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">yanmar</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='yichang2' class="checkbox-style__input" disabled>
                                    <label for="yichang2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">yichang diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='zibo2' class="checkbox-style__input" disabled>
                                    <label for="zibo2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">zibo diesel</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='pervomaisk2' class="checkbox-style__input" disabled>
                                    <label for="pervomaisk2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">pervomaisk dieselmash</p>
                                    </label>
                                </div>
                            </div>
                            <div class="contract-information__line">
                                <div class="checkbox-style checkbox-style--unactive">
                                    <input type="checkbox" id='rumo2' class="checkbox-style__input" disabled>
                                    <label for="rumo2" class="checkbox-style__label checkbox-style__label--profile">
                                        <span class="checkbox-style__check checkbox-style__check--profile"></span>
                                        <p class="checkbox-style__text checkbox-style__text--profile">rumo diesel</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--list-end-->
                    </div>
                </div>
                <!--mobile-version-->

                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

                <div class="row">
                    <div class="col-lg-2 offset-lg-10 col-md-3 offset-md-9 col-sm-3 offset-sm-9 col-4 offset-8">
                        <button id="contentButton" class="button button--edit margin-bottom-light horizontal-center">
                            edit
                        </button>
                    </div>
                </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-headline text-left margin-bottom-light">
                        <h2 class="secondary-headline__title">
                            Can not find your category? Let us know and get a discount:
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textinput-container margin-bottom-light">
                        <textarea name="message" class="textinput-container__textarea textinput-container__textarea--profile" placeholder="WRITE YOUR PROPOSAL AND SEND US AN E-MAIL"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 offset-lg-10">
                    <button class="button">
                        send
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
</body>
<script src="../../web/public/js/common.js"></script>
<script>
    var editBtn = document.querySelector('.button--edit');
    editBtn.onclick = function() {
        var inputs = document.querySelectorAll('.checkbox-style__input');
        var inputsContainer = document.querySelectorAll('.checkbox-style');
        if (inputsContainer[0].classList.contains('checkbox-style--unactive')) {
            editBtn.textContent = 'save';
            $('.contract-information__column').first().find('.checkbox-style').removeClass('checkbox-style--unactive');
            $('.contract-information__column').first().find('.checkbox-style__input').attr('disabled', false);
        } else {
            editBtn.textContent = 'edit';
            $('.checkbox-style').addClass('checkbox-style--unactive');
            $('.checkbox-style__input').attr('disabled', true);
        }


        // for (var i = 0; i < inputsContainer.length; i++) {
        //     // inputsContainer[i].classList.toggle('checkbox-style--unactive');

        // }
        // for (var i = 0; i < inputsContainer.length; i++) {
        //     if(inputs[i].hasAttribute('disabled')) {
        //         inputs[i].removeAttribute('disabled');
        //     } else {
        //         inputs[i].setAttribute('disabled', 'disabled');
        //     }
        // }
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

<script>
    $('.checkbox-style__input').change(function(){
        var that = $(this).closest('.contract-information__column'),
            next = that.next().find('.checkbox-style');
        if(that.find('input:checked')) {
            next.removeClass('checkbox-style--unactive');
            next.find('.checkbox-style__input').attr('disabled', false);
        }
        if (!that.find('input:checked').length){
            next.addClass('checkbox-style--unactive').next().addClass('checkbox-style--unactive').next().addClass('checkbox-style--unactive');
            next.find('.checkbox-style__input').attr('disabled', true).next().find('.checkbox-style__input').attr('disabled', true).next().find('.checkbox-style__input').attr('disabled', true);
            next.find('.checkbox-style__input').prop('checked', false).next().find('.checkbox-style__input').prop('checked', false).next().find('.checkbox-style__input').prop('checked', false);
        }

    });
</script>
