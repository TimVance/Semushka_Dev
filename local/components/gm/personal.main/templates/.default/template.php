<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?
/**
 * @var $arResult
 * @var $APPLICATION
 */

use Bitrix\Main\Context;
$request = Context::getCurrent()->getRequest();

?>

<div class="personal-page">
    <div class="flexBetween">
        <div class="personal-page__left">
            <div class="personal-page__item">
                <div class="title">Контактные данные <a class="edit" href="<?=$APPLICATION->GetCurPageParam("edit_info=Y", array("edit_info"))?>">Изменить</a></div>
                <div class="info">
                    <? if ($request->get("edit_info") == "Y"): ?>
                        <form method="post" action="/personal/">
                            <input type="hidden" name="action" value="edit">
                            <div class="uk-margin">
                                <label class="uk-form-label">Фамилия</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" name="LAST_NAME" value="<?=$arResult["user"]["last_name"]?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">Имя</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" name="NAME" value="<?=$arResult["user"]["name"]?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">Захарович</label>
                                <div class="uk-form-controls">
                                    <input type="text" class="uk-input" name="SECOND_NAME" value="<?=$arResult["user"]["second_name"]?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">Номер телефона</label>
                                <div class="uk-form-controls">
                                    <input required type="text" class="uk-input" name="PERSONAL_PHONE" value="<?=$arResult["user"]["phone"]?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">E-mail</label>
                                <div class="uk-form-controls">
                                    <input type="email" class="uk-input" name="EMAIL" required value="<?=$arResult["user"]["email"]?>">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <input type="submit" class="btn" value="Сохранить">
                            </div>
                        </form>
                    <? else: ?>
                            <div><?=$arResult["user"]["fio"]?></div>
                            <div><?=$arResult["user"]["phone"]?></div>
                            <div><?=$arResult["user"]["email"]?></div>
                    <? endif; ?>
                </div>
            </div>
        </div>
        <div class="personal-page__right">
            <div class="personal-page__item">
                <div class="title order-title">
                    <span <? if ($request->get("filter_history") == "Y") echo 'class="active"'; ?>>
                        <? if ($request->get("filter_history") == "Y") echo '<a href="'.$APPLICATION->GetCurPageParam("", array("filter_history")).'">'; ?>
                            Текущие заказы
                        <? if ($request->get("filter_history") == "Y") echo '</a>'; ?>
                    </span>
                    <span <? if ($request->get("filter_history") != "Y") echo 'class="active"'; ?>>
                        <? if ($request->get("filter_history") != "Y") echo '<a href="'.$APPLICATION->GetCurPageParam("filter_history=Y", array("filter_history")).'">'; ?>
                            История заказов
                        <? if ($request->get("filter_history") != "Y") echo '</a>'; ?>
                    </span>
                </div>
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