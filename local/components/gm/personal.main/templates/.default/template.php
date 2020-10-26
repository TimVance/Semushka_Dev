<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?
/**
 * @var $arResult
 * @var $APPLICATION
 */
?>

<div class="personal-page">
    <div class="flexBetween">
        <div class="personal-page__left">
            <div class="personal-page__item">
                <div class="title">Контактные данные <a href="#">Изменить</a></div>
                <div class="info">
                    <? foreach ($arResult["user"] as $param): ?>
                        <div><?=$param?></div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="personal-page__item">
                <div class="title">Компания</div>
            </div>
        </div>
        <div class="personal-page__right">
            <div class="personal-page__item">
                <div class="title">Текущие заказы</div>
                <div class="info">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order", 
	"personal",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"DETAIL_HIDE_USER_INFO" => array(
			0 => "0",
		),
		"DISALLOW_CANCEL" => "N",
		"HISTORIC_STATUSES" => array(
			0 => "F",
		),
		"NAV_TEMPLATE" => "",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"ORDER_DEFAULT_SORT" => "STATUS",
		"PATH_TO_BASKET" => "/personal/cart",
		"PATH_TO_CATALOG" => "/catalog/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"REFRESH_PRICES" => "N",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"SAVE_IN_SESSION" => "N",
		"SEF_MODE" => "N",
		"SET_TITLE" => "N",
		"STATUS_COLOR_F" => "gray",
		"STATUS_COLOR_N" => "green",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "red",
		"COMPONENT_TEMPLATE" => ".default",
		"PROP_1" => array(
		),
		"PROP_2" => array(
		)
	),
	false
);?>
                </div>
            </div>
        </div>
    </div>
</div>

<? print_r($arResult); ?>