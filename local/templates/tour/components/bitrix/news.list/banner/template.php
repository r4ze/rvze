<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>

    <div data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">

        <div class="caption fadeIn">
            <h2><?=$arItem["NAME"]?> </h2>
            <div class="price">
                <span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
            </div>
        </div>
    </div>
    <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
<? endforeach;?>
</div>
