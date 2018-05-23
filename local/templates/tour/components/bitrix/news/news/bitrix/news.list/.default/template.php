<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="container_12">
        <div class="grid_12">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

                    <div class="blog">
                        <time datetime="2014-10-01"><?=FormatDate("d", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?><span><?=FormatDate("M", MakeTimeStamp($arItem['DISPLAY_ACTIVE_FROM']))?></span></time>
                        <div class="extra_wrapper">
                            <div class="text1 col1"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
                        </div>
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link1 fright">Подробнее</a>
                    </div>

    <?endforeach;?>
        </div>

    </div>
