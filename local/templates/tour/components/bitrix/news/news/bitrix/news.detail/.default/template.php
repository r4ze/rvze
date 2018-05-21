<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="container_12" style="padding-top: 25px;">
    <div class="grid_12">
        <div class="blog">

            <?
            $renderImage = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["SRC"],
                Array("width" => "540", "height" => "313"), BX_RESIZE_IMAGE_EXACT, false);
            ?>

            
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>

		<img class="img_inner fleft mr10"  src="<?=$renderImage["src"]?>" width="<?=$arResult["DETAIL_PICTURE"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
        <time datetime="2014-10-01"><span><?=FormatDate("d", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?><span><?=FormatDate("M", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?></span></span></time>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>

        <h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
            <? echo  "<pre>"; print_r($arResult); echo "</pre>";?>

</div>
</div>
</div>
</div>