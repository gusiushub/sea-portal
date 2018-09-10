<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

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
                        <a href="/web/site/signup" class="authorization__link">
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
    <div class="secondary-navbar margin-bottom-light">
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
                                <a href="/web/site/become-supplier" class="secondary-navigation__link secondary-navigation__link--active">
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
                <div class="main-headline text-center margin-bottom-light">
                    <h1 class="main-headline__title">
                        For supplier
                    </h1>
                </div>
                <div class="supplier-description">
                    <p class="supplier-description__paragraph">
                        Marine Notes  is a search and interactions solution, between the Suppliers and Buyers on the marine industry.
                    </p>
                    <p class="supplier-description__paragraph">
                        Free and quick search engine for the all marine industry Buyers.
                    </p>
                    <p class="supplier-description__paragraph">
                        Add your company to Marine Notes search and interactions platform and get
                    </p>
                    <p class="supplier-description__paragraph">
                        the opportunity to introduce your quotations to a large number of customers.
                    </p>
                    <p class="supplier-description__paragraph">
                        Free, Business and Business+ registrations.
                    </p>
                    <p class="supplier-description__paragraph">
                        Place your banner on our page and be always in sight .
                    </p>
                    <p class="supplier-description__paragraph supplier-description__paragraph--bold">
                        Now is your time, for new opportunities!
                    </p>
                    <p class="supplier-description__paragraph supplier-description__paragraph--bold">
                        Act while others planning!
                    </p>
                    <p class="supplier-description__paragraph supplier-description__paragraph--uppercase">
                        Join now!
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="sign-up vertical-center">
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
                                            Company
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'username')->textInput([
                                                'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-3',
                                                'placeholder' => 'COMPANY NAME',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-3" placeholder="COMPANY NAME" name="company-name">-->
                                        </div>
                                    </div>
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
                                                'placeholder'=>'city',
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
                                            website
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'website')->textInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-4',
                                                'placeholder'=>'WEBSITE ADRESS',
                                            ]) ?>
<!--                                            <input type="text" class="textinput-container__input textinput-container__input--sing textinput-container__input--sing-4" placeholder="WEBSITE ADRESS" name="website">-->
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
                                <div class="row">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Option
                                        </h4>
                                        <div class="select-style select-style--sing">
                                            <select name="become-supplier" id="" class="select-style__select select-style__select--sing select-style__select--sing-2">
                                                <option class="select-style__placeholder">Become a supplier</option>
                                                <option value="">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Password
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'password')->passwordInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2 textinput-container__input--pass',
                                                'placeholder'=>'PASSWORD'
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
                                <?= Html::submitButton('Signup', ['class' => 'button margin-bottom-medium', 'name' => 'signup-button']) ?>
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