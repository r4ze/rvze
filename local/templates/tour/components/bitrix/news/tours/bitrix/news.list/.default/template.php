<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="banner">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


    <div class="banners">
        <div class="grid_4">
            <div class="banner">
                <?
                $item = CFile::ResizeImage(
                    $arItem["PREVIEW_PICTURE"]["ID"],
                    array("width" => "200", "height" => "200"),
                    BX_RESIZE_IMAGE_EXACT);
                ?>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="">
                <div class="label">
                    <div class="title"><a href="tours_detail.html"><?=$arItem["NAME"];?></a></div>
                    <div class="price"><span><?=$arItem["PREVIEW_TEXT"];?></span></div>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"];?>">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
