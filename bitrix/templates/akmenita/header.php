<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
    <? $APPLICATION->ShowHead(); ?>
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
        <div class="wrapper">
            <header>
                <div class="top-phone">
                    <a class="top-phone__top" href="tel:+375292693999">+375 (29) 269-39-99</a>
                    <p class="top-phone__bottom">Перезвонить вам?</p>
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
    <div class="form-picking wrapper_narrow">
        <p class="form-picking_title">Поможем подобрать букет к любому событию</p>
        <div class="form-picking__inputs">
            <input class="form-picking__inputs_input" type="text" placeholder="Ваше имя" required name="name">
            <input class="form-picking__inputs_input" type="tel" placeholder="Ваш телефон" required name="phone">
            <input class="form-picking__inputs_input" type="text" placeholder="Кому дарите?" required name="target">
            <input class="form-picking__inputs_input" type="number" placeholder="Ваш бюджет" required name="money">
        </div>
        <input class="button" type="button" value="Подобрать букет">
    </div>
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
        <input class="button" value="Загрузи свой букет"/>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "DETAIL_PICTURE",
			2 => "",
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
		"COMPONENT_TEMPLATE" => "bouquet",
		"FILE_404" => ""
	),
	false
);?>

<div class="bouquet">
    <div class="title_big title_big_boquet">
        <div class="example-classname"></div>
        Букеты из роз
    </div>
    <div class="desc_ltl">
        Доставим сегодня
    </div>
    <div class="main-bouquet-wrap">
        <div class="bouquet-wrap">
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 1</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 2</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 3</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 4</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 5</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 6</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 7</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 8</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 9</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 10</p>
                </div>
            </div>
        </div>
        <input type="button" class="button" value="Смотреть ещё" onclick="Collap(0)">
    </div>
</div>
<div class="bouquet">
    <div class="title_big title_big_boquet">
        <div class="example-classname"></div>
        Миксовые букеты
    </div>
    <div class="desc_ltl">
        сделаем к нужному дню
    </div>
    <div class="main-bouquet-wrap">
        <div class="bouquet-wrap">
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 1</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 2</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 3</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 4</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 5</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 6</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 7</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 8</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 9</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 10</p>
                </div>
            </div>
        </div>
        <input type="button" class="button" value="Смотреть ещё" onclick="Collap(1)">
    </div>
</div>
<div class="bouquet">
    <div class="title_big title_big_boquet">
        <div class="example-classname"></div>
        Цветы в коробке
    </div>
    <div class="desc_ltl">
        подберем все со вкусом
    </div>
    <div class="main-bouquet-wrap">
        <div class="bouquet-wrap">
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 1</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 2</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 3</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 4</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 5</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 6</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 7</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 8</p>
                </div>
            </div>
            <div class="bouquet__column">
                <div class="element top-element">
                    <p class="product-name">Букет 9</p>
                </div>
                <div class="element bottom-element">
                    <p class="product-name">Букет 10</p>
                </div>
            </div>
        </div>
        <input type="button" class="button" value="Смотреть ещё" onclick="Collap(2)">
    </div>
</div>
