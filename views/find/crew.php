<?php
use app\models\Crew;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

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
                                <a href="/web/find/crew" class="secondary-navigation__link secondary-navigation__link--active">
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
                        Find a crew
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="primary-menu margin-bottom-medium">
                    <a href='#' class="primary-menu__item primary-menu__item--active">
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
            </div>
            <div class="col-lg-4 vertical-bottom ">
                <a href='#' class="advertising advertising--oneitem">
                    <p class="advertising__content">
                        <img width="398px" height="190px"  src="../../web/public/uploads/<?php echo $place[6]['img']?>" >
                    </p>
                </a>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="find-a-crew">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php $form = ActiveForm::begin(['action'=>'/web/find/crew']); ?>
                    <div class="filter">
                        <div class="secondary-headline margin-bottom-light">
                            <h2 class="secondary-headline__title">
                                find a crew
                            </h2>
                        </div>
                        <div class="filter__item margin-bottom-light">
                            <h4 class="filter__title">
                                Position
                            </h4>
                            <div class="select-style">

                                <?php
                                $positions = Crew::find()->all();
                                ?>

                                <?= $form->field($model, 'position')->dropDownList(\yii\helpers\ArrayHelper::map($positions,'position','position'),[
                                    'prompt'=>'Position',
                                    'class'=>'select-style__select',
                                    'id'=>'position',
                                    'placeholder'=>'COUNTRY',
                                ]) ?>

                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div style="display: none" class="form-group city-select">
                        <div class="filter__item margin-bottom-light">
                            <h4 class="filter__title">
                                Level of English
                            </h4>
                            <div class="select-style">
                                <?php
                                $lvleng = Crew::find()->all();
                                ?>
                                <?= $form->field($model, 'lvleng')->dropDownList(array_diff(\yii\helpers\ArrayHelper::map($lvleng,'lvleng','lvleng'),array('')),[
                                    'prompt'=>'Level of English',
                                        'class'=>'select-style__select',
                                    'placeholder'=>'COUNTRY',
                                    'id'=>'lvleng'
                                ]) ?>

                                <div class="select-style__arrow">&nbsp;</div>
                            </div>
                        </div>
                        <div class="filter__doubleitem-wrapper margin-bottom-medium">
                            <div class="filter__item filter__item--double-1">
                                <h4 class="filter__title">
                                    Salary
                                </h4>
                                <div class="textinput-container">
                                    <?= $form->field($model, 'salary')->textInput([
                                        //'prompt'=>'Salary',
                                        'class' => 'textinput-container__input',
                                        'placeholder'=>'MAXIMUM',
                                    ]) ?>
                                </div>
                            </div>
                            <div class="filter__item filter__item--double-2">
                                <h4 class="filter__title">
                                    Curency
                                </h4>
                                <div class="select-style">
                                    <?= $form->field($model, 'currency')->dropDownList(['eur'=>'eur','USD'=>'USD'],[
                                        'prompt'=>'Curency',
                                            'class'=>'select-style__select',
                                        'placeholder'=>'eur',
                                    ]) ?>

                                    <div class="select-style__arrow">&nbsp;</div>
                                </div>
                                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            </div>
                        </div>
                        </div>
                        <div class="filter__item">
                            <?= Html::submitButton('Show results', ['class' => 'button button--show-results', 'name' => 'search']) ?>
                        </div>

                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-4">
                    <div class="advertising-wrapper">
                        <a href='#' class="advertising">
                            <p class="advertising__content">
                                <img width="398px" height="195px"  src="../../web/public/uploads/<?php echo $place[7]['img']?>" >
                            </p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">
                                <img width="398px" height="195px"  src="../../web/public/uploads/<?php echo $place[8]['img']?>" >
                            </p>
                        </a>
                        <a href='#' class="advertising">
                            <p class="advertising__content">
                                <img width="398px" height="190px"  src="../../web/public/uploads/<?php echo $place[9]['img']?>" >
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">
                            <img width="398px" height="190px"  src="../../web/public/uploads/<?php echo $place[10]['img']?>" >
                        </p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">
                            <img width="398px" height="190px"  src="../../web/public/uploads/<?php echo $place[11]['img']?>" >
                        </p>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href='#' class="advertising">
                        <p class="advertising__content">
                            <img width="398px" height="190px"  src="../../web/public/uploads/<?php echo $place[12]['img']?>" >
                        </p>
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
<!--<script src="../../web/public/js/common.js"></script>-->
<script>

    $(function(){
        $('#position').change(function(){
            var position = $(this).val();
            $('#lvleng').load('ajax-crew', {position: position}, function(){
                $('.city-select').fadeIn('fast');
            });
        });
    });
</script>