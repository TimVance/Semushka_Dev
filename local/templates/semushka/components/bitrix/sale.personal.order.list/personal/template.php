<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @var $arResult
 */

use Bitrix\Main,
    Bitrix\Main\Localization\Loc,
    Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

?>

<pre style="display: none"><? print_r($arResult); ?> </pre>

<div class="personal-order-list">
    <div class="personal-order-row">
        <div class="id">Номер заказа</div>
        <div class="date">Дата</div>
        <div class="price">Сумма</div>
        <div class="repeat"></div>
    </div>
    <? foreach ($arResult["ORDERS"] as $order): ?>
        <div data-id="<?=$order["ORDER"]["ID"]?>" class="personal-order-row">
            <div class="id"><?=$order["ORDER"]["ID"]?></div>
            <div class="date"><?=$order["ORDER"]["DATE_INSERT_FORMATED"]?></div>
            <div class="price"><?=$order["ORDER"]["FORMATED_PRICE"]?></div>
            <div class="repeat"><a href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_COPY"])?>">повторить</a></div>
        </div>
    <? endforeach; ?>
</div>
