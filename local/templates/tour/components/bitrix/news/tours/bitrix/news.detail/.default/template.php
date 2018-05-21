<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <h3 class="mtop20"><?=$arResult["NAME"]?></h3>
    <div class="blog">
        <div class="clear"></div>

        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
            <img class="" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
        <?endif?>

        <img src="<?=$arResult["DETAIL_PICTURE"]?>" alt="" class="img_inner fleft mr10">
        <p><?=$arResult["DETAIL_TEXT"]?></p>


