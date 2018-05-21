<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

    <?if(!empty($arResult["ERROR_MESSAGE"])) {
    foreach ($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);

    if (strlen($arResult["OK_MESSAGE"]) > 0) {
        ?>

        <div class="success_wrapper"><?= $arResult["OK_MESSAGE"] ?></div>

        <?
    }
}
?>

<form id="form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>

        <label class="name">
            <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="empty-message">*This field is required.</span><?endif?>
            <input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
        </label>


        <label class="email">
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="empty-message">*This field is required.</span><?endif?>
            <input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
        </label>


        <label class="message">
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="empty-message">*This field is required.</span><?endif?>
            <textarea name="MESSAGE" rows="5" cols="40" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
        </label>


	    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">


        <div class="btns">
            <input data-type="submit" class="btn" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
        </div>


</form>

