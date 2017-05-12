<div class="bouquet">
    <div class="title_big title_big_boquet">
        <div class="example-classname"></div>
        <?php echo $arResult["NAME"] ?>
    </div>
    <div class="desc_ltl">
        доставим сегодня
    </div>
    <div class="main-bouquet-wrap">
        <div class="bouquet-wrap">
            <?php foreach ($arResult["ITEMS"] as $key => $arItem) {
                $arrLength = count($arResult["ITEMS"]);
                if ($key == ($arrLength/2)) {break;}
                ?>
                <div class="bouquet__column">
                    <div class="element top-element">
                        <img
                                class="preview_picture"
                                border="0"
                                src="<?= $arResult["ITEMS"][$key*2]["PREVIEW_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][$key*2]["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][$key*2]["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][$key*2]["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][$key*2]["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                        <img
                                class="hover-pic"
                                border="0"
                                src="<?= $arResult["ITEMS"][$key*2]["DETAIL_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][$key*2]["DETAIL_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][$key*2]["DETAIL_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][$key*2]["DETAIL_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][$key*2]["DETAIL_PICTURE"]["TITLE"] ?>"
                        />
                        <p class="product-name"><?php echo $arResult["ITEMS"][$key*2]["NAME"]; ?></p>
                    </div>
                    <div class="element bottom-element">
                        <img
                                class="preview_picture"
                                border="0"
                                src="<?= $arResult["ITEMS"][($key*2)+1]["PREVIEW_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][($key*2)+1]["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][($key*2)+1]["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][($key*2)+1]["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][($key*2)+1]["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                        <img
                                class="hover-pic"
                                border="0"
                                src="<?= $arResult["ITEMS"][($key*2)+1]["DETAIL_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][($key*2)+1]["DETAIL_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][($key*2)+1]["DETAIL_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][($key*2)+1]["DETAIL_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][($key*2)+1]["DETAIL_PICTURE"]["TITLE"] ?>"
                        />
                        <p class="product-name"><?php echo $arResult["ITEMS"][($key*2)+1]["NAME"]; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <input type="button" class="button" value="Смотреть ещё" onclick="Collap(1)">
    </div>
</div>
</div>

