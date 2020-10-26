<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?><?$APPLICATION->IncludeComponent(
	"gm:personal.main",
	"",
	array(),
	false
);?><br>
	<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>