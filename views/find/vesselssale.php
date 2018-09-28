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

                    use yii\bootstrap\ActiveForm;
                    use yii\bootstrap\Html;

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
                                <a href="/web/find/vessels-sale" class="secondary-navigation__link secondary-navigation__link--active">
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
                <div class="main-headline main-headline--no-underline">
                    <h1 class="main-headline__title">
                        vessels sell / chartering
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/find/vessels-sale' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            Vessels for sale
                        </h3>
                    </a>
                    <a href='/web/find/chartering' class="primary-menu__item">
                        <i class="icon-tranport primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            vessels for Chartering
                        </h3>
                    </a>
                    <a href='#' class="primary-menu__item">
                        <i class="icon-list4 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            offer a vessel for sell/chartering
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 vertical-bottom ">
                <a href='#' class="advertising advertising--oneitem">
                    <p class="advertising__content">advertising</p>
                </a>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="find-a-vessels">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="filter margin-bottom-light">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="secondary-headline margin-bottom-light">
                            <h2 class="secondary-headline__title">
                                Find a vessel
                            </h2>
                        </div>
                        <div class="filter__item filter__item--vicel margin-bottom-light">
                            <h4 class="filter__title">
                                vessel type
                            </h4>
                            <div class="select-style">
<!--                                <select name="vessel-type" id="" class="select-style__select">-->
<!--                                    <option class="select-style__placeholder">Dry-cargo ship</option>-->
<!--                                    <option value="">text</option>-->
<!--                                    <option value="">text</option>-->
<!--                                </select>-->
                                <?php
                                $offers = \app\models\Vessel::find()->all();
                                ?>
                                <?= $form->field($model, 'type')->dropDownList(array_diff(\yii\helpers\ArrayHelper::map($offers,'type','type'),array('')),[
                                    'prompt'=>'Level of English',
                                    'class'=>'select-style__select',
                                    //'placeholder'=>'COUNTRY',
                                    'id'=>'type'
                                ]) ?>

                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item filter__item--vicel margin-bottom-medium">
                            <h4 class="filter__title">
                                option for vessel type
                            </h4>
                            <div class="select-style">
<!--                                <select name="option" id="" class="select-style__select">-->
<!--                                    <option class="select-style__placeholder">bulk carriers</option>-->
<!--                                    <option value="">text</option>-->
<!--                                    <option value="">text</option>-->
<!--                                </select>-->

                                <?= $form->field($model, 'vesOption')->dropDownList(array_diff(\yii\helpers\ArrayHelper::map($offers,'vessel_option','vessel_option'),array('')),[
                                    'prompt'=>'bulk carriers',
                                    'class'=>'select-style__select',
                                    'placeholder'=>'bulk carriers',
                                    'id'=>'lvleng'
                                ]) ?>
                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item filter__item--vicel margin-bottom-light">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Length, м
                                    </h4>
                                    <div class="filter__input-double-wrapper">
<!--                                        --><?//= $form->field($model, 'leigthFrom')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'FROM',
//                                        ]) ?>
<!--                                        --><?//= $form->field($model, 'leigthTo')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'TO',
//                                        ]) ?>
                                        <input type="text" name="leigthFrom" placeholder="FROM" class="filter__input--double filter__input">
                                        <input type="text" name="leigthTo" placeholder="TO" class="filter__input--double filter__input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Draft, м
                                    </h4>
                                    <div class="filter__input-double-wrapper">
<!--                                        --><?//= $form->field($model, 'draftFrom')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'FROM',
//                                        ]) ?>
<!--                                        --><?//= $form->field($model, 'draftTo')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'TO',
//                                        ]) ?>
                                        <input type="text" name="draftFrom" placeholder="FROM" class="filter__input--double filter__input">
                                        <input type="text" name="draftTo" placeholder="TO" class="filter__input--double filter__input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Deadweight, т
                                    </h4>
                                    <div class="filter__input-double-wrapper">
<!--                                        --><?//= $form->field($model, 'deadweightFrom')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'FROM',
//                                        ]) ?>
<!--                                        --><?//= $form->field($model, 'deadweightTo')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'TO',
//                                        ]) ?>
                                        <input type="text" name="deadweightFrom" placeholder="FROM" class="filter__input--double filter__input">
                                        <input type="text" name="deadweightTo" placeholder="TO" class="filter__input--double filter__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item filter__item--vicel margin-bottom-light">
                            <div class="row horizontal-center">
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Flag
                                    </h4>
<!--                                    --><?//= $form->field($model, 'flag')->textInput([
//                                        'prompt'=>'??????',
//                                        'class' => 'filter__input filter__input--one',
//                                        'placeholder'=>'FROM',
//                                    ]) ?>
                                    <input type="text" name="flag" placeholder="??????" class="filter__input filter__input--one">
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Year
                                    </h4>
                                    <div class="filter__input-double-wrapper">
<!--                                        --><?//= $form->field($model, 'yearFrom')->textInput([
//                                            'prompt'=>'FROM',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'FROM',
//                                        ]) ?>
<!--                                        --><?//= $form->field($model, 'yearTo')->textInput([
//                                            'prompt'=>'TO',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'TO',
//                                        ]) ?>
                                        <input type="text" name="yearFrom" placeholder="FROM" class="filter__input--double filter__input">
                                        <input type="text" name="yearTo" placeholder="TO" class="filter__input--double filter__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item filter__item--vicel margin-bottom-medium">
                            <div class="row horizontal-center">
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Price
                                    </h4>
                                    <div class="filter__input-double-wrapper">
<!--                                        --><?//= $form->field($model, 'priceFrom')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'FROM',
//                                        ]) ?>
<!--                                        --><?//= $form->field($model, 'priceTo')->textInput([
//                                            //'prompt'=>'Salary',
//                                            'class' => 'filter__input--double filter__input',
//                                            'placeholder'=>'TO',
//                                        ]) ?>
                                        <input type="text" name="priceFrom" placeholder="FROM" class="filter__input--double filter__input">
                                        <input type="text" name="priceTo" placeholder="TO" class="filter__input--double filter__input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="filter__title">
                                        Currency
                                    </h4>
                                    <div class="select-style">
                                        <select name="option" id="" class="select-style__select">
                                            <option value="EUR" class="select-style__placeholder">EUR</option>
                                            <option value="EUR">EUR</option>
                                            <option value="USD">USD</option>
                                        </select>
                                        <div class="select-style__arrow">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item">
                            <?= Html::submitButton('Show results', ['class' => 'button button--show-results', 'name' => 'search']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-vessel">
                        <p class="advertising__content">advertising</p>
                    </a>
                    <a href='#' class="advertising advertising--find-vessel">
                        <p class="advertising__content">advertising</p>
                    </a>
                    <a href='#' class="advertising advertising--find-vessel">
                        <p class="advertising__content">advertising</p>
                    </a>
                    <a href='#' class="advertising advertising--find-vessel">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-vessel">
                        <p class="advertising__content">advertising</p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising advertising--find-vessel">
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

    $(function(){
        $('#type').change(function(){
            var position = $(this).val();
            $('#lvleng').load('ajax-crew', {position: position}, function(){
                $('.city-select').fadeIn('fast');
            });
        });
    });
</script>