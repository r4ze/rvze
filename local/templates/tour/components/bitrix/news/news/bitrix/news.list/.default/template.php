<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="container_12">
        <div class="grid_12">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
                    <h3 class="mtop20">Новости</h3>
                    <div class="blog">
                        <time datetime="2014-10-01">15<span>Фев</span></time>
                        <div class="extra_wrapper">
                            <div class="text1 col1"><a href="news_detail.html"><?=$arItem["NAME"]?></a></div>
                        </div>
                        <p><?=$arItem[PREVIEW_TEXT]?></p>
                        <a href="<?=$arItem[DETAIL_PAGE_URL]?>" class="link1 fright">Подробнее</a>
                    </div>

    <?endforeach;?>
    <? echo '<pre>'; print_r($arItem); echo '</pre>';?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
        </div>

    </div>
