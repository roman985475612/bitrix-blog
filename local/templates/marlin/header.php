<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
        use Bitrix\Main\Page\Asset;
        
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.theme.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.transitions.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-1.11.3.min.js' , true);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js' , true);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js' , true);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.stickit.min.js' , true);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/menu.js' , true);
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/scripts.js' , true);
        
        $APPLICATION->ShowHead();
    ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/favicon.png">

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php $APPLICATION->IncludeComponent('bitrix:menu', '', [
                    'ROOT_MENU_TYPE' => 'top',
                    'MAX_LEVEL'      => '1',
                ]) ?>

                <ul class="nav navbar-nav text-uppercase pull-right">
                    <li><a href="#">Register</a></li>
                    <li><a href="about-me.html">Login</a></li>
                    <li><a href="contact.html">My profile</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->

            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">