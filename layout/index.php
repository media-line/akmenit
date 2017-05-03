<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Голая верстка</title>

    <script src="/layout/index.js" type="text/javascript"></script>
    <link href="/layout/style.css" rel="stylesheet">
    <link href="/layout/responsive.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <!-- scroll page -->
    <script src="/bitrix/templates/akmenita/js/jquery.scrollify.js" type="text/javascript"></script>
    <script>
        $(function () {
            $.scrollify({
                section: ".example-classname",
            });
        });
    </script>

</head>
<body>
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
                    <p class="description">В наличии разнообразный ассортимент - подберем именно то, что вам
                        нужно</p>
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
    <div class="example-classname"></div>
    <div class="wrapper_narrow">
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
<div class="bouquet">
    <div class="example-classname"></div>
    <div class="title_big title_big_boquet">
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
    <div class="example-classname"></div>
    <div class="title_big title_big_boquet">
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
    <div class="example-classname"></div>
    <div class="title_big title_big_boquet">
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
<footer>
    <div class="example-classname"></div>
    <div class="wrapper footer-wrapper">
        <div class="left-block">
            <div class="title_big title_big_w">
                Наши контакты
            </div>
            <div class="foot-italic">
                Приезжайте! Мы предложим большой выбор цветов и букетов
            </div>
            <div class="metro">Московская</div>
            <div class="adress">пр-т Независимости, 145</div>
            <div class="foot-italic">Звоните! Мы ответим на ваши вопросы</div>
            <div class="top-phone">
                <a class="top-phone__top" href="tel:+375292693999">+375 (29) 269-39-99</a>
            </div>
        </div>
        <div class="form-picking right-block wrapper_narrow">
            <p class="form-picking_title">Поможем подобрать букет к любому событию</p>
            <div class="form-picking__inputs">
                <input class="form-picking__inputs_input" type="text" placeholder="Ваше имя" required name="name">
                <input class="form-picking__inputs_input" type="tel" placeholder="Ваш телефон" required name="phone">
                <input class="form-picking__inputs_input" type="text" placeholder="Кому дарите?" required name="target">
                <input class="form-picking__inputs_input" type="number" placeholder="Ваш бюджет" required name="money">
            </div>
            <input class="button" type="button" value="Подобрать букет">
        </div>
    </div>
    <div class="wrapper bottom-footer">
        <div>&#169; 2017, Акменита</div>
        <div>Разработка сайта<a href="http://www.medialine.by" target="_blank" class="copiright"><img
                        src="/image/copiright.png"/></a></div>
    </div>
</footer>
</body>
</html>