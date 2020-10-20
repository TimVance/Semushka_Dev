<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<header class="header" uk-sticky>
    <div class="header--desktop uk-visible@m">
        <div class="uk-container">
            <div class="logo">
                <? if ($APPLICATION->GetCurPage(false) !== "/") echo '<a href="/">'; ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/semushka/include/parts/logo.php"
                        )
                    );?>
                <? if ($APPLICATION->GetCurPage(false) !== "/") echo '</a>'; ?>
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
                    <? if ($APPLICATION->GetCurPage(false) !== "/") echo '<a href="/">'; ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/semushka/include/parts/logo.php"
                        )
                    );?>
                    <? if ($APPLICATION->GetCurPage(false) !== "/") echo '</a>'; ?>
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
                <form action="/catalog/" class="form form--mobile mobile-search-form">
                    <div class="uk-margin">
                        <div class="uk-inline form__item form__item--search">
                            <input class="uk-form-icon uk-form-icon-flip form__icon" type="submit" value="">
                            <input class="uk-input form__input" type="text" placeholder="Поиск" name="q">
                        </div>
                    </div>
                </form>
                <nav class="mobile-nav">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header_mobile",
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

            <section class="uk-margin">
                <div class="uk-container">
    <? endif; ?>
<? endif; ?>