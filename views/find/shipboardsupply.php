<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'Find a supplier';
?>

<body>
<script>

    $(function(){

        $('#search').change(function(){
            var search = $(this).val();
            $('#equipment').load('ajax-shipboarb', {search: search}, function(){
                $('.city-select').fadeIn('fast');
            });

        });

    });

    $(function(){

        $('#equipment').change(function(){
            var equipment = $(this).val();
            $('#maker').load('ajax-shipboarb', {equipment: equipment}, function(){
                $('.city-select2').fadeIn('fast');
            });

        });

    });
</script>
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
                        <?php $form = ActiveForm::begin(); ?>
                        <?php
//                        $items = [
//                            '0' => 'Активный',
//                            'MARINE PAINTS' => 'MARINE PAINTS',
//                            'spare parts and equipment'=>'spare parts and equipment'
//                        ];

                        $dataPost= [
                           '0' => '2ццц',
                        ];
                        ?>

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
                            <?php $contracts = \app\models\Contracts::find()->all(); ?>
                                <?= $form->field($model, 'search')->dropDownList(\yii\helpers\ArrayHelper::map($contracts,'search','search'),
                                    ['id'=>'search',
                                        'prompt'=>'Refine your search',
                                        'class'=>'select-style__select'
                                        ]); ?>

                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__item margin-bottom-light">
                            <div style="display: none" class="form-group city-select">
                                <h4 class="filter__title">
                                    Spare parts and equipment
                                </h4>
                                <div class="select-style">
                                    <?= $form
                                        ->field($model, 'equipment')
                                        ->dropDownList(
                                            $dataPost,
                                            ['id'=>'equipment',
                                                'class'=>'select-style__select',
                                  ]); ?>

                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item margin-bottom-medium">
                            <div style="display: none" class="form-group city-select2">
                                <h4 class="filter__title">
                                    maker
                                </h4>
                                <?php
                                $da =  [
                                    '0' => '2цssssцц',
                                ];
                                $maker = \app\models\Contracts::find()->select('maker')->distinct()->all();
                                ?>
                                <div class="select-style">
                                    <?= $form->field($model, 'maker')
                                        ->dropDownList(
                                            \yii\helpers\ArrayHelper::map($contracts,'maker','maker'),
                                            ['id'=>'maker',
                                                'class'=>'select-style__select'
                                            ]
                                        ); ?>

                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>

                            </div>
                        </div>
<!--                        <input type="hidden" name="_csrf" value="--><?//=Yii::$app->request->getCsrfToken()?><!--" />-->
                        <div class="filter__item">
                            <?= Html::submitButton('Sing in', ['class' => 'button button--show-results', 'name' => 'submit','value'=>'ok']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-4">
                    <div class="advertising-wrapper">
                        <a href='#' class="advertising">
                            <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[0]['img']?>" ></p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[1]['img']?>" ></p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[2]['img']?>" ></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[3]['img']?>" ></p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[4]['img']?>" ></p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content"><img width="395px" height="195px"  src="../../web/public/uploads/<?php echo $place[5]['img']?>" ></p>
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
                                <a href="/web/find/vessels-sale" class="footer-nav__link">
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

