<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult["ITEMS"] as $arItem):?>

    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="grid_4" style="margin-right: 0;">
    <div class="banner">
       <? $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
        Array("width" => "300", "height" => "364"), BX_RESIZE_IMAGE_EXACT, false); ?>
        <img src="<?=$renderImage["src"]?>" alt="<?=$arItem["NAME"]?>">
        <div class="label">
            <div class="title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
            <div class="price"><span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span></div>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>l">Подробнее</a>
        </div>
    </div>
</div>
    
<?endforeach;?>

