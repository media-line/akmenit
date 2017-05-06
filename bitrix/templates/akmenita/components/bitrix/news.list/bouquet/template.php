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
            <?php
            $arrLength = count($arResult["ITEMS"]);

            foreach ($arResult["ITEMS"] as $key => $arItem) {
                $n = 0;
                ?>
                <div class="bouquet__column">
                    <div class="element top-element">
                        <img
                                class="preview_picture"
                                border="0"
                                src="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                        <p class="product-name">
                            <?php echo $arResult["ITEMS"][$key + $n]["NAME"]; ?>
                        </p>
                    </div>
                    <?php
                    $n = $n + 1;
                    ?>
                    <div class="element bottom-element">
                        <img
                                class="preview_picture"
                                border="0"
                                src="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["SRC"] ?>"
                                width="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["WIDTH"] ?>"
                                height="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                                alt="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arResult["ITEMS"][$key + $n]["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                        <p class="product-name">
                            <?php echo $arResult["ITEMS"][$key + $n]["NAME"];
                            if ($key == 10) {return;}
                            ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
        </div>
        <input type="button" class="button" value="Смотреть ещё" onclick="Collap(1)">
    </div>
</div>