<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<?

function getUser() {
    global $USER;
    $rsUser = CUser::GetByID($USER->GetID());
    $arUser = $rsUser->Fetch();
    return [
        "fio" => $arUser["LAST_NAME"].' '.$arUser["NAME"].' '.$arUser["SECOND_NAME"],
        "phone" => $arUser["PERSONAL_PHONE"],
        "email" => $arUser["EMAIL"]
    ];
}

$arResult["user"] = getUser();

$this->includeComponentTemplate();

?>
