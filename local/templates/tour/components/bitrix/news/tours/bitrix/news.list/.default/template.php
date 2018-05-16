<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

        <?
        $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
            Array("width" => "300", "height" => "364"), BX_RESIZE_IMAGE_EXACT, false);

        ?>
<div class="grid_4" style="margin-right: 0;">
    <div class="banner">
                <img alt="<?=$arItem["NAME"]?>" src="<?=$renderImage["src"]?>">
                <div class="label">
                    <div class="title"><a href="tours_detail.html"><?=$arItem["NAME"];?></a></div>
                    <div class="price"><span><?=$arItem["PREVIEW_TEXT"];?></span></div>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
                </div>
    </div>
</div>


<?endforeach;?>





