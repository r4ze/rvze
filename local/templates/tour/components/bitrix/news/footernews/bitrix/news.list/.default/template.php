<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <?foreach($arResult["ITEMS"] as $arItem):?>

<div class="grid_4">
    <div class="block1">
        <time><?=FormatDate("d", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?><span><?=FormatDate("M", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?></span></time>
        <div class="extra_wrapper">
            <div class="text1 col1"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
            <?=$arItem["PREVIEW_TEXT"]?>
        </div>
    </div>
</div>

    <?endforeach;?>



