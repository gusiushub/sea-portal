<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign up';
//$this->params['breadcrumbs'][] = $this->title;
?>
<body>
<header class="header">
    <div class="container">
        <div class="top-navbar">
            <div class="row">
                <div class="col-lg-12 vertical-center horizontal-between">
                    <div class="logotype-box">
                        <a href="find-a-supplier-1.html"><img src="../../web/public/img/logotype.png" alt="logotype" class="logotype-box__logo"></a>
                    </div>
                    <div class="authorization">
                        <a href="/web/site/login" class="authorization__link">
                            Sign In
                        </a>
                        <a href="/web/site/signup" class="authorization__link authorization__link--active">
                            Sign Up
                        </a>
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
                                    <a href="/web/site/signup" class="adaptive-menu__link adaptive-menu__link--active">
                                        Sign Up
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="/web/site/find-supplier" class="adaptive-menu__link">
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
    <div class="secondary-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="secondary-navigation">
                        <ul class="secondary-navigation__list">
                            <li class="secondary-navigation__item">
                                <a href="/web/site/find-supplier" class="secondary-navigation__link">
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
</header>
<main>
    <section class="sign-up-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="login-up">
                        <div class="secondary-headline margin-bottom-light">
                            <h2 class="secondary-headline__title secondary-headline__title--sign">
                                Create an account
                            </h2>
                        </div>
                        <div class="row margin-bottom-medium">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            First name
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'username')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-6',
                                                'placeholder'=>'FIRST NAME',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-6" placeholder="FIRST NAME" name="first-name">-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Second name
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'second_name')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-6',
                                                'placeholder'=>'SECOND NAME',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-6" placeholder="SECOND NAME" name="second-name">-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Country
                                        </h4>
                                        <div class="select-style select-style--sing">
                                            <?= $form->field($model, 'country')->textInput([
                                                'class'=>'select-style__select select-style__select--sing select-style__select--sing-1',
                                                'placeholder'=>'COUNTRY',
                                            ]) ?>
<!--                                            <select name="country" id="" class="select-style__select select-style__select--sing select-style__select--sing-1">-->
<!--                                                <option class="select-style__placeholder">Albania</option>-->
<!--                                                <option value="">text</option>-->
<!--                                                <option value="">text</option>-->
<!--                                            </select>-->
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            City
                                        </h4>
                                        <div class="select-style select-style--sing">
                                            <?= $form->field($model, 'city')->textInput([
                                                'class'=>'select-style__select select-style__select--sing select-style__select--sing-3',
                                                'placeholder'=>'CITY',
                                            ]) ?>
<!--                                            <select name="city" id="" class="select-style__select select-style__select--sing select-style__select--sing-3">-->
<!--                                                <option class="select-style__placeholder">Vlore</option>-->
<!--                                                <option value="">text</option>-->
<!--                                                <option value="">text</option>-->
<!--                                            </select>-->
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Phone
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'phone')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-5',
                                                'placeholder'=>'PHONE NUMBER',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-5" placeholder="PHONE NUMBER" name="phone">-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Email
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'email')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1',
                                                'placeholder'=>'EMAIL',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-1" placeholder="EMAIL" name="email">-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row horizontal-center">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Password
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'password')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2 textinput-container__input--pass',
                                                'placeholder'=>'PASSWORD',
                                            ]) ?>
<!--                                            <input type="password" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-2 textinput-container__input--pass" placeholder="PASSWORD" name="password">-->
                                            <button class="password-eye">
                                                &nbsp;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-center">
                            <div class="col-lg-6">
                                <?= Html::submitButton('Sign up', ['class' => 'button margin-bottom-medium', 'name' => 'signup-button']) ?>
<!--                                <button class="button margin-bottom-medium">-->
<!--                                    Sign up-->
<!--                                </button>-->
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
<script src="../../web/public/js/common.js"></script>
<!--<div class="site-signup">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!--    <p>Please fill out the following fields to signup:</p>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!---->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'form-signup']); ?>
<!--            --><?//= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!--            --><?//= $form->field($model, 'email') ?>
<!--            --><?//= $form->field($model, 'password')->passwordInput() ?>
<!--            <div class="form-group">-->
<!--                --><?//= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
<!--            </div>-->
<!--            --><?php //ActiveForm::end(); ?>
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->