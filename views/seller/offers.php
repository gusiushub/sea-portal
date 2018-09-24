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
                        <?php echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/seller/profile' class="primary-menu__item">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            seller information
                        </h3>
                    </a>
                    <a href='/web/seller/pricing' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='/web/seller/request' class="primary-menu__item">
                        <i class="icon-message primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            incoming requests
                        </h3>
                    </a>
                    <a href='/web/seller/offers' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='/web/seller/offers' class="primary-menu__item  primary-menu__item--active">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            my offers
                        </h3>
                    </a>
                    <a href='/web/seller/offers' class="primary-menu__item">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            place an adverticement
                        </h3>
                    </a>
                    <a href='/web/seller/term' class="primary-menu__item">
                        <i class="icon-list5 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            term and conditions
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="profile-personal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-headline text-left margin-bottom-light">
                        <h2 class="secondary-headline__title">
                            Your offer:
                        </h2>
                    </div>
                </div>
            </div>
            <?php $count = 1; ?>

            <?php foreach ($userOffers as $userOffer){ ?>
            <div class="contract-line">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    offer
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <a href="#" class="contract-line__info contract-line__info--link contract-line__info--uppercase">
                                    offer1
                                </a>
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
                                           <?php echo $userOffer['date'] ?>
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
                                            <?php echo $userOffer['date_expire'] ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    category
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                           <?php echo $userOffer['type'] ?>
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
                                            <?php echo $userOffer['plan'] ?>
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
                                            <?php echo $userOffer['status'] ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="contract-description block-underline block-underline-top">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            category
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="select-style">
                                            <select name="category" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                                <option class="select-style__placeholder">find a practice</option>
                                                <option value="dd">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Vessel type
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="select-style">
                                            <select name="vtype" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                                <option class="select-style__placeholder">find a practice</option>
                                                <option value="dd">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Option for vessel type
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="select-style">
                                            <select name="option" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                                <option class="select-style__placeholder">find a practice</option>
                                                <option value="dd">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Length, м
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="length">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Draft, м
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="draft">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Deadweight, т
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="dweight">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            year
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            flag
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="flag">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Country
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="select-style">
                                            <select name="country" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                                <option class="select-style__placeholder">????????????</option>
                                                <option value="dd">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Port
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="select-style">
                                            <select name="port" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                                <option class="select-style__placeholder">?????????????</option>
                                                <option value="dd">text</option>
                                                <option value="dd">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            Price
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h4 class="contract-description__headline lower-font">
                                            currency
                                        </h4>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-light">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change field-to-change field-to-change--unactive" disabled="" placeholder="???" name="corrency">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-medium">
                    <div class="col-lg-12 horizontal-between flex-wrap">
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="" class="change-image__image">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                        <div class="change-image">
                            <img src="img/заглушка.png" alt="">
                            <h2 class="change-image__appeared-text">Change picture</h2>
                        </div>
                    </div>
                </div>
                <div class="row horizontal-between">
                    <div class="col-lg-2">
                        <button class="button button--appeared">delete</button>
                    </div>
                    <div class="col-lg-2">
                        <button class="button button--appeared">deactivate</button>
                    </div>
                    <div class="col-lg-2">
                        <button id="profile-seller7-change" class="button button--fields-change">Edit</button>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-headline text-left margin-bottom-light">
                        <h2 class="secondary-headline__title">
                            Can not find your vessel type? let us know:
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