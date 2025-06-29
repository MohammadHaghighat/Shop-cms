<?php
$page = "page";
require_once 'includes/action.php'; ?>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!DOCTYPE HTML>
<html>
<head>
    <title><?= $page['0']['title'] ?></title>
    <!---css--->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!---css--->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!---js--->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---js--->
    <!--JS for animate-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!---webfont--->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!---webfont--->
    <link rel="stylesheet" type="text/css" href="css/style_common.css"/>
    <link rel="stylesheet" type="text/css" href="css/style9.css"/>
</head>
<style>
    li ul {
        display: none;
        width: 120px;
    }

    li {
        float: right;
        width: 120px;
    }

    li:hover ul {
        display: block;
    }

    li a {
        color: #fff;
        text-decoration: none;
    }

    li a:hover {
        text-decoration: none;
        color: white;
    }

    li li {
        font-size: 1.3em;
        padding: 1em;
        color: #fff;
        list-style: none;
    }

    li li:hover {
        background-color: #17c2a4;
    }
</style>
<body style="background: #ccc">
<!---header--->
<div class="header-section">
    <div class="container">
        <div class="head-bottom">
            <div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                <img width="100" src="admin/<?= $setting['0']['logo'] ?>" alt="">
                <h1><?= $setting['0']['title'] ?></h1>
            </div>
        </div>
    </div>
</div>
<!---header--->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!---banner--->
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul style="width: 100%;" class="nav navbar-nav">
                    <?php
                    foreach ($menu_items as $menu_item):
                        ?>
                        <li><a href="<?php echo $menu_item['url']; ?>" class="wow fadeInDownBig"
                               data-wow-delay=".2s">
                                <?php echo $menu_item['title']; ?>
                            </a>
                            <?php
                            if ($sub_menus = subMenuItems(1, $menu_item['id'])):
                                ?>
                                <ul class="dropdown">
                                    <?php foreach ($sub_menus as $sub_menu): ?>
                                        <li><a href="<?= $sub_menu['url'] ?>"><?= $sub_menu['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body">
        <?= $page['0']['body'] ?>
    </div>
    <!---footer--->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <div class="footer-section">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <h4>درباره ما</h4>
                    <ul>
                        <li>
                            تمرکز بر مشتری
                        </li>
                        <li>

                            لورم ایپسوم یا طرح‌نما
                        </li>
                        <li>

                            لورم ایپسوم یا طرح‌نما
                        </li>
                        <li>عملکردها</li>
                        <li>نوآوری</li>
                        <li>
                            مسئوليت ها
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
                    <h4>راه حل ها</h4>
                    <ul>
                        <li>
                            مرکز تماس
                        </li>
                        <li>پشتیبانی مشتریان</li>
                        <li>

                            لورم ایپسوم یا طرح‌نما
                        </li>
                        <li>طرح‌نما</li>
                        <li>
                            وب سلف سرویس
                        </li>
                        <li>معیارهای عملکرد</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
                    <h4>کارها</h4>
                    <ul>
                        <li>
                            پشتیبانی مشتریان
                        </li>
                        <li>
                            پشتیبانی پلاتین
                        </li>
                        <li>پشتیبانی طلا</li>
                        <li>آموزش</li>
                        <li>کارگاه های آموزشی</li>
                        <li>
                            آموزش آنلاین
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <h4>تماس با ما</h4>
                    <p><?= $setting['0']['address'] ?></p>
                    <p>
                        تلفن : <?= $setting['0']['tel'] ?></p>
                    <p>فکس : <?= $setting['0']['fax'] ?></p>
                    <a href="mailto:example@mail.com"> example@mail.com</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---footer--->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!--copy-->
    <div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"
    ">
    <div class="container">
        <div class="social-icons">
            <a href="#"><i class="icon"></i></a>
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
        </div>
        <p><?= $setting['0']['copyright'] ?></p>
    </div>
</div>

<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
