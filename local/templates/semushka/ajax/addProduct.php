<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
define("STOP_STATISTICS", true);

/**
 * @global $APPLICATION
 */


$APPLICATION->RestartBuffer();

use \Bitrix\Main\Context;
use \Bitrix\Sale;
use \Bitrix\Currency\CurrencyManager;


$request = Context::getCurrent()->getRequest();
$data = get_object_vars(json_decode($request["data"]));

$result = [];
if (!empty($data["product_id"])) {

    Bitrix\Main\Loader::includeModule("sale");
    Bitrix\Main\Loader::includeModule("catalog");

    $productId = intval($data["product_id"]);
    $quantity = intval($data["quantity"]);
    $basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Context::getCurrent()->getSite());
    if ($item = $basket->getExistsItem('catalog', $productId)) {
        $item->setField('QUANTITY', $item->getQuantity() + $quantity);
        $result['count'] = $item->getQuantity();
    }
    else {
        $item = $basket->createItem('catalog', $productId);
        $item->setFields(array(
            'QUANTITY' => $quantity,
            'CURRENCY' => CurrencyManager::getBaseCurrency(),
            'LID' => Context::getCurrent()->getSite(),
            'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
        ));
        $result['count'] = $quantity;
    }
    $basket->save();
}

echo json_encode($result);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>