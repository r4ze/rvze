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

<body <?if(IS_INDEX):?>class="page1" <? endif; ?> id="top">

<!--==============================header  class="current"=================================-->
<header>
    <?$APPLICATION->ShowPanel();?>

    <div class="container_12">
        <div class="grid_12" >
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
        <div class="container_12" style="padding: 15px;">
            <?if(!IS_INDEX):?> <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bc", Array(

        ),
            false
        );?> <?endif;?>
        </div>


</div>


    <?if(IS_INDEX):?>

        <div class="slider_wrapper">
            <div id="camera_wrap" class="">
                <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide.jpg">
                    <div class="caption fadeIn">
                        <h2>ЛОНДОН</h2>
                        <div class="price">
                            <span>$1000</span>
                        </div>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
                <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide1.jpg">
                    <div class="caption fadeIn">
                        <h2>МАЛЬДИВЫ</h2>
                        <div class="price">
                            <span>$2000</span>
                        </div>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
                <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slide2.jpg">
                    <div class="caption fadeIn">
                        <h2>ВЕНЕЦИЯ</h2>
                        <div class="price">
                            <span>$1600</span>
                        </div>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>

    <?endif;?>
<div class="content">
    <div class="container_12">

        <?if(IS_INDEX):?>
            <div class="grid_4">
                <div class="banner">


                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img1.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="#">Старинная Барселона</a></div>
                        <div class="price"><span>$ 1000</span></div>
                        <a href="tours_detail.html">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img2.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="tours_detail.html">Великолепный ГОА</a></div>
                        <div class="price"><span>$ 1500</span></div>
                        <a href="tours_detail.html">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/ban_img3.jpg" alt="">
                    <div class="label">
                        <div class="title"><a href="tours_detail.html">Романтический ПАРИЖ</a></div>
                        <div class="price"><span>$ 1600</span></div>
                        <a href="tours_detail.html">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_4 prefix_1">
                <h5>Выберите страну</h5>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "countriesMenu", array(
                    "ROOT_MENU_TYPE" => "countries",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                    false
                );?><br>
                <h3 class="mtop20">Найти Тур</h3>
                <form id="bookingForm">
                    <div class="fl1 fl2">
                        <em>Страна</em>
                        <select>
                           <option>Выберите страну</option>
                            <option>Америка</option>
                            <option>Мексика</option>
                            <option>Карибы</option>
                            <option>Европа</option>
                            <option>Канада</option>
                            <option>Азия</option>
                            <option>Австралия</option>
                            <option>Россия</option>
                            <option>Узбекистан</option>
                            <option>Турция</option>
                            <option>Африка</option>
                        </select>
                        <div class="clear"></div>
                        <em>Город</em>
                        <select>
                            <option>Выберите город</option>
                            <option>Москва</option>
                            <option>Ташкент</option>
                            <option>Бухарест</option>
                            <option>Киев</option>
                        </select>
                        <div class="clear"></div>
                        <em>Тип тура</em>
                        <select>
                            <option>Выберите тур</option>
                            <option>Семейный</option>
                            <option>Три страны</option>
                            <option>Пять городов</option>
                            <option>Европа</option>
                        </select>
                        <label class="price">Цена до ($)</label>
                        <input type="text">
                    </div>

                    <div class="clear"></div>
                    <div class="tmRadio hot_tour">
                        <label>
                            <input name="Comfort" type="checkbox" id="tmRadio0" data-constraints='	@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                            Горячий тур
                        </label>
                    </div>
                    <div class="clear"></div>

                    <a href="#" class="btn" data-type="submit">Найти</a>
                </form>
            </div>


    <?endif;?>

        <div class="<?=(IS_INDEX)?('grid_8 prefix_1'):('grid_12')?>">

            <h3><?$APPLICATION->ShowTitle();?></h3>