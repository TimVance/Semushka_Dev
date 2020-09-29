<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<header class="header" uk-sticky>
    <div class="header--desktop uk-visible@m">
        <div class="uk-container">
            <div class="logo">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип: Семушка - back to nature" title="Логотип: Семушка - back to nature"></a>
            </div>
            <nav class="top-nav">
                <div class="top-nav__row">
                    <ul class="top-nav__list">
                        <li class="top-nav__item">
                            <a href="/catalog/" class="top-nav__link">
                                <span uk-icon="menu"></span>
                                <span class="top-nav__parent">Продукция</span>
                            </a>
                            <div class="top-nav__childs">
                                <div class="uk-container">
                                    <div class="main-nav">
                                        <ul class="main-nav__list main-nav__list--lvl1">
                                            <li class="main-nav__item main-nav__item--lvl1">
                                                <a href="#" class="main-nav__link">Орехи</a>
                                                <div class="main-nav__childs">
                                                    <div class="uk-container">
                                                        <ul class="main-nav__list main-nav__list--lvl2">
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Грецкий орех</a>
                                                            </li>
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Миндаль</a>
                                                            </li>
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Фундук</a>
                                                                <div class="main-nav__childs">
                                                                    <ul class="main-nav__list main-nav__list--lvl3">
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">Жареный</a>
                                                                        </li>
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">Бланшированный</a>
                                                                        </li>
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">В скорлупе</a>
                                                                        </li>
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">Дробленый</a>
                                                                        </li>
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">Сырой</a>
                                                                        </li>
                                                                        <li class="main-nav__item main-nav__item--lvl3">
                                                                            <a href="#" class="main-nav__link">Лепестки</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="main-nav__image uk-cover-container uk-height-medium">
                                                                        <img src="<?=SITE_TEMPLATE_PATH?>/images/menu-test.png" alt="" uk-cover>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Кешью</a>
                                                            </li>
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Ореховые смеси</a>
                                                            </li>
                                                            <li class="main-nav__item main-nav__item--lvl2">
                                                                <a href="#" class="main-nav__link">Другие</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="main-nav__item main-nav__item--lvl1">
                                                <a href="#" class="main-nav__link">Семена</a>
                                            </li>
                                            <li class="main-nav__item main-nav__item--lvl1">
                                                <a href="#" class="main-nav__link">Сухофрукты</a>
                                                <div class="main-nav__childs">
                                                    <ul class="main-nav__list main-nav__list--lvl2">
                                                        <li class="main-nav__item main-nav__item--lvl2"><a href="#" class="main-nav__link">Фруктики</a></li>
                                                        <li class="main-nav__item main-nav__item--lvl2"><a href="#" class="main-nav__link">Фруктики 2</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="main-nav__item main-nav__item--lvl1">
                                                <a href="#" class="main-nav__link">Цукаты</a>
                                            </li>
                                            <li class="main-nav__item main-nav__item--lvl1">
                                                <a href="#" class="main-nav__link">Для кондитеров</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-nav__item">
                            <a href="/news/" class="top-nav__link">
                                <span>Новости</span>
                            </a>
                        </li>
                        <li class="top-nav__item">
                            <a href="/about/" class="top-nav__link">
                                <span>О&nbsp;компании</span>
                            </a>
                        </li>
                        <li class="top-nav__item">
                            <div class="top-nav__link lang-selector">
                                <span class="lang-selector__text">RU</span>
                                <div uk-dropdown="pos: bottom-justify" class="lang-selector__dropdown">
                                    <ul class="uk-nav uk-dropdown-nav lang-selector__dropdown-nav">
                                        <li class="uk-active"><a href="#" class="top-nav__link">RU</a></li>
                                        <li><a href="#" class="top-nav__link">EN</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="top-nav__services services-list">
                        <div class="services-list__item">
                            <a href="#" class="services-list__icon services-list__icon--search"></a>
                        </div>
                        <div class="services-list__item">
                            <button uk-toggle="target: #receiver-modal" type="button" class="services-list__icon services-list__icon--receiver"></button>

                        </div>
                        <div class="services-list__item">
                            <button uk-toggle="target: #user-modal" type="button" class="services-list__icon services-list__icon--user"></button>

                        </div>
                        <div class="services-list__item">
                            <a href="#" class="services-list__icon services-list__icon--cart"></a>
                            <span class="uk-badge">1</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="header--mobile uk-hidden@m">
        <div class="uk-container">
            <div class="header__mobile">
                <div class="header__mobile-burger">
                    <button uk-toggle="target: #header-mobile" uk-navbar-toggle-icon type="button"></button>
                </div>
                <div class="header__mobile-logo logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип: Семушка - back to nature" title="Логотип: Семушка - back to nature">
                </div>
                <div class="header__mobile-link lang-selector">
                    <span class="lang-selector__text">RU</span>
                    <div uk-dropdown="pos: bottom-justify" class="lang-selector__dropdown">
                        <ul class="uk-nav uk-dropdown-nav lang-selector__dropdown-nav">
                            <li class="uk-active"><a href="#" class="top-nav__link">RU</a></li>
                            <li><a href="#" class="top-nav__link">EN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__mobile-services services-list">
                    <div class="services-list__item">
                        <button uk-toggle="target: #receiver-modal" type="button" class="services-list__icon services-list__icon--receiver"></button>
                    </div>
                    <div class="services-list__item">
                        <button uk-toggle="target: #user-modal" type="button" class="services-list__icon services-list__icon--user"></button>

                    </div>
                    <div class="services-list__item">
                        <a href="#" class="services-list__icon services-list__icon--cart"></a>
                        <span class="uk-badge">1</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-mobile" uk-offcanvas>
            <div class="uk-offcanvas-bar">
                <form action="" class="form form--mobile">
                    <div class="uk-margin">
                        <div class="uk-inline form__item form__item--search">
                            <a class="uk-form-icon uk-form-icon-flip form__icon" href="#" uk-icon="icon: search"></a>
                            <input class="uk-input form__input" type="text" placeholder="Поиск">
                        </div>
                    </div>
                </form>
                <nav class="mobile-nav">
                    <ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl1">
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="uk-accordion-title mobile-nav__title active" href="#">Орехи</a>
                            <div class="uk-accordion-content mobile-nav__body">
                                <ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl2">
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title active">Грецкий орех</a>
                                        <div class="uk-accordion-content mobile-nav__body">
                                            <ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl3">
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Жареный</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Бланшированный</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title active">В скорлупе</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Дробленый</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Сырой</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Лепестки</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Миндаль</a>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Фундук</a>
                                        <div class="uk-accordion-content mobile-nav__body">
                                            <ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl3">
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Жареный</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Бланшированный</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title active">В скорлупе</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Дробленый</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Сырой</a>
                                                </li>
                                                <li class="mobile-nav__item mobile-nav__item--lvl3">
                                                    <a href="#" class="mobile-nav__title">Лепестки</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Фисташки</a>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Кешью</a>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Ореховые смеси</a>
                                    </li>
                                    <li class="mobile-nav__item mobile-nav__item--lvl2">
                                        <a href="#" class="uk-accordion-title mobile-nav__title">Другие</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="uk-accordion-title mobile-nav__title" href="#">Семена</a>
                            <div class="uk-accordion-content mobile-nav__body">
                                123
                            </div>
                        </li>
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="uk-accordion-title mobile-nav__title" href="#">Сухофрукты</a>
                            <div class="uk-accordion-content mobile-nav__body">
                                234
                            </div>
                        </li>
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="uk-accordion-title mobile-nav__title" href="#">Цукаты</a>
                            <div class="uk-accordion-content mobile-nav__body">
                                345
                            </div>
                        </li>
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="uk-accordion-title mobile-nav__title" href="#">Для кондитеров</a>
                            <div class="uk-accordion-content mobile-nav__body">
                                456
                            </div>
                        </li>
                    </ul>
                    <ul class="mobile-nav__list mobile-nav__list--lvl1 uk-margin-medium">
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="mobile-nav__title" href="#">Новости</a>
                        </li>
                        <li class="mobile-nav__item mobile-nav__item--lvl1">
                            <a class="mobile-nav__title" href="#">О компании</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<?if ($APPLICATION->GetCurPage(false) !== "/" && ERROR_404 != "Y"): ?>
    <? $detail_page = false; ?>
    <? if (strpos($APPLICATION->GetCurPage(false), "/news/") !== false): ?>
        <? if ($APPLICATION->GetCurPage() !== "/news/index.php") $detail_page = true; ?>
    <? endif; ?>
    <? if (!$detail_page): ?>
    <div class="page-wrapper">
        <main class="content">
            <div class="page-title">
                <div class="uk-container">
                    <h1 class="uk-h2"><?$APPLICATION->ShowTitle(false);?></h1>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "breadcrumb",
                        Array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                        )
                    );?>
                </div>
            </div>

            <section class="uk-section uk-margin">
                <div class="uk-container">
    <? endif; ?>
<? endif; ?>