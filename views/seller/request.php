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
                                <?php use app\models\User;

                                echo Yii::$app->user->identity->email ?>
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
                    <a href='/web/seller/request' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-message primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            incoming requests
                        </h3>
                    </a>
                    <a href='/web/seller/statistics' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='/web/seller/offers' class="primary-menu__item">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            my offers
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
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
    <section class="profile6">
        <div class="container">
            <div class="row margin-bottom-medium">
                <div class="col-lg-4 vertical-center">
                    <div class="sub-title">
                        <h3 class="sub-title__title">
                            view request by:
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-6 vertical-center">
                    <div class="select-style">
                        <select name="date" id="date" class="select-style__select">
                            <option class="select-style__placeholder">date</option>
                            <option value="www">text</option>
                            <option value="ssss">text</option>
                        </select>
                        <div class="select-style__arrow">&nbsp;</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 col-6 vertical-center">
                    <div class="select-style">
                        <select name="category" id="category" class="select-style__select">
                            <option class="select-style__placeholder">category</option>
                            <option value="www">text</option>
                            <option value="">text</option>
                        </select>
                        <div class="select-style__arrow">&nbsp;</div>
                    </div>
                </div>
                <input id="token" type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            </div>
            <?php
            foreach ($requests as $request){

            $user = User::findOne($request['user_from']);
            //var_dump($user['username'] );
            ?>

            <div class="request">
                <form action="" method="post">
                    <input name="id" type="text" style="display: none" value="<?php echo $user['id'] ?>">
                    <input name="username" type="text" style="display: none" value="<?php echo $user['username'] ?>">
                    <input name="company" type="text" style="display: none" value="<?php echo $request['company'] ?>">
                    <input name="category" type="text" style="display: none" value="<?php echo $request['category'] ?>">
                    <input name="email" type="text" style="display: none" value="<?php echo $user['email'] ?>">
                    <input name="phone" type="text" style="display: none" value="<?php echo $user['phone'] ?>">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="request__headline">
                            23/05/2018
                        </h4>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <h4 class="request__position">
                                    Name
                                </h4>
                            </div>
                            <input name="user_id" type="text" style="display: none" value="<?php echo $request['user_id'] ?>">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="request__detail">
                                    <?php echo $request['name'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <h4 class="request__position">
                                    E-mail
                                </h4>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="request__detail">
                                    <?php echo $request['email'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <h4 class="request__position">
                                    Phone
                                </h4>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="request__detail">
                                    <?php echo $request['phone'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <h4 class="request__position">
                                    Company
                                </h4>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="request__detail">
                                    <?php echo $request['company'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <h4 class="request__position">
                                    category
                                </h4>
                            </div>
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                <div class="request__detail request__detail--last">
                                    <?php echo $request['category'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="request__headline">
                            Incoming message
                        </h4>
                        <div class="textinput-container margin-bottom-light">
                            <textarea name="message" class="textinput-container__textarea"><?php echo $request['message'] ?></textarea>
                        </div>
                        <div class="row horizontal-between">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <button class="button button--profile">
                                    attached files
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <input type="submit" name="ans" class="button button--profile" value="answer"class="button button--profile">
<!--                                <button class="button button--profile">-->
<!--                                    class="button button--profile"-->
<!--                                </button>-->
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <?php } ?>
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

<script>
    $( "#category" ).change(function() {
        //var category = $("#category option:selected").text();
        $.post("request", {    // Указываем php файл
            category: $('#category').val(),        // Передаем идентивикатор элемента
            _csrf: $('#token').val()
        }, function (category) {
            alert($('#category').html(category))   // Получаем данные после обработки
        });
    });
    $( "#date" ).change(function() {
        $.post("request", {    // Указываем php файл
            date: $('#date').val(),         // Передаем идентивикатор элемента
            _csrf: $('#token').val()
        }, function (date) {
            $(this).html(date)   // Получаем данные после обработки
        });
    });

</script>