<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <head>
        <title>Главная</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico">
        <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/booking.css">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/camera.css">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/form.css">
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/superfish.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.totop.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.equalheights.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mobilemenu.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.easing.1.3.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/camera.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mobile.customized.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancyform.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.placeholder.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/regula.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/booking.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/tabs.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.js"></script>
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/css/ie.css">
    </head>

<body <? if($APPLICATION->GetCurPage()==='/'): ?> class="page1" <? endif; ?> id="top">

<!--==============================header  class="current"=================================-->
<header>
    <?$APPLICATION->ShowPanel();?>

    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header1",
                    Array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                    )
                );?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>
<div class="content" style="padding: 0;">
        <div class="container_12">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bc", Array(

        ),
            false
        );?>
        </div>


</div>
    <div class="content">
