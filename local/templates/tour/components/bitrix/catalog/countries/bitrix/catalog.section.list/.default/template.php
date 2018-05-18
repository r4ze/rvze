<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (0 < $arResult["SECTIONS_COUNT"])
{
?>

<?

			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				?>

                <div class="block2" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
    <? $renderImage = CFile::ResizeImageGet($arSection["PICTURE"],
    Array("width" => "300", "height" => "313"), BX_RESIZE_IMAGE_EXACT, false);
    ?>

    <a href="countries_detail.html"><img src="<?=$renderImage['src']?>" alt="" class="img_inner fleft"></a>
    <div class="extra_wrapper">

        <div class="text1 col1"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></div>
        <p><?=$arSection["DESCRIPTION"]?></p>
        <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="link1 mt">Подробнее</a>

    </div>
</div>
                <?
			}

}
?>
