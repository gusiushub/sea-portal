<?php
use yii\bootstrap\ActiveForm;
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
                            <a href="/web/seller/profile" class="settings__email">
                                <?php  echo Yii::$app->user->identity->email ?>
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
                                        <a href="/web/seller/profile" class="settings__link">
                                            Profile
                                        </a>
                                    </li>
                                    <li class="settings__list-item">
                                        <a href="/web/seller/logout" class="settings__link">
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
                    <a href="#" class="settings__email settings__email--head">
                        <?php echo Yii::$app->user->identity->email ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/seller/profile' class="primary-menu__item primary-menu__item--active">
                        <i class="icon-sheap primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            seller information
                        </h3>
                    </a>
                    <a href='/web/seller/pricing' class="primary-menu__item">
                        <i class="icon-list7 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            pricing
                        </h3>
                    </a>
                    <a href='/web/seller/request' class="primary-menu__item">
                        <i class="icon-message primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            incoming requests
                        </h3>
                    </a>
                    <a href='/web/seller/statistics' class="primary-menu__item">
                        <i class="icon-charting primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            statistics
                        </h3>
                    </a>
                    <a href='/web/seller/offers' class="primary-menu__item">
                        <i class="icon-list6 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            my offers
                        </h3>
                    </a>
                    <a href='/web/seller/advertisement' class="primary-menu__item">
                        <i class="icon-window primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            place an adverticement
                        </h3>
                    </a>
                    <a href='/web/seller/term' class="primary-menu__item">
                        <i class="icon-list5 primary-menu__icon"></i>
                        <h3 class="primary-menu__title">
                            term and conditions
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
                        <?php if (!empty(Yii::$app->user->identity->img)){ ?>
                            <img src="../../web/public/uploads/<?php echo Yii::$app->user->identity->img ?>" alt="company-logo" class="profile__photo margin-bottom-light">
                        <?php }else{  ?>
                            <img src="../../web/public/img/company-logo-big.jpg" alt="company-logo" class="profile__photo margin-bottom-light">
                        <?php } ?>
                        <?php $form = ActiveForm::begin(['options' => ['id'=>'myform','enctype' => 'multipart/form-data']]) ?>
                        <?= $form->field($upload, 'image')->fileInput( ['id' => 'uploadbtn','style'=>"opacity: 0","onchange"=>"if (this.selectedIndex) this.form.submit ()"]) ?>
                        <button class="profile__upload-photo margin-bottom-medium">
                            <label class="submit" for="uploadbtn" >select file</label>
                        </button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row block-underline">
                        <div class="col-lg-7">
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Company:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text" class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="COMPANY NAME" name="cname" value="<?php echo Yii::$app->user->identity->username ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Phone:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="+0000000000" name="phone" value="<?php echo Yii::$app->user->identity->phone ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Country:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="ALBANIA" name="country" value="<?php echo Yii::$app->user->identity->country ?>">
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
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="VLORE" name="city" value="<?php echo Yii::$app->user->identity->city ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    E-mail:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="INFO@??????.??" name="mail" value="<?php echo Yii::$app->user->identity->email ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile__setting">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Contacts:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="textinput-container">
                                            <input type="text"  class="textinput-container__input textinput-container__input--change textinput-container__input--change-unactive" disabled="" placeholder="PETER WASQUES" name="contacts" value="<?php echo Yii::$app->user->identity->contacts ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-2 col-md-3 col-sm-3 col-4">
                            <button id="profile-seller-change" class="button button--profile button--profile-change">
                                edit
                            </button>
                        </div>
                    </div>
                    <div class="row block-underline margin-bottom-medium">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 vertical-center">
                            <div class="profile__setting profile__setting--no-margin">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 vertical-center">
                                                <span class="profile__details">
                                                    Password:
                                                </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" >
                                        <div class="textinput-container">
                                            <input type="password" class="textinput-container__input textinput-container__input--change-pass textinput-container__input--change-unactive" value="aaaaaa" disabled="" placeholder="PASSWORD" name="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-3 col-md-3 col-sm-3 col-4">
                            <button id="profile_sller1_changebtn" class="button button--profile button--profile--change-pass">
                                change
                            </button>
                        </div>
                    </div>
                    <div class="row horizontal-center">
                        <div class="col-lg-7">
                            <?php
                            $vessel = \app\models\Vessel::find()->where('user_id=:id',[':id'=>Yii::$app->user->id])->one();
                            if (isset($vessel)){
                            ?>
                            <a href="/web/seller/vessel">
                                <button class="button button--profile">
                                    place your offer (sell or chartering)
                                </button>
                            </a>
                            <?php }else{ ?>
                                <a href="/web/seller/offers">
                                    <button class="button button--profile">
                                        place your offer (sell or chartering)
                                    </button>
                                </a>
                            <?php } ?>
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
<script type="text/javascript">
    jQuery(function(){
        $("#uploadbtn").change(function(){ // событие выбора файла
            $("#myform").submit(); // отправка формы
        });
    });
</script>
<script>
    // var _csrf = $('input[name="_csrf"]').val();
    //
    // var files;
    // $('input[type=file]').change(function(){
    //     files = this.files;
    //     event.stopPropagation(); // Остановка происходящего
    //     event.preventDefault();  // Полная остановка происходящего
    //     var data = new FormData();
    //     $.each( files, function( key, value ){
    //         data.append( key, value );
    //     });
    //     $.ajax({
    //         url: '/web/seller/profile',
    //         type: 'POST',
    //         data: data,
    //         cache: false,
    //         dataType: 'json',
    //         processData: false, // Не обрабатываем файлы (Don't process the files)
    //         contentType: false, // Так jQuery скажет серверу что это строковой запрос
    //         success: function(data){
    //             alert(data);
    //     }
    //
    // })
    // });

    // function save()
    // {
    //     $.post('/web/site/ajax-adv', { file_name: 1, field2 :1,field3: 0,_csrf:_csrf},
    //         function(returnedData){
    //             console.log(returnedData);
    //         }).fail(function(){
    //         console.log("error");
    //     });
    // }


    // var _csrf = $('input[name="_csrf"]').val();
    //
    // var files;
    // $('input[type=file]').change(function(){
    //     files = this.files;
    //     event.stopPropagation(); // Остановка происходящего
    //     event.preventDefault();  // Полная остановка происходящего
    //     var data = new FormData();
    //     $.each( files, function( key, value ){
    //         data.append( key, value );
    //     });
    //     $.ajax({
    //         url: '/web/ajax.php?uploadfiles',
    //         type: 'POST',
    //         data: data,
    //         cache: false,
    //         dataType: 'json',
    //         processData: false, // Не обрабатываем файлы (Don't process the files)
    //         contentType: false, // Так jQuery скажет серверу что это строковой запрос
    //         success: function( respond, textStatus, jqXHR ){
    //
    //             // Если все ОК
    //             //
    //             if( typeof respond.error === 'undefined' ){
    //                 // Файлы успешно загружены, делаем что нибудь здесь
    //
    //                 // выведем пути к загруженным файлам в блок '.ajax-respond'
    //
    //                 var files_path = respond.files;
    //
    //                 var html = '';
    //                 // $.each( files_path, function( key, val ){ html += val +'<br>'; } );
    //                 // $('.ajax-respond').html( html );
    //             }
    //             else{
    //                 console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
    //             }
    //         },
    //         error: function( jqXHR, textStatus, errorThrown ){
    //             // alert(respond);
    //             console.log('ОШИБКИ AJAX запроса: ' + textStatus );
    //         }
    //     });
    //
    // });
</script>