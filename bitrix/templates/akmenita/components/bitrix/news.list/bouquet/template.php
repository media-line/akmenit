<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>



<? foreach ($arResult["ITEMS"] as $arItem): ?>

    <!-- первое фото -->
    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
        <img
                class="preview_picture"
                border="0"
                src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
        />
    <? endif ?>
    <!-- /первое фото -->

    <!-- второе фото -->
    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["DETAIL_PICTURE"])): ?>
        <img
                class="preview_picture"
                border="0"
                src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>"
                width="<?= $arItem["DETAIL_PICTURE"]["WIDTH"] ?>"
                height="<?= $arItem["DETAIL_PICTURE"]["HEIGHT"] ?>"
                alt="<?= $arItem["DETAIL_PICTURE"]["ALT"] ?>"
                title="<?= $arItem["DETAIL_PICTURE"]["TITLE"] ?>"
        />
    <? endif ?>
    <!-- /второе фото -->

    <!-- название букета -->
    <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
        <? echo $arItem["NAME"] ?>
    <? endif; ?>
    <!-- /название букета -->

<? endforeach; ?>


