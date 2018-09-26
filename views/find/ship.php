<?php

use app\models\User;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;


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
                                <?php echo $user['email'] ?>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headline main-headline--profile">
                    <h1 class="main-headline__title">
                        information about vessel
                    </h1>
                    <a href="#" class="settings__email settings__email--head">
                        <?php echo $user['email'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</header>
<main>
    <section class="info-about-ship">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <?php if (!empty($user['img'])){?>
                        <img src="../../web/public/uploads/<?php echo $user['img'] ?>" alt="ship-photo" class="ship-photo">
                    <?php }else{ ?>
                    <img src="../../web/public/img/1233.jpg" alt="ship-photo" class="ship-photo">
                    <?php } ?>
                </div>
                <div class="col-lg-5">
                    <div class="ship-info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Vessel type:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['type'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Option for vessel type:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['option_type'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Length, м:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['option_type'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Draft, м:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['draft'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Deadweight, т:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['deadweight'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Year:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['year'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Flag</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['flag'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Country:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['country'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Port:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['port'] ?></p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                        <p class="ship-info__line ship-info__line--bold">Price:</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                        <p class="ship-info__line"><?php echo $ship[0]['price'] ?> EUR</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <p class="ship-info__line ship-info__line--bold">Other information:</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="ship-info__line ship-info__line--light"><?php echo $ship[0]['information'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
<!--                    <form method="#" class="right-send">-->
                    <?php $form = ActiveForm::begin(['method'=>'GET']); ?>
                        <h3 class="right-send__title">
                            send a message
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
                            <input type="text" class="textinput-container__input" placeholder="ATTACH FILE" name="attach file">
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
                                <input name="agree" type="checkbox" id='accepting' class="checkbox-style__input" value="yes">
                                <label for="accepting" class="checkbox-style__label">
                                    <span class="checkbox-style__check checkbox-style__check--accepting"></span>
                                    <p class="checkbox-style__text">I have read and agree to the <a href="#" class="checkbox-style__link">Terms and Conditions</a></p>
                                </label>
                            </div>
                        </div>
                    <?= Html::submitButton('send', ['class' => 'button', 'name' => 'mail']) ?>
<!--                        <button class="button">-->
<!--                            send-->
<!--                        </button>-->
<!--                    </form>-->
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
<script src="../../web/public/js/common.js"></script>

