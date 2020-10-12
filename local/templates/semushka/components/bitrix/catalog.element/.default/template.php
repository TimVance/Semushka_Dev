<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>

<div class="page-wrapper">
    <main class="content">

        <div class="page-title">
            <div class="uk-container">
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

        <div class="uk-container">
            <article class="product-detail">
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div class="product-detail__item">
                        <div
                            class="fotorama"
                            data-width="100%"
                            data-ratio="800/600"
                            data-allowfullscreen="native"
                            data-nav="thumbs"
                            data-fit="contain"
                            data-loop="true"
                            data-keyboard="true"
                        >
                            <img src="./src/images/slider-test.png" alt="">
                            <img src="./src/images/card-test.png" alt="">
                            <img src="./src/images/map-test.png" alt="">
                            <img src="./src/images/bg-test.png" alt="">
                        </div>
                    </div>
                    <div class="product-detail__item">
                        <div class="product-detail__header">
                            <h1 class="uk-h2"><?=$arResult["NAME"]?></h1>
                        </div>
                        <div class="product-detail__body">
                            <div class="product-detail__info">
                                <div class="product-detail__info-row">
                                    <div class="product-detail__info-title">Размер</div>
                                    <div class="product-detail__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                </div>
                                <div class="product-detail__info-row">
                                    <div class="product-detail__info-title">Срок хранения</div>
                                    <div class="product-detail__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                </div>
                                <div class="product-detail__info-row">
                                    <div class="product-detail__info-title">Страна</div>
                                    <div class="product-detail__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                </div>
                                <div class="product-detail__info-row">
                                    <div class="product-detail__info-title">Упаковка</div>
                                    <div class="product-detail__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                </div>
                                <div class="product-detail__info-row">
                                    <div class="product-detail__info-title">25 кг, мешок</div>
                                    <div class="product-detail__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail__price">1200 Р</div>
                        <div class="product-detail__footer">
                            <div class="product-detail__footer-item">
                                <form class="product-detail__tools">
                                    <label for="select" class="select product-detail__select">
                                        <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="select">
                                        <div class="select__list">
                                            <input class="select__toggle" type="radio" name="list" value="first_value" id="list[0]">
                                            <label class="select__label" for="list[0]">1кг</label>
                                            <input class="select__toggle" type="radio" name="list" value="second_value" id="list[1]">
                                            <label class="select__label" for="list[1]">2кг</label>
                                            <input class="select__toggle" type="radio" name="list" value="third_value" id="list[2]">
                                            <label class="select__label" for="list[2]">3кг</label>
                                            <span class="select__placeholder">Вес</span>
                                        </div>
                                    </label>
                                    <div class="product-detail__count">
                                        <div class="count-tools js-product-quantity">
                                            <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                            <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="quantity" />
                                            <a class="count-tools__arrow-plus js-product-quantity__arrow-plus"> + </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product-detail__footer-item">
                                <button class="btn" type="button"><span>Купить</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="uk-section">
                    <ul class="tabs" uk-tab>
                        <li><a href="#">О продукции</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Оплата</a></li>
                    </ul>

                    <ul class="uk-switcher uk-margin">
                        <li>
                            <div class="uk-column-1-2@m">
                                <p>На конгрессе INC в Ченнае озвучили прогноз мирового производства орехов: сезон 2017-2018 г. будет на 25% выше среднего за последние десять лет и достигнет 4.2 миллиона тонн. В сезоне 2017-2018 г. мировое производство сухофруктов (финики, курага, сладкая сушеная клюква, сушеный инжир, чернослив, изюм и сушеная смородина) достигнет 3 млн.т., что на 20% больше среднего за последние десять лет.</p>
                                <p>Ожидается, что производство сушеной клюквы превысит прошлогодние показатели на 10% и достигнет 200.3 тыс.т. Лидер мирового производства сушеной клюквы — США и 79%.</p>
                                <p>В Австралии идет постоянное обновление старых садов макадамии на новые прогрессивные сорта, с расширением плодоносящих площадей. В 2016 г. Южная </p>
                            </div>
                        </li>
                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                    </ul>
                </section>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "certificates",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "DETAIL_PICTURE",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "3",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "detail_similar_category",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BACKGROUND_IMAGE" => "-",
                        "BASKET_URL" => "/personal/basket.php",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPATIBLE_MODE" => "Y",
                        "CONVERT_CURRENCY" => "N",
                        "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                        "DETAIL_URL" => "",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_COMPARE" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_NAME" => "arrFilter",
                        "HIDE_NOT_AVAILABLE" => "Y",
                        "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "catalog",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "LINE_ELEMENT_COUNT" => "3",
                        "MESSAGE_404" => "",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "OFFERS_LIMIT" => "5",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "18",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array(
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "SECTION_CODE" => "",
                        "SECTION_ID" => "",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SEF_MODE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SHOW_ALL_WO_SECTION" => "Y",
                        "SHOW_PRICE_COUNT" => "1",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "detail_news",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("",""),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
            </article>
        </div>
    </main>
</div>
