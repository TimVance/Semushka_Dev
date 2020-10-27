<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?

use Bitrix\Main\Context;

$request = Context::getCurrent()->getRequest();

if ($request["action"] == "edit") {
    $user   = new CUser;
    $fields = array(
        "LAST_NAME"      => $request["LAST_NAME"],
        "NAME"           => $request["NAME"],
        "SECOND_NAME"    => $request["SECOND_NAME"],
        "PERSONAL_PHONE" => $request["PERSONAL_PHONE"],
        "EMAIL"          => $request["EMAIL"],
    );
    $user->Update($user->GetId(), $fields);
    echo $user->LAST_ERROR;
}

function getUser()
{
    global $USER;
    $rsUser = CUser::GetByID($USER->GetID());
    $arUser = $rsUser->Fetch();
    return [
        "fio"         => $arUser["LAST_NAME"] . ' ' . $arUser["NAME"] . ' ' . $arUser["SECOND_NAME"],
        "last_name"   => $arUser["LAST_NAME"],
        "name"        => $arUser["NAME"],
        "second_name" => $arUser["SECOND_NAME"],
        "phone"       => $arUser["PERSONAL_PHONE"],
        "email"       => $arUser["EMAIL"]
    ];
}

$arResult["user"] = getUser();

$this->includeComponentTemplate();

?>
