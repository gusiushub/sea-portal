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
                                    <a href="/web/find/crew" class="adaptive-menu__link">
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
                        Profile
                    </h1>
                    <a href="#" class="settings__email settings__email--head">
                        wilkinson@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="primary-menu margin-bottom-medium">
                    <a href='/web/seller/profile' class="primary-menu__item">
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
                    <a href='/web/seller/statistics' class="primary-menu__item primary-menu__item--active">
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
                    <a href='/web/seller/statistics' class="primary-menu__item">
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
    <section class="profile3">
        <div class="container">
            <div class="row no-gutters margin-bottom-medium">
                <div class="col-lg-6 vertical-center">
                    <div class="sub-title">
                        <h3 class="sub-title__title">
                            select the option to show statistics:
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 vertical-center">
                    <div class="select-style">
                        <select name="refine" id="" class="select-style__select">
                            <option class="select-style__placeholder">excellent</option>
                            <option value="">text</option>
                            <option value="">text</option>
                        </select>
                        <div class="select-style__arrow">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="statistics">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="statistics__title margin-bottom-light">
                                    users visited
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="chart">
                                    <canvas id="chart-statistics"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6">
                                        <h5 class="statistics__sub-title margin-bottom-light">
                                            visits per:
                                        </h5>
                                        <div class="select-style">
                                            <select name="day" id="" class="select-style__select">
                                                <option class="select-style__placeholder">day</option>
                                                <option value="">text</option>
                                                <option value="">text</option>
                                            </select>
                                            <div class="select-style__arrow">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-6 vertical-bottom">
                                                <span class="statistics__count">
                                                    145632
                                                </span>
                                    </div>
                                </div>
                            </div>
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
    <?php
    $k=1;
    $l = 11;
    $ost = count($statistics);

    foreach($statistics as $value){
        if (!empty($value['request'])) {
            ?>
            <input type="hidden" class="hidden" value="<?php echo $value['request'] ?>" id="val<?php echo $k ?>">
            <?php
        }else{
            ?>
            <input type="hidden" value="<?php echo 0 ?>" id="val<?php echo $k ?>">
            <?php
        }
        if (isset($value['date'])) {
            ?>
            <input type="hidden" class="hidden" value="<?php echo $value['date'] ?>" id="val<?php echo $l ?>">
            <?php
        }else{
            ?>
            <input type="hidden" value="<?php echo 0 ?>" id="val<?php echo $l ?>">
            <?php
        }
        $l++;
        $k++;
    } ?>
</footer>
<?php
$k = 1;
$l = 11;
foreach($statistics as $value){
    if (!empty($value['request'])) {
        ?>
        <input type="hidden" value="<?php echo $value['request'] ?>" id="val<?php echo $k ?>">
        <?php
    }else{
        ?>
        <input type="hidden" value="<?php echo 0 ?>" id="val<?php echo $k ?>">
        <?php
    }
    $k++;

    if (isset($value['date'])) {
        ?>
        <input type="hidden"  value="<?php echo $value['date'] ?>" id="val<?php echo $l ?>">
        <?php
    }else{
        ?>
        <input type="hidden" value="<?php echo 0 ?>" id="val<?php echo $l ?>">
        <?php
    }
    $l++;
} ?>
</body>
<script src="../../web/public/libs/Chart.min.js"></script>
<script>
//     for (var i=1;i<8;i++) {
//         //var name = 'input'+i;
// var inp = document.getElementById('val'+i).val();
//         if (inp!=null){
//            document.getElementById('val'+i).value;
//             alert(document.getElementById('val1').value);
//         } else {
//             document.getElementById('val'+i).value = 0;
//         }

var count = $('.hidden').length;
count = count/2+1;
var input = [];
var date = [];
for (var i=1;i<count;i++){
    input[i] = document.getElementById('val'+i).value;
}
var ost = 7-count;
if (ost!=0){
    for (var i=count;i<8;i++){
        input[i] = 0;
    }
}
var dateCount = count +10;
for (var i=11;i<dateCount;i++){
    date[i] = document.getElementById('val'+i).value;
}
var ost = 17-dateCount;
if (ost!=0){
    for (var i=dateCount;i<8;i++){
        date[i] = 0;
    }
}

    var ctx = document.getElementById("chart-statistics").getContext('2d');
    var myBarChart = new Chart(ctx, {
        options: {
            elements: {
                line: {
                    tension: 0
                }
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false
                    }
                }]
            },
            tooltips: {
                mode: false,
                callbacks: {
                    title: function() {},
                    label: function() {}
                }
            }
        },
        // The type of chart we want to create
        type: "line",
        // The data for our dataset
        data: {
            labels: [
                date[11],
                date[12],
                date[13],
                date[14],
                date[15],
                date[16],
                date[17]

            ],
            datasets: [{
                backgroundColor: "rgb(206, 225, 240)",
                borderColor: "rgb(72, 137, 191)",
                data: [input[1],input[2], input[3], input[4],input[5], input[6], input[7], 20]
            }]
        }
    });


</script>
<script src="../../web/public/js/common.js"></script>