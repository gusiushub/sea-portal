<?php

use yii\bootstrap\ActiveForm;

$this->title = 'About the company';
$user = $model->attributes;

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
                    <a href="/web/site/profile" class="settings__email settings__email--head">
                        <?php echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/site/profile' class="primary-menu__item primary-menu__item--active">
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
                    <a href='/web/site/cv' class="primary-menu__item">
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
                <div class="col-lg-3">
                    <div class="profile">
                        <?php if($upload->image): ?>
                            <img src="../../web/public/uploads/<?= $upload->image?>" alt="company-logo" class="profile__photo margin-bottom-light">
                        <?php endif; ?>
<!--                        <img src="../../web/public/img/company-logo-big.jpg" alt="company-logo" class="profile__photo margin-bottom-light">-->
                        <button class="profile__upload-photo margin-bottom-medium">
                            select file
                        </button>
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                        <?= $form->field($upload, 'image')->fileInput() ?>
                        <button>Загрузить</button>
                        <?php ActiveForm::end() ?>
<!--                        <input type="file" class="profile__upload-photo margin-bottom-medium" name="file" value="select file">-->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    first name:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="ANDERS" name="fname" value="<?php echo Yii::$app->user->identity->username ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    second name:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="POWERS" name="sname" value="<?php echo Yii::$app->user->identity->second_name ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    date of birth:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="17.02.1972" name="dbirth" value="<?php echo Yii::$app->user->identity->birthday ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    country:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="ESTONIA" name="country" value="<?php echo Yii::$app->user->identity->country ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    City:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="TALLINN" name="city" value="<?php echo Yii::$app->user->identity->city ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    experience:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="22 YEARS" name="experience" value="<?php echo Yii::$app->user->identity->experience ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-3 col-md-3 col-sm-3 col-3">
                            <button id="profile_personal1" class="button button--profile button--profile-change">
                                edit
                            </button>
                        </div>
                    </div>
                    <div class="row block-underline">
                        <div class="col-lg-6">
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    desired salary:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="100000" name="salary" value="<?php echo Yii::$app->user->identity->salary ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    currency:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input  type="text" class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="EUR" name="currency" value="<?php echo Yii::$app->user->identity->currency ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row block-underline">
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
                                            <input  type="text" class="textinput-container__input textinput-container__input--change-pass textinput-container__input--change-unactive" disabled="" value="7ngdc5cn" disabled="" placeholder="PASSWORD" name="password" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-3 col-md-3 col-sm-3 col-3">
                            <button id="profile_personal1_changebtn" class="button button--profile button--profile--change-pass">
                                change
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 vertical-center margin-bottom-light">
                            <div class="checkbox-style">
                                <input type="checkbox" id='accepting' class="checkbox-style__input checkbox-style__input--from-to">
                                <label for="accepting" class="checkbox-style__label vertical-center">
                                    <span class="checkbox-style__check checkbox-style__check--accepting"></span>
                                    <p class="checkbox-style__text checkbox-style__text--bold">Received a contract:</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-12 col-12 margin-bottom-light">
                            <div class="row no-gutters from-to">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-2 vertical-center">
                                    <p class="contract-text-time">From</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    <div class="textinput-container">
                                        <input  type="text" class="textinput-container__input textinput-container__input--mini-padding textinput-container__input--from-to textinput-container__input--change-unactive" value="26.10.2018" disabled="" placeholder="FROM" name="from">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-1 vertical-center horizontal-center">
                                    <p class="contract-text-time contract-text-time--to">to</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    <div class="textinput-container">
                                        <input  type="text" class="textinput-container__input textinput-container__input--mini-padding textinput-container__input--from-to textinput-container__input--change-unactive" value="26.10.2018" disabled="" placeholder="TO" name="to">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-5">
                            <button id="profile_personal1_selectbtn" class="button button--profile button--profile--from-to">
                                select
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
<script src="../../web/public/js/from-to.js"></script>
<script src="../../web/public/js/ajax-forms.js"></script>
<script>
    var input = document.querySelector("input[type='file']");
    input.onchange = function () {
        this.form.submit();
    }
</script>