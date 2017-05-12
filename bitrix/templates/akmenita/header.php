<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
    <? $APPLICATION->ShowHead();
    include_once("/bitrix/templates/akmenita/php/index.php");
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
    </script>

    <script src="/layout/index.js" type="text/javascript"></script>
    <link href="/layout/style.css" rel="stylesheet">
    <link href="/layout/responsive.css" rel="stylesheet">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<? $APPLICATION->ShowPanel() ?>

<? if ($USER->IsAdmin()): ?>

<? endif ?>

<div class="example-classname"></div>

<div class="main-top-block">
    <div class="top-block">
        <div class="wrapper wrapper-top">
            <header>
                <div class="top-phone">
                    <a class="top-phone__top" href="tel:+375292693999">+375 (29) 269-39-99</a>
                    <p onclick="showPopup();" class="top-phone__bottom">Перезвонить вам?</p>
                </div>
            </header>
            <div class="wrapper_narrow center-column">
                <div class="title center-column">
                    <p class="title_first-row">Лучшая цена</p>
                    <p class="title_second-row">на розы из Эквадора и Колумбии</p>
                    <p class="gold-italic">от 2,5р за услугу</p>
                </div>
            </div>
        </div>
    </div>
    <form action="" class="form-picking wrapper_narrow form" method="post">
        <p class="form-picking_title">Поможем подобрать букет к любому событию</p>
        <div class="form-picking__inputs">
            <input class="form-picking__inputs_input" type="text" placeholder="Ваше имя" required name="name">
            <input class="form-picking__inputs_input" type="tel" placeholder="Ваш телефон" required name="phone">
            <input class="form-picking__inputs_input" type="text" placeholder="Кому дарите?" required name="target">
            <input class="form-picking__inputs_input" type="number" placeholder="Ваш бюджет" required name="money">
            <input type="hidden" name="check" value="choose">
        </div>
        <input class="button" type="submit" value="Подобрать букет">
    </form>
    <div class="bottom-block wrapper">
        <div class="example-classname"></div>
        <p class="title_big">Почему стоит заказать у нас?</p>
        <div class="advantages">
            <div class="advantages_row">
                <div class="advantage">
                    <img src="/layout/image/advantages/first-importer.png" alt="Первый импортер"/>
                    <p class="description">Первый импортер в РБ - цена без лишних надбавок</p>
                </div>
                <div class="advantage">
                    <img src="/layout/image/advantages/fresh-flowers.png" alt="Свежие цветы"/>
                    <p class="description">Всегда только свежие цветы</p>
                </div>
                <div class="advantage">
                    <img src="/layout/image/advantages/assortiment.png" alt="Разнообразный ассортимент"/>
                    <p class="description">В наличии разнообразный ассортимент - подберем именно то, что вам нужно</p>
                </div>
            </div>
            <div class="advantages_row">
                <div class="advantage">
                    <img src="/layout/image/advantages/programm-of-loyality.png" alt="Программа лояльности"/>
                    <p class="description">Программа лояльности - Вы захотите стать потенциальным клиентом</p>
                </div>
                <div class="advantage">
                    <img src="/layout/image/advantages/florists.png" alt="Опытные флористы"/>
                    <p class="description">Оформление букета опытными флористами</p>
                </div>
                <div class="advantage">
                    <img src="/layout/image/advantages/shipping.png" alt="Доставка"/>
                    <p class="description">Доставка по городу Минску и самовывоз</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="like-bouquet">
    <div class="wrapper_narrow">
        <div class="example-classname"></div>
        <div class="title_big title_big_w">
            Нравится букет?
        </div>
        <div class="first-line">
            прикрепи его фото и мы сделаем такой же
        </div>
        <div class="gold-italic">
            co скидкой!
        </div>
        <input onclick="showPopupDown()" class="button button_download" value="Загрузи свой букет"/>
    </div>
</div>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"bouquet",
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "bouquets",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "0",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Букеты",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "bouquet",
		"FILE_404" => ""
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"miksbouquet",
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "bouquets",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Букеты",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "miksbouquet",
		"FILE_404" => ""
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"boxbouquet",
	array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "bouquets",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Букеты",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "boxbouquet",
		"FILE_404" => ""
	),
	false
); ?>

<div class="popup popupform">
    <div class="popup_bg">
        <form action="" class="form-picking wrapper_narrow form" method="post">
            <p class="form-picking_title">Поможем подобрать букет к любому событию</p>
            <div class="form-picking__inputs">
                <input class="form-picking__inputs_input" type="text" placeholder="Ваше имя" required name="name">
                <input class="form-picking__inputs_input" type="tel" placeholder="Ваш телефон" required name="phone">
                <input class="form-picking__inputs_input" type="text" placeholder="Кому дарите?" required name="target">
                <input class="form-picking__inputs_input" type="number" placeholder="Ваш бюджет" required name="money">
                <input type="hidden" name="check" value="choose">
            </div>
            <input class="button" type="submit" value="Подобрать букет">
        </form>
    </div>
</div>

<div class="popup popupdownload">
    <div class="popup_bg">
        <form action="" enctype="multipart/form-data" class="form-picking wrapper_narrow form formdownload" method="post">
            <p class="form-picking_title">Прикрепите ваш букет</p>
            <div class="form-picking__inputs">
                <input class="form-picking__inputs_input" type="text" placeholder="Ваш e-mail" required name="email">
                <input class="form-picking__inputs_input" type="tel" placeholder="Ваш телефон" required name="phone">
                <textarea class="form-picking__inputs_input" placeholder="Ваш комментарий к букету" required name="comment"></textarea>
                <input type="hidden" name="check" value="download">
            </div>
            <div class="form-picking__buttons">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <div class="fileform">
                    <div id="fileformlabel"></div>
                    <div class="selectbutton"><span>+</span>Загрузить букет</div>
                    <input type="file" name="upload" id="upload" onchange="getName(this.value);" />
                </div>
                <input class="button" type="submit" value="Отправить мой букет">
            </div>
        </form>
    </div>
</div>

<?php
/*$form = new Form();
$form->name = $_POST["name"];
$form->phone = $_POST["phone"];
$form->target = $_POST["target"];
$form->money = $_POST["money"];
$form->file = $_POST["file"];
$form->email = $_POST["email"];
$form->comment = $_POST["comment"];

if ($_POST) {
    $form->SendMail();
}*/

if ($_POST["check"] == "choose") {
    $to = 'akravchenko@medialine.by';
    $subject = 'Форма обратной связи';

    $name = "ФИО - " . $_POST["name"] . "<br/>";
    $phone = "Телефон - " . $_POST["phone"] . "<br/>";
    $target = "Кому дарят - " . $_POST["target"] . "<br/>";
    $money = "Бюджет - " . $_POST["money"] . "<br/>";
    $message = $name . $phone . $target . $money;

    $headers = 'Content-Type: text/html';

    $mail = mail($to, $subject, $message, $headers);
    if ($mail) { ?>
        <div class="popup popup_message">
            <div class="popup_bg">
                <div class="popup_message_inside">
                    Ваше сообщение успешно отправлено
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="popup popup_message">
            <div class="popup_bg">
                <div class="popup_message_inside">
                    Ваше сообщение не удалось отправить.<br/>
                    Попробуйте ещё раз или свяжитесь с нами по телефону.
                </div>
            </div>
        </div>
    <?php }
} elseif ($_POST["check"] == "download") {
    $to = 'akravchenko@medialine.by';
    $subject = 'Форма обратной связи';

    $email = "E-mail - " . $_POST["email"] . "<br/>";
    $phone = "Телефон - " . $_POST["phone"] . "<br/>";
    $comment = "Комментарий - " . $_POST["comment"] . "<br/>";
    $file = "Букет - " . $_POST["file"] . "<br/>";
    $message = $email . $phone . $comment . $file;

    $headers = 'Content-Type: text/html';

    $mail = mail($to, $subject, $message, $headers);
    if ($mail) { ?>
        <div class="popup popup_message">
            <div class="popup_bg">
                <div class="popup_message_inside">
                    Ваше сообщение успешно отправлено
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="popup popup_message">
            <div class="popup_bg">
                <div class="popup_message_inside">
                    Ваше сообщение не удалось отправить.<br/>
                    Попробуйте ещё раз или свяжитесь с нами по телефону.
                </div>
            </div>
        </div>
    <?php }
}
?>
