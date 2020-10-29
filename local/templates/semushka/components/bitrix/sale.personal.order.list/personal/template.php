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

<div class="personal-order-list">
    <div class="personal-order-row">
        <div class="id">№</div>
        <div class="date">Дата</div>
        <div class="price">Сумма</div>
        <div class="repeat"></div>
    </div>
    <? foreach ($arResult["ORDERS"] as $order): ?>
        <div data-id="<?=$order["ORDER"]["ID"]?>" class="personal-order-row">
            <div class="id"><?=$order["ORDER"]["ID"]?></div>
            <div class="date"><?=$order["ORDER"]["DATE_INSERT_FORMATED"]?></div>
            <div class="price">
                <?=$order["ORDER"]["FORMATED_PRICE"]?>
                <? if (!empty(count($order["BASKET_ITEMS"]))) echo '<i></i>'; ?>
            </div>
            <div class="repeat"><a href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_COPY"])?>">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="redo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-redo fa-w-16 fa-2x"><path fill="currentColor" d="M500.33 0h-47.41a12 12 0 0 0-12 12.57l4 82.76A247.42 247.42 0 0 0 256 8C119.34 8 7.9 119.53 8 256.19 8.1 393.07 119.1 504 256 504a247.1 247.1 0 0 0 166.18-63.91 12 12 0 0 0 .48-17.43l-34-34a12 12 0 0 0-16.38-.55A176 176 0 1 1 402.1 157.8l-101.53-4.87a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12h200.33a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z" class=""></path></svg>
                </a></div>
            <div class="personal-order-basket-items">
                <div class="personal-order-basket-item">
                    <div class="personal-order-basket-item-id">ID</div>
                    <div class="personal-order-basket-item-name">Наименование</div>
                    <div class="personal-order-basket-item-count"></div>
                    <div class="personal-order-basket-item-price">Цена</div>
                </div>
                <? foreach ($order["BASKET_ITEMS"] as $item): ?>
                    <div class="personal-order-basket-item">
                        <div class="personal-order-basket-item-id"><?=$item["ID"];?></div>
                        <div class="personal-order-basket-item-name"><?=$item["NAME"];?></div>
                        <div class="personal-order-basket-item-count"><?=$item["QUANTITY"];?> <?=$item["MEASURE_NAME"]?></div>
                        <div class="personal-order-basket-item-price">
                            <? if (!empty($item["PRICE"])) echo number_format($item["PRICE"], 0, "", " "); ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    <? endforeach; ?>
</div>
