<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Sign in';
$this->params['breadcrumbs'][] = $this->title;
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
                        <a href="/web/site/login" class="authorization__link authorization__link--active">
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
                                    <a href="/web/site/login" class="adaptive-menu__link adaptive-menu__link--active">
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
                                <a href="#" class="secondary-navigation__link">
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
</header>
<main>
<section class="sign-in vertical-center">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="login-to">
    <?php $form = ActiveForm::begin([
        'class' => 'login-to',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "<h4 class=\"filter__title\">{label}</h4><div class=\"textinput-container\">{input}</div>{error}",
]
    ]); ?>


                    <div class="secondary-headline margin-bottom-light">
                        <h2 class="secondary-headline__title secondary-headline__title--sign">
                            Login to account
                        </h2>
                    </div>
        <?= $form->field($model, 'username')->textInput([
            'class' => 'textinput-container__input textinput-container__input--sing textinput-container__input--sing-1',
            'placeholder'=>'YOUR E-MAIL',
        ]) ?>

        <?= $form->field($model, 'password')->passwordInput([
                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2',
            'placeholder'=>'PASSWORD',
        ]) ?>

<!--        --><?//= $form->field($model, 'rememberMe')->checkbox([
//            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//        ]) ?>


                <?= Html::submitButton('Sing in', ['class' => 'button button--sign margin-bottom-medium', 'name' => 'login-button']) ?>

    <?php ActiveForm::end(); ?>
<!--                    <p class="login-to__operations">Forgot password? <a href="#" class="login-to__link">Reset it</a></p>-->
<!--                    <p class="login-to__operations">Don't have an account yet? <a href="#" class="login-to__link">Sign up</a></p>-->
                </div>
            </div>
        </div>
    </div>
</section>
</main>
</body>