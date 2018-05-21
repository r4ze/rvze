<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div data-src="<?=$arItem["PREVIEW_PICTURE"]?>">
            <div class="caption fadeIn">
                <h2><?=arItem["NAME"]?></h2>
                <div class="price">
                    <span><?=arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
                </div>
                <a href="<?=arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
            </div>
        </div>

    <? echo "<pre>"; print_r($arResult); echo "</pre>";?>
    <?endforeach;?>

