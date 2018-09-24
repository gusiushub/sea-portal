<?php
use app\models\Crew;
use app\models\Location;
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
                            <a href="#" class="settings__email">
                                <?php use app\models\Cv;
                                use app\models\User;
                                use yii\bootstrap\ActiveForm;
                                use yii\bootstrap\Html;
                                use yii\helpers\ArrayHelper;
                                use yii\widgets\DetailView;
                                use yii\widgets\ListView;
                                use yii\widgets\Pjax;

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
                                        <a href="/web/site/profile" class="settings__link">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="settings__list-item">
                                        <a href="/web/user/logout" class="settings__link">
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
                    <a href="/web/site/profile" class="settings__email settings__email--head">
                        <?php echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/site/profile' class="primary-menu__item">
                        <i class="icon-town primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            personal information
                        </h3>
                    </a>
                    <a href='/web/site/pricing' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='/web/site/statistics' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='/web/site/cv' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            cv
                        </h3>
                    </a>
                    <a href='/web/site/terms' class="primary-menu__item">
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
    <section class="profile-personal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-headline text-left margin-bottom-light">
                        <h2 class="secondary-headline__title">
                            your cv:
                        </h2>
                    </div>
                </div>
            </div>
            <?php $count = 1; ?>

            <?php foreach ($userCv as $cv){ ?>
            <div class="contract-line">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-line__headline">
                                    CV
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <a href="#" class="contract-line__info contract-line__info--link contract-line__info--uppercase">
                                    CV<?php echo $count; $count++;?>
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
                                            <?php echo $cv['date'] ?>
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
                                            <?php echo $cv['date_expiry'] ?>
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
                            <div id="" class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <span class="contract-line__info contract-line__info--uppercase">
                                            <?php echo $cv['category'] ?>
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
                                            <?php echo $cv['plan'] ?>
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
                                            <?php echo $cv['status'] ?>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>



            <?php
            $items = [
                '0' => 'Активный',
                'practice' => 'find a practice',
                'job'=>'find a job'
            ];

            $dataPost= [
//                            '0' => '2ццц',
//                            '1' => 'ыыыы',
//                            '2'=>'пппп'
            ];
            ?>

            <div class="contract-description block-underline block-underline-top">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                <h4 class="contract-description__headline">
                                    category
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">
                                <div class="select-style">



                                    <select name="category" id="category" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                        <option  class="select-style__placeholder">find a practice</option>
                                        <option value="find a practice">find a practice</option>
                                        <option value="find a job">find a job</option>
                                    </select>
                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div style="display: none" class="city-select">-->
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h4 class="contract-description__headline">
                                        faculty
                                    </h4>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">
                                    <div class="select-style">
                                        <select name="faculty" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                            <option value="Navigation" class="select-style__placeholder">Navigation</option>
                                            <option value="Navigation">Navigation</option>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h4 class="contract-description__headline">
                                        level of english
                                    </h4>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">
                                    <div class="select-style">
                                        <?php
                                        $lvleng = Crew::find()->select('lvleng')->all();
                                        ?>
                                        <select name="levelofeng" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                            <option value="" class="select-style__placeholder">excellent</option>
                                            <?php foreach ($lvleng as $lvl){ ?>
                                            <option value="<?php echo $lvl['lvleng'] ?>"><?php echo $lvl['lvleng'] ?></option>
                                            <?php  } ?>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h4 class="contract-description__headline">
                                        Country
                                    </h4>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">
                                    <div class="select-style">
                                        <?php
                                        $location = Location::find()->select('name')->where(['location_type'=>0])->all();
                                        ?>
                                        <select name="country" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                            <option value="" class="select-style__placeholder">Estonia</option>
                                            <?php foreach ($location as $loc){ ?>
                                            <option value="<?php echo $loc['name'] ?>"><?php echo $loc['name'] ?></option>
                                            <?php  } ?>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h4 class="contract-description__headline">
                                        Port
                                    </h4>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">
                                    <div class="select-style">
                                        <?php
                                        $location = Location::find()->select('name')->where(['location_type'=>2])->all();
                                        ?>
                                        <select name="port" id="" class="select-style__select field-to-change field-to-change--unactive" disabled="">
                                            <option value="" class="select-style__placeholder">Tallinn</option>
                                            <?php foreach ($location as $loc){ ?>
                                            <option value="<?php echo $loc['name'] ?>"><?php echo $loc['name'] ?></option>
                                            <?php  } ?>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                    <h4 class="contract-description__headline">
                                        CV
                                    </h4>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-6 margin-bottom-medium">

                                    <div class="contract-description__cv-block">
                                        <a href="#" class="contract-description__cv-link">
                                            view
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                    <div class="col-lg-2 offset-lg-10">
                        <button id="personal4_1" class="button button--fields-change">Edit</button>
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
<script src="../../web/public/js/ajax-forms.js"></script>
<script src="../../web/public/js/info-change.js"></script>
<script>
   $( "#category" ).change(function() {
       var category = $("#category option:selected").text();
       if (category=='find a job'){
           var url = "http://parsavito.xyz/web/site/cv-job";
           $(location).attr('href',url);
       }
   });


</script>