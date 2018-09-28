<?php

use app\models\User;
$this->title = 'Shipboard supply';

?>

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
                                <a href="/web/user/profile" class="settings__email">
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
                                            <a href="/web/user/profile" class="settings__link">
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
                                    <a href="/web/find/crew" class="adaptive-menu__link adaptive-menu__link--active">
                                        Crew
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/find/chartering" class="adaptive-menu__link">
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
                                <a href="#" class="secondary-navigation__link secondary-navigation__link--active">
                                    Find a supplier
                                </a>
                            </li>
                            <li class="secondary-navigation__item">
                                <a href="#" class="secondary-navigation__link">
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
                    <a href='#' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Shipboard supply
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-tap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Port services
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list2 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Inspection of equipment
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-tools primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Repairs
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-users primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Courses/air tickets for crew
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list3 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Legal services
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
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
    <section class="results-for-shipboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="secondary-headline margin-bottom-light text-left">
                        <h2 class="secondary-headline__title">
                            search results for shipboard supply & transportation
                        </h2>
                    </div>
                    <?php if(!empty($businessAdvanced)){ ?>
                    <div class="companies-wrapper margin-bottom-medium">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="companies-headline">
                                    <p class="companies-headline__prime">
                                        prime
                                    </p>
                                    <p class="companies-headline__found">
                                        Found: <span class="companies-headline__found-num"><?php echo count($businessAdvanced)?></span> companies
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <?php
                            foreach($businessAdvanced as $user){  //var_dump($e['user_id']);
                            $prof = User::findOne($user['user_id']);
                            ?>
                            <div class="col-lg-4">
                                <div class="company-box">
                                    <div class="company-box__logo">
                                        <?php if (!empty($prof['img'])){ ?>
                                        <img src="../../web/public/uploads/<?php echo $prof['img'] ?>" alt="company logo" class="company-box__image">
                                        <?php }else{?>
                                            <img src="../../web/public/img/company-logo.png" alt="company logo" class="company-box__image">
                                        <?php } ?>
                                    </div>
                                    <div class="company-box__description">
                                        <h5 class="company-box__company-name">
                                            <?php echo $prof['username']?>
                                        </h5>
                                        <a href="#" class="company-box__site-link">
                                            <?php echo $prof['website']?>
                                        </a>
                                    </div>
                                    <div class="add-plus add-plus--company-box">
                                        <p class="add-plus__symbol">
                                            +
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="#" class="show-all">Show all</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    if (!empty($business)){
                    ?>
                    <!--Block wrapper-->
                    <div class="companies-wrapper margin-bottom-medium">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="companies-headline">
                                    <p class="companies-headline__prime">
                                        recommend
                                    </p>
                                    <p class="companies-headline__found">
                                        Found: <span class="companies-headline__found-num"><?php echo count($business)?></span> companies
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            foreach($business as $user){  //var_dump($e['user_id']);
                            $prof = User::findOne($user['user_id']);
                            ?>
                            <div class="col-lg-4">
                                <div class="company-box">
                                    <div class="company-box__logo">
                                        <img src="../../web/public/img/company-logo.png" alt="company logo" class="company-box__image">
                                    </div>
                                    <div class="company-box__description">
                                        <h5  class="company-box__company-name">
                                            <?php echo $prof['username']?>
                                        </h5>
                                        <a  href="#" class="company-box__site-link">
                                            <?php echo $prof['website']?>
                                        </a>
                                        <input id="<?php echo $prof['id'] ?>" name="username" class="inputid"  type="hidden" value="<?php echo $prof['id'] ?>">
                                    </div>
                                    <div class="add-plus add-plus--company-box recommend">
                                        <p class="add-plus__symbol">
                                            +
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="#" class="show-all">Show all</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if(!empty($free)){ ?>
                    <!--Block wrapper-->
                    <div class="companies-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="companies-headline">
                                    <p class="companies-headline__prime">
                                        general
                                    </p>
                                    <p class="companies-headline__found">
                                        Found: <span class="companies-headline__found-num"><?php echo count($free) ?></span> companies
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            foreach($free as $user){  //var_dump($e['user_id']);
                            $prof = User::findOne($user['user_id']);
                            ?>
                            <div class="col-lg-4">
                                <div class="company-box company-box--empty">
                                    <div class="company-box__description">
                                        <h5 id="free-username" class="company-box__company-name">
                                            <?php echo $prof['username']?>
                                        </h5>
                                        <a href="#" class="company-box__site-link">
                                            <?php echo $prof['website']?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="#" class="show-all">Show all</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!--Block wrapper-->
                <div class="col-lg-3">
                    <aside class="right-send">
                        <h3 class="right-send__title">
                            Chosen company
                        </h3>
                        <div class="criteria">
                            <p class="criteria__text">Prime <span class="criteria__company-num">(<?php echo count($businessAdvanced) ?> companies)</span></p>
                            <div class="checkbox-style">
                                <input type="checkbox" id='prime' class="checkbox-style__input">
                                <label for="prime" class="checkbox-style__label">
                                    <span class="checkbox-style__check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="criteria">
                            <p class="criteria__text">Recommend <span class="criteria__company-num">(<?php echo count($business) ?> companies)</span></p>
                            <div class="checkbox-style">
                                <input type="checkbox" id='recommend' class="checkbox-style__input">
                                <label for="recommend" class="checkbox-style__label">
                                    <span class="checkbox-style__check"></span>
                                </label>
                            </div>
                        </div>
                    </aside>
                    <form class="right-send">
                        <h3 class="right-send__title">
                            Send an application
                        </h3>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="NAME" name="name">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="E-MAIL" name="email">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="PHONE" name="phone">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input" placeholder="COMPANY" name="company">
                        </div>
                        <div class="textinput-container">
                            <input type="text" class="textinput-container__input textinput-container__input--plus" placeholder="ATTACH FILE" name="attach file">
                            <div class="add-plus add-plus--attach-file">
                                <p class="add-plus__symbol">
                                    +
                                </p>
                            </div>
                        </div>
                        <div class="textinput-container margin-bottom-medium">
                            <textarea name="message" class="textinput-container__textarea" placeholder="COMMENTS"></textarea>
                        </div>
                        <div class="accepting">
                            <div class="checkbox-style">
                                <input type="checkbox" id='accepting' class="checkbox-style__input">
                                <label for="accepting" class="checkbox-style__label">
                                    <span class="checkbox-style__check checkbox-style__check--accepting"></span>
                                    <p class="checkbox-style__text">I have read and agree to the <a href="#" class="checkbox-style__link">Terms and Conditions</a></p>
                                </label>
                            </div>
                        </div>
                        <button class="button">
                            send
                        </button>
                    </form>
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
    $('.recommend').click(function () {
        function makeCounter() {
            var currentCount = 1;
            return function() {
                return currentCount++;
            };
        }
        var counter = makeCounter();

       var id = $('#id').val();
       console.log(id);
    });
</script>