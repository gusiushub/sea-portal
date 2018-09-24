<?php


use yii\helpers\ArrayHelper;
use app\models\Location;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;
use yii\helpers\Html;
//use yii\helpers\CHtml;
//use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Sign up';
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
    <div class="secondary-navbar">
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
</header>
<main>
    <section class="sign-up-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">

                    <?php $form = ActiveForm::begin(); ?>

<!--                    --><?php
//                    $items = [
//                        '0' => 'Активный',
//                        '1' => 'Отключен',
//                        '2'=>'Удален'
//                    ];
//
//                    echo $form->field($model, 'city')->dropDownList($items,
//                        ['prompt'=>'-Choose a Name-',
//                            'class'=>'adjust',
//                            'onchange'=>'
//      $.post("'.Yii::$app->urlManager->createUrl('site/subcat?id=').
//                                '"+$(this).val(),function(data)
//        {
//           $("select#city").html(data);
//          });
//         ']);
//
//                    $dataPost= [
//                        '0' => '2ццц',
//                        '1' => 'ыыыы',
//                        '2'=>'пппп'
//                    ];
//
//                    echo $form->field($model, 'city')
//                        ->dropDownList(
//                            $dataPost,
//                            ['id'=>'city',
//                                'class'=>'adjust'
//                            ]
//                        );


//                    // Normal parent select
//                    echo $form->field($model, 'cat')->dropDownList(['1'=>'asdasd','2'=>'asdasd'], ['id' => 'cat-id']);
//
//                    // Dependent Dropdown
//                    echo $form->field($model, 'subcat')->widget(DepDrop::classname(), [
//                        'options' => ['id' => 'subcat-id'],
//                        'pluginOptions' => [
//                            'depends' => ['cat-id'],
//                            'placeholder' => 'Select...',
//                            'url' => Url::to(['/site/subcat'])
//                        ]
//                    ]);

                    ?>

                    <?php
//                    $form=$this->beginWidget('CActiveForm', array(
//                        'id' => 'my-form',
//                        'enableClientValidation' => true,
//                        'htmlOptions' => array(
//                            'enctype' => 'multipart/form-data',
//                            'autocomplete' => 'off',
//                            'role' => 'form'
//                        ),
//                        'clientOptions' => array(
//                            'validateOnSubmit' => true,
//                        )
//                    ));


                    $items = [
                        '0' => 'Активный',
                        'MARINE PAINTS' => 'MARINE PAINTS',
                        'spare parts and equipment'=>'spare parts and equipment'
                    ];

                    $dataPost= [
                        '0' => '2ццц',
//                            '1' => 'ыыыы',
//                            '2'=>'пппп'
                    ];
                    ?>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Country
                                        </h4>
                                        <div class="select-style select-style--sing">

                                            <select class="select-style__select select-style__select--sing select-style__select--sing-1" name="country" onchange="javascript:selectRegion();">
                                                <option class="select-style__placeholder">Country</option>

                                                <?php // заполняем список областей
                                                foreach ($country as $region)
                                                {
                                                    echo '<option value="'.$region['location_id'].'">' .$region['name'] . '</option>' . "\n";
                                                }
                                                ?>

                                            </select>

                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            City
                                        </h4>
                                        <div class="select-style select-style--sing">

                                            <select id="city" class="select-style__select select-style__select--sing select-style__select--sing-3" name="city" >
                                                <option class="select-style__placeholder">City</option>
                                            </select>

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
                                        </div>
                                    </div>
                                </div>
                                <div class="row horizontal-center">
                                    <div class="col-lg-6 margin-bottom-light">
                                        <h4 class="filter__title">
                                            Password
                                        </h4>
                                        <div class="textinput-container">
                                            <?= $form->field($model, 'password')->passwordInput([
                                                'class'=>'textinput-container__input textinput-container__input--sing textinput-container__input--sing-2 textinput-container__input--pass',
                                                'placeholder'=>'PASSWORD',
                                            ]) ?>
                                            <button class="password-eye">
                                                &nbsp;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row horizontal-center">
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <div class="col-lg-6">
                                <?= Html::submitButton('Sign up', ['class' => 'button margin-bottom-medium', 'name' => 'signup-button']) ?>
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

<script>
    function selectRegion(){
        var id_country = $('select[name="country"]').val();
        if(!id_country){
            $('select[name="country"]').html('');
        }else{
            $.ajax({
                type: "POST",
                url: "/web/site/select-ajax",
                data: { action: 'showRegionForInsert', id_country: id_country },
                cache: false,
                success: function(responce){ $('select[name="city"]').html(responce); }
            });
        };
    };

    // function selectCity(){
    //     var id_region = $('select[name="region"]').val();
    //     $.ajax({
    //         type: "POST",
    //         url: "/web/site/select-ajax",
    //         data: { action: 'showCityForInsert', id_region: id_region },
    //         cache: false,
    //         success: function(responce){ $('div[name="selectDataCity"]').html(responce); }
    //     });
    // };
</script>