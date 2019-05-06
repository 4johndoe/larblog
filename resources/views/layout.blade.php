<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <title>Аналитика Форекс от Gerchik & Co</title>
    <meta property="og:image" content="https://tstpr24.gerchikco.com/img/preview.png?v=1.3">

    <meta name="description"
          content="Ежедневная аналитика рынка Форекс онлайн от Gerchik & Co: свежие новости, анализ и прогнозы форекс на сегодня, завтра и каждый день!">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">

    <link rel="icon" href="https://next.gerchikco.com/images/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="https://next.gerchikco.com/css/app.css">
</head>
<body>

<div class="wrapper" id="application">
    <div class="header">
        <div class="header__center content--center">
            <a href="/" class="logo">
                <img src="https://next.gerchikco.com/images/logo.svg" alt="Gerchik & Co">
            </a>
            <ul class="nav-main header__nav">
                <li>
                    <a href="#" class="in-click"><b>Трейдеру</b> <i>></i></a>
                    <ul>
                        <li class="ul-un-menu__title"><b>Трейдеру</b></li>
                        <li><a href='/withdraw'>Ввод и вывод средств</a></li>
                        <li><a href='/accountTypes'>Типы счетов</a></li>
                        <li><a href='/conditions'>Торговые условия</a></li>
                        <li><a href='/contrspecification'>Спецификация контрактов</a></li>
                        <li><a href='/bargtools'>Торговые инструменты</a></li>
                        <li><a href='/tradeplatforms'>Торговые платформы</a></li>
                        <li><a href='/algotraiding'>Алготрейдинг</a></li>
                        <li><a href='/demoaccount'>Демо-счёт</a></li>
                        <li><a href='/contests'>Конкурсы</a></li>
                        <li><a href='/analytics/fundamental'>Аналитика</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sh-click"><b>Инвестору</b> <i>></i></a>
                    <ul>
                        <li class="ul-un-menu__title"><b>Инвестору</b></li>
                        <li><a href='/trustmanagement'>Доверительное управление</a></li>
                        <li><a href='/timaaccount'>Рейтинг TIMA-счетов</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sv-click"><b>Партнёрам</b> <i>></i></a>
                    <ul>
                        <li class="ul-un-menu__title"><b>Партнёрам</b></li>
                        <li><a href='/partners'>Веб-партнерство</a></li>
                        <li><a href='/whiteLabel'>White Lable</a></li>
                        <li><a href='/program'>Агентская программа</a></li>
                        <li><a href='/turnkeybroker'>Брокер под ключ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sv-click"><b>Сервисы</b> <i>></i></a>
                    <ul>
                        <li class="ul-un-menu__title"><b>Сервисы</b></li>
                        <li><a href='/riskmanager'>Риск-менеджер</a></li>
                        <li><a href='/indicatorrmv'>Real Market Volume</a></li>
                        <li><a href='/calculator'>Калькулятор трейдера</a></li>
                        <li><a href='/constralgorithm'>Конструктор алгоритма</a></li>
                        <li><a href='/traderstatistics'>Статистика трейдера</a></li>
                        <!--
                            <li><a href='/#vps-forex'>VPS Forex</a></li>
                            <li><a href='/#fix-api'>Fix Api</a></li>
                            -->
                        <li><a href='/webinar/gerchik'>Вебинары</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sv-click"><b>О компании</b> <i>></i></a>
                    <ul>
                        <li class="ul-un-menu__title"><b>О компании</b></li>
                        <li><a href='/team'>Наша команда</a></li>
                        <li><a href='/legalInformation'>Юридическая информация</a></li>
                        <li><a href='/feedback'>Отзывы о Gerchik &amp; Co</a></li>
                        <li><a href='/news'>Новости компании</a></li>
                        <li><a href='/faq'>FAQ</a></li>
                        <li><a href='/contacts'>Контакты</a></li>
                    </ul>
                </li>
                <li>
                    <a href='/blog/articles' class="sv-click"><b>Блог</b></a>
                </li>
                @if(Auth::check())
                    <li><a href="/profile">Профиль</a></li>
                    <li><a href="/logout">Выход</a></li>
                @else
                    <li><a href="/login">Вход</a></li>
                    <li><a href="/register">Регистрация</a></li>
                @endif
            </ul>


            <div class="button btn--search">
                <span class="oi oi-magnifying-glass"></span>
            </div>

            <div class="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="slide-menu">
                <ul>
                    <li>
                        <a href="#" class="sm-click"><span>Трейдеру</span><i>></i></a>
                        <ul>
                            <li><a href='/withdraw'>Ввод и вывод средств</a></li>
                            <li><a href='/accountTypes'>Типы счетов</a></li>
                            <li><a href='/conditions'>Торговые условия</a></li>
                            <li><a href='/contrspecification'>Спецификация контрактов</a></li>
                            <li><a href='/bargtools'>Торговые инструменты</a></li>
                            <li><a href='/tradeplatforms'>Торговые платформы</a></li>
                            <li><a href='/algotraiding'>Алготрейдинг</a></li>
                            <li><a href='/demoaccount'>Демо-счёт</a></li>
                            <li><a href='/contests'>Конкурсы</a></li>
                            <li><a href='/analytics/fundamental'>Аналитика</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sm-click"><span>Инвестору</span><i>></i></a>
                        <ul>
                            <li><a href='/trustmanagement'>Доверительное управление</a></li>
                            <li><a href='/timaaccount'>Рейтинг TIMA-счетов</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sm-click"><span>Партнёрам</span><i>></i></a>
                        <ul>
                            <li><a href='/partners'>Веб-партнерство</a></li>
                            <li><a href='/whiteLabel'>White Lable</a></li>
                            <li><a href='/program'>Агентская программа</a></li>
                            <li><a href='/turnkeybroker'>Брокер под ключ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sm-click"><span>Сервисы</span><i>></i></a>
                        <ul>
                            <li><a href='/riskmanager'>Риск-менеджер</a></li>
                            <li><a href='/indicatorrmv'>Real Market Volume</a></li>
                            <li><a href='/calculator'>Калькулятор трейдера</a></li>
                            <li><a href='/constralgorithm'>Конструктор алгоритма</a></li>
                            <li><a href='/traderstatistics'>Статистика трейдера</a></li>
                            <!--
                                <li><a href='/#vps-forex'>VPS Forex</a></li>
                                <li><a href='/#fix-api'>Fix Api</a></li>
                                -->
                            <li><a href='/webinar/gerchik'>Вебинары</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sm-click"><span>О компании</span><i>></i></a>
                        <ul>
                            <li><a href='/team'>Наша команда</a></li>
                            <li><a href='/legalInformation'>Юридическая информация</a></li>
                            <li><a href='/feedback'>Отзывы о Gerchik &amp; Co</a></li>
                            <li><a href='/news'>Новости компании</a></li>
                            <li><a href='/faq'>FAQ</a></li>
                            <li><a href='/contacts'>Контакты</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href='/blog/articles' class="sm-click">Блог</a>
                    </li>
                </ul>

                <div class="slide-menu__links">
                    <a href="https://next.gerchikco.com/lang/ru" class="ru-lang">RU</a>
                    <span class="separate"></span>
                    <a href="https://next.gerchikco.com/lang/en" class="en-lang">EN</a>
                    <!--
                        <span class="separate"></span>
                        <a href="https://next.gerchikco.com/lang/es" class="es-lang">ES</a>
                        -->
                </div>
            </div>
        </div>

        <div class="search">
            <div class="search__center content--center">
                <form method="post">
                    <div class="label label--search">
                        <input type="text" placeholder="Поиск...">
                    </div>

                    <div class="label">
                        <button>
                            <span class="oi oi-magnifying-glass"></span>
                        </button>
                    </div>
                </form>

                <div class="search-close">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>



    <div class="content-in">
        <div class="crumbs">
            <div class="crumbs__center content--center">
                <ul class="crumbs-structure">
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li><a href="#">Трейдеру</a></li>
                    <li>/</li>
                    <li><a href="#">Ввод и вывод средств</a></li>
                </ul>

                <div class="lang header__lang">
                    <span class="lang__link"><b>RU</b> <i>></i></span>
                    <div class="lang-show">
                        <a href="https://next.gerchikco.com/lang/ru" class="lang-show__link ru-lang">RU</a>
                        <a href="https://next.gerchikco.com/lang/en" class="lang-show__link en-lang">EN</a>
                        <!--
                        <a href="https://next.gerchikco.com/lang/es" class="lang-show__link en-lang">ES</a>
                        -->
                    </div>
                </div>

                <ul class="crumbs-links">
                    <li><a href="http://po.gerchikco.com/" class="button button--white" target="_blank">Личный кабинет</a></li>
                    <li><a href="https://po.gerchikco.com/site/signup-individual" class="button button--blue" target="_blank">Открыть счёт</a></li>
                </ul>
            </div>
        </div>

    <!-- Content (start) -->

        @yield('content')


        <!-- Content (end) -->

        <span class="scroll-to-top"></span>

    </div>

    <div class="footer">
        <div class="footer__center content--center">
            <div class="footer-text footer-text-first">
                <div class="footer-text__block">
                    ЛИЦЕНЗИРОВАННЫЕ БРОКЕРСКИЕ КОМПАНИИ <br>Gerchik & CO Limited <br>Адрес: AJC, Govant Building, Kulum Highway, Port Vila,<br><br> Vanuatu <br>MAIL: support@gerchikco.com
                </div>
                <div class="footer-text__block">
                    БЕСПЛАТНЫЕ ТЕЛЕФОННЫЕ ЛИНИИ: <br>Украина — 0 800 210 216 <br>Россия — 8 800 333 27 54 <br>Казахстан — +77-273-50-59-77* <br>Viber — +883510001243216**
                    <i>
                        *стоимость звонка согласно тарифов вашего оператора <br>**бесплатно с Viber
                    </i>
                </div>
            </div>
            <div class="footer-text footer-text-second">
                <div class="footer-text__block">
                    ПРЕДУПРЕЖДЕНИЕ О РИСКАХ <br>Компания Gerchik & Co предупреждает: проведение торговых операций на <br>финансовых рынках с маржинальными финансовыми инструментами имеет <br>высокий уровень риска и может привести к получению убытков и потере <br>инвестиционных средств. Начиная торговлю,убедитесь, что вы в полной <br>мере осознаете все риски, а также обладаете соответствующими знаниями <br>и опытом для торговли на форекс.<br><br>УСЛОВИЯ ПЕРЕПЕЧАТКИ МАТЕРИАЛОВБЮ<br> При полном или частичном использовании информации и материалов данного сайта, указание источника информации (ссылка на сайт gerchikco.com) является обязательным.
                </div>
                <div class="footer-text__block">
                    <div class="footer-image">
                        <img src="https://next.gerchikco.com/images/footer-image.png" alt="">
                    </div>

                    Компания Gerchik & Co LTD сертифицирована через сервис Verify My Trade и предоставляет ежемесячно 5000 сделок для сравнения со всеми базисными показателями других брокеров и поставщиков ликвидности. Результаты аудита доступны по ссылке. <br><br>Провайдер финансовых услуг J.B. Finance LLP 27 Old Gloucester Street, London, United Kingdom, WC1N 3AX Gerchik & Co Copyright © 2015-2019
                </div>
            </div>

            <ul class="social">
                <li><a href="https://www.facebook.com/gerchikco/?ref=bookmarks" target="_blank"><img src="https://next.gerchikco.com/images/social/facebook.svg" alt=""></a></li>
                <li><a href="https://www.instagram.com/gerchikco/" target="_blank"><img src="https://next.gerchikco.com/images/social/instagram.svg" alt=""></a></li>
                <li><a href="https://www.youtube.com/channel/UCh8-SAbji1gKC1g55O4IcBA" target="_blank"><img src="https://next.gerchikco.com/images/social/youtube.svg" alt=""></a></li>
                <li><a href="https://t.me/gerchikco_info" target="_blank"><img src="https://next.gerchikco.com/images/social/telegram.svg" alt=""></a></li>
                <li><a href="https://vk.com/gerchikcogroup" target="_blank"><img src="https://next.gerchikco.com/images/social/vk.svg" alt=""></a></li>
                <li><a href="https://twitter.com/GerchikandCo" target="_blank"><img src="https://next.gerchikco.com/images/social/twitter.svg" alt=""></a></li>
            </ul>
        </div>

        <div class="hot-line">
            Горячая линия
        </div>
    </div>
</div>
<script src="https://next.gerchikco.com/js/app.js"></script>
</body>
</html>