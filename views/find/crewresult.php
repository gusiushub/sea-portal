<?php

use app\models\User;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'Crew';

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
                                <a href="/web/company/profile" class="settings__email">
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
                                            <a href="#" class="settings__link">
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
                                    <a href="#" class="adaptive-menu__link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="adaptive-menu__item">
                                    <a href="#" class="adaptive-menu__link">
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
                                    <a href="/web/find/crew" class="adaptive-menu__link  adaptive-menu__link--active">
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
                        Find a Crew
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/find/crew' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-users primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            find a crew
                        </h3>
                    </a>
                    <a href='/web/find/student' class="primary-menu__item">
                        <i class="icon-user-one primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            find a students (Practice on Board)
                        </h3>
                    </a>
                    <?php if (Yii::$app->user->isGuest){ ?>
                    <a href='/web/site/login' class="primary-menu__item">
                        <?php }else{ ?>
                        <a href='/web/user/profile' class="primary-menu__item">
                            <?php } ?>
                        <i class="icon-list1 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            place a CV Crew/Students
                        </h3>
                    </a>
                </div>
                <div class="secondary-headline margin-bottom-light text-left">
                    <h2 class="secondary-headline__title">
                        search results for master
                    </h2>
                </div>
                <div class="companies-wrapper companies-wrapper--crew">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="companies-headline">
                                <p class="companies-headline__prime">
                                    Select one or more CV
                                </p>
                                <p class="companies-headline__found">
                                    Found: <span class="companies-headline__found-num"><?php echo count($model->search()) ?> </span> a CV
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 vertical-bottom margin-bottom-light">
                <aside class="right-send">
                    <h3 class="right-send__title">
                        Candidates
                    </h3>
                    <div class="criteria">
                        <p class="criteria__text">Found <span class="criteria__company-num">(<?php echo count($model->search())." " ?>candidates)</span></p>
                    </div>
                    <div class="criteria">
                        <p class="criteria__text">Selected <span class="criteria__company-num">(138 candidates)</span></p>
                    </div>
                    <div class="criteria">
                        <p class="criteria__text criteria__text--minifont">(your message will be sent to all selected candidates)</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</header>
<main>
    <?php $form = ActiveForm::begin(['method'=>'GET']); ?>
    <section class="find-a-crew-result">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php
                        $i = 1;
                        $count = count($model->search());
                        foreach ($model->search() as $cv):
                        $user = User::find()->where(['id'=>$cv['user_id']])->andWhere(['tariff'=>'business'])->one();
                        if ($user!=null) :

                            ?>
                            <div class="col-lg-4">
                                <div class="result-box result-box--active">
                                    <div class="result-box__top result-box__top--crew">
                                        <div class="result-box__img-desc">
                                            <div class="result-box__image">
                                                <?php if (!empty($user['img'])) { ?>
                                                    <img src="../../web/public/uploads/<?php echo $user['img'] ?>"
                                                         alt="image-box" class="result-box__picture">
                                                <?php } else { ?>
                                                    <img src="../../web/public/img/image-box.png" alt="image-box"
                                                         class="result-box__picture">
                                                <?php } ?>
                                                <button class="result-box__add-button">&nbsp;</button>
                                            </div>
                                            <div class="result-box__description">
                                                    <span class="result-box__desc-line">
                                                        <?php echo $user['username'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['second_name'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['country'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['city'] ?>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="result-box__active-logo">
                                            <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12 horizontal-between crew-buttons-container">
                                            <button class="button button--result-box button--crew button--lighten">
                                                show cv
                                            </button>

                                            <div class="checkbox-style checkbox-style--crew">
                                                <input name="cv<?php echo $i ?>" value="<?php echo $user['email'] ?>"
                                                       type="checkbox" id='select<?php echo $i ?>'
                                                       class="checkbox-style__input">

                                                <label for="select<?php echo $i ?>"
                                                       class="checkbox-style__label checkbox-style__label--crew button--result-box vertical-center horizontal-center">
                                                    <span class="checkbox-style__check checkbox-style__check--accepting checkbox-style__check--crew"></span>
                                                    select
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endif;
                        endforeach;
                        ?>
                        <?php

                        foreach ($model->search() as $cv):
                        $user = User::find()->where(['id'=>$cv['user_id']])->andWhere(['tariff'=>'free'])->one();
                        if ($user!=null) {
                            ?>
                            <div class="col-lg-4">
                                <div class="result-box">
                                    <div class="result-box__top result-box__top--crew">
                                        <div class="result-box__img-desc">
                                            <div class="result-box__image">
                                                <?php if (!empty($user['img'])) { ?>
                                                    <img src="../../web/public/uploads/<?php echo $user['img'] ?>"
                                                         alt="image-box" class="result-box__picture">
                                                <?php } else { ?>
                                                    <img src="../../web/public/img/image-box.png" alt="image-box"
                                                         class="result-box__picture">
                                                <?php } ?>
                                                <button class="result-box__add-button">&nbsp;</button>
                                            </div>
                                            <div class="result-box__description">
                                                    <span class="result-box__desc-line">
                                                        <?php echo $user['username'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['second_name'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['country'] ?>
                                                    </span>
                                                <span class="result-box__desc-line">
                                                        <?php echo $user['city'] ?>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="result-box__active-logo">
                                            <img src="../../web/public/img/logo-active.jpg" alt="active-logo">
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12 horizontal-between crew-buttons-container">
                                            <button class="button button--result-box button--crew button--lighten">
                                                show cv
                                            </button>
                                            <div class="checkbox-style checkbox-style--crew">
                                                <input name="cv<?php echo $i ?>" value="<?php echo $user['email'] ?>"
                                                       type="checkbox" id='select<?php echo $i ?>'
                                                       class="checkbox-style__input">
                                                <label for="select<?php echo $i ?>"
                                                       class="checkbox-style__label checkbox-style__label--crew button--result-box vertical-center horizontal-center">
                                                    <span class="checkbox-style__check checkbox-style__check--accepting checkbox-style__check--crew"></span>
                                                    select
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-send">
                        <h3 class="right-send__title">
                            Send a message
                        </h3>
                        <div class="textinput-container">
                            <?php   ?>
                            <?= $form->field($model, 'name')->textInput([
                                    'placeholder' => "NAME",
                                'class'=>'textinput-container__input'
                            ]) ?>
                        </div>
                        <div class="textinput-container">
                            <?= $form->field($model, 'email')->textInput([
                                'placeholder' => "E-MAIL",
                                'class'=>'textinput-container__input'
                            ]) ?>
                        </div>
                        <div class="textinput-container">
                            <?= $form->field($model, 'phone')->textInput([
                                'placeholder' => "PHONE",
                                'class'=>'textinput-container__input'
                            ]) ?>
                        </div>
                        <div class="textinput-container">
                            <?= $form->field($model, 'company')->textInput([
                                'placeholder' => "COMPANY",
                                'class'=>'textinput-container__input'
                            ]) ?>
                        </div>
                        <div class="textinput-container">
                            <?= $form->field($model, 'file')->textInput([
                                'placeholder' => "ATTACH FILE",
                                'class'=>'textinput-container__input'
                            ]) ?>
                            <div class="add-plus add-plus--attach-file">
                                <p class="add-plus__symbol">
                                    +
                                </p>
                            </div>
                        </div>
                        <div class="textinput-container margin-bottom-medium">
                            <?= $form->field($model, 'body')->textarea([
                                'placeholder' => "COMMENTS",
                                'class'=>'textinput-container__textarea'
                            ]) ?>
                        </div>
                        <div class="accepting">
                            <div class="checkbox-style">
                                <input name="agree" value="yes" type="checkbox" id='accepting' class="checkbox-style__input">
                                <label for="accepting" class="checkbox-style__label">
                                    <span class="checkbox-style__check checkbox-style__check--accepting"></span>
                                    <p class="checkbox-style__text">I have read and agree to the <a href="#" class="checkbox-style__link">Terms and Conditions</a></p>
                                </label>
                            </div>
                        </div>
                        <?= Html::submitButton('send', ['class' => 'button', 'name' => 'mail']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php ActiveForm::end(); ?>
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
                            <img src="../../web/public/ img/icons/soc-mobile-2.png" alt="mobile">
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
</main>

</body>
<script src="../../web/public/js/common.js"></script>

