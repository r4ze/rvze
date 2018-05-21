<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img class="detail_picture" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
	<?endif?>

<div class="grid_12">
<h3 class="mtop20"><?=$arResult["NAME"]?></h3>
<div class="blog">

    <div class="clear"></div>
    <img src="<?=$arResult["DETAIL_PICTURE"]?>" alt="" class="img_inner fleft mr10">
    <p><?=$arResult["DETAIL_TEXT"]?></p>

    <div class="o-section">
        <div id="tabs" class="c-tabs no-js">
            <div class="c-tabs-nav">
                <a href="#" class="c-tabs-nav__link is-active">
                    <span>Туры</span>
                </a>
                <a href="#" class="c-tabs-nav__link">
                    <span>Города</span>
                </a>

            </div>
            <div class="c-tab is-active">
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/ban_img1.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#"><?="**"?></a></h1>
                    <p>Home ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/page2_img2.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#">Великолепный ГОА</a></h1>
                    <p>Books ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/page2_img3.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#">Романтический ПАРИЖ</a></h1>
                    <p>Books ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
            </div>
            <div class="c-tab">
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/page3_img2.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#">Москва</a></h1>
                    <p>Home ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/images.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#">Ташкент</a></h1>
                    <p>Books ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
                <div class="c-tab__content">

                    <a href="#"><img src="media/images/buh.jpg" alt="" class="for_tabs fleft"></a>
                    <h1><a href="#">Бухарест</a></h1>
                    <p>Books ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quo minus voluptate unde tempore eveniet consequuntur in, quod animi libero rem similique pariatur quos, et eum nisi ducimus, architecto voluptatibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur natus dolorem fuga cumque optio saepe corrupti earum. Ipsam quaerat asperiores similique omnis excepturi temporibus ab eum magnam ipsa, odio.</p>
                    <a href="tours.html" class="link1">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <a href="hotels.html" class="link1 mt">К списку</a>
</div>

</div>
