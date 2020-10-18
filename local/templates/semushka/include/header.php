<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<header class="header" uk-sticky>
    <div class="header--desktop uk-visible@m">
        <div class="uk-container">
            <div class="logo">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип: Семушка - back to nature" title="Логотип: Семушка - back to nature"></a>
            </div>
            <nav class="top-nav">
                <div class="top-nav__row">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "header_catalog",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "4",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "header",
                            "USE_EXT" => "Y",
                            "COMPONENT_TEMPLATE" => "header"
                        ),
                        false, Array('HIDE_ICONS' => 'Y')
                    );?>
                    <div class="top-nav__services services-list">
                        <div class="services-list__item">
                            <button uk-toggle="target: #header-search" class="services-list__icon services-list__icon--search" type="button"></button>
                            <div id="header-search" class="header-search" uk-offcanvas="overlay: true">
                                <div class="uk-offcanvas-bar">
                                    <div class="uk-container uk-position-relative">
                                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                                        <form action="/catalog/" class="form form--header-search">
                                            <div class="form__item">
                                                <input value="<?=$request->get("q");?>" name="q" class="uk-input form__input" type="text" placeholder="Поиск">
                                                <button class="btn form__btn">Найти</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-list__item">
                            <button uk-toggle="target: #receiver-modal" type="button" class="services-list__icon services-list__icon--receiver"></button>

                        </div>
                        <div class="services-list__item">
                            <? if ($USER->IsAuthorized()): ?>
                                <a class="services-list__icon services-list__icon--user" href="/personal/"></a>
                            <? else: ?>
                                <button uk-toggle="target: #user-modal" type="button" class="services-list__icon services-list__icon--user"></button>
                            <? endif; ?>
                        </div>
                        <div class="services-list__item" id="desktop-cart-wrapper">
                        <?$APPLICATION->IncludeComponent(
                            "gm:sale.basket.basket.line",
                            "main",
                            Array(
                                "HIDE_ON_BASKET_PAGES" => "N",
                                "PATH_TO_AUTHORIZE" => "",
                                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                "PATH_TO_REGISTER" => SITE_DIR."login/",
                                "POSITION_FIXED" => "N",
                                "SHOW_AUTHOR" => "N",
                                "SHOW_DELAY" => "N",
                                "SHOW_EMPTY_VALUES" => "Y",
                                "SHOW_IMAGE" => "Y",
                                "SHOW_NOTAVAIL" => "N",
                                "SHOW_NUM_PRODUCTS" => "Y",
                                "SHOW_PERSONAL_LINK" => "N",
                                "SHOW_PRICE" => "Y",
                                "SHOW_PRODUCTS" => "Y",
                                "SHOW_REGISTRATION" => "N",
                                "SHOW_SUMMARY" => "Y",
                                "SHOW_TOTAL_PRICE" => "N"
                            )
                        );?>
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
                        <button uk-toggle="target: .basket-mobile" class="services-list__icon services-list__icon--cart"></button>
                        <span class="uk-badge">1</span>
                        <div class="basket basket-mobile" uk-dropdown="mode: click">
                            <div class="basket__dropdown">
                                <div class="basket__container">
                                    <div class="basket__body">
                                        <div class="basket__list">
                                            <div class="basket__item">
                                                <div class="basket-card">
                                                    <div class="basket-card__image">
                                                        <div class="basket-card__img">
                                                            <img src="./src/images/card-test.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__body">
                                                        <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                                        <div class="basket-card__footer">
                                                            <div class="basket-card__info">
                                                                <div class="basket-card__price">2000 Р</div>
                                                                <div class="basket-card__discount">3000 Р</div>
                                                                <div class="basket-card__count"></div>
                                                                <div class="basket-card__total">8000 Р</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__delete"><span uk-icon="close"></span></div>
                                                </div>
                                            </div>
                                            <div class="basket__item">
                                                <div class="basket-card">
                                                    <div class="basket-card__image">
                                                        <div class="basket-card__img">
                                                            <img src="./src/images/card-test.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__body">
                                                        <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                                        <div class="basket-card__footer">
                                                            <div class="basket-card__info">
                                                                <div class="basket-card__price">2000 Р</div>
                                                                <div class="basket-card__discount">3000 Р</div>
                                                                <div class="basket-card__count"></div>
                                                                <div class="basket-card__total">8000 Р</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__delete"><span uk-icon="close"></span></div>
                                                </div>
                                            </div>
                                            <div class="basket__item">
                                                <div class="basket-card">
                                                    <div class="basket-card__image">
                                                        <div class="basket-card__img">
                                                            <img src="./src/images/card-test.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__body">
                                                        <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                                        <div class="basket-card__footer">
                                                            <div class="basket-card__info">
                                                                <div class="basket-card__price">2000 Р</div>
                                                                <div class="basket-card__discount">3000 Р</div>
                                                                <div class="basket-card__count"></div>
                                                                <div class="basket-card__total">8000 Р</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="basket-card__delete"><span uk-icon="close"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="basket__footer">
                                        <div class="basket__price">
                                            <div class="basket__price-total">
                                                <span>Итого</span> 23456789 Р
                                            </div>
                                            <div class="basket__price-discount">3000 Р</div>
                                        </div>
                                        <div class="basket__tools">
                                            <div class="basket__delete">
                                                <button class="btn btn--link">
                                                    <span uk-icon="close"></span>
                                                    <span>очистить корзину</span>
                                                </button>
                                            </div>
                                            <div class="basket__add">
                                                <button class="btn">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <? if (strpos($APPLICATION->GetCurPage(false), "/catalog/") !== false): ?>
        <? if ($APPLICATION->GetCurPage() !== "/catalog/index.php") $detail_page = true; ?>
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