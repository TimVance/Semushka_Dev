<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="top-nav__list">

<?

$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></div></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="top-nav__item">
                <a href="<?=$arItem["LINK"]?>" class="top-nav__link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item1<?endif?>">
                    <? if ($arItem["LINK"] == "/catalog/"): ?>
                        <span uk-icon="menu"></span>
                        <span class="top-nav__parent"><?=$arItem["TEXT"]?></span>
                    <? else: ?>
                        <?=$arItem["TEXT"]?>
                    <? endif; ?>
                </a>
                <div class="top-nav__childs">
                    <div class="uk-container">
                            <ul class="main-nav__list main-nav__list--lvl1">
		<?else:?>
			<li class="main-nav__item main-nav__item--lvl1"><a href="<?=$arItem["LINK"]?>" class="main-nav__link parent<?if ($arItem["SELECTED"]):?> item-selected<?endif?>"><?=$arItem["TEXT"]?></a>
            <div class="main-nav__childs"><div class="uk-container"><ul class="main-nav__list main-nav__list--lvl2">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="top-nav__item"><a href="<?=$arItem["LINK"]?>" class="top-nav__link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="main-nav__item main-nav__item--lvl2">
                    <a class="main-nav__link" href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><?=$arItem["TEXT"]?></a>
                    <div class="main-nav__childs">
                        <ul class="main-nav__list main-nav__list--lvl3">
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">Жареный</a>
                            </li>
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">Бланшированный</a>
                            </li>
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">В скорлупе</a>
                            </li>
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">Дробленый</a>
                            </li>
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">Сырой</a>
                            </li>
                            <li class="main-nav__item main-nav__item--lvl3">
                                <a href="#" class="main-nav__link">Лепестки</a>
                            </li>
                        </ul>
                        <div class="main-nav__image uk-cover-container uk-height-medium">
                            <img src="/local/templates/semushka/images/menu-test.png" alt="" uk-cover>
                        </div>
                    </div>
                </li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item3<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></div></div></li>", ($previousLevel-1) );?>
<?endif?>

<li class="top-nav__item">
    <div class="top-nav__link lang-selector">
        <span class="lang-selector__text">RU</span>
        <div uk-dropdown="pos: bottom-justify" class="lang-selector__dropdown">
            <ul class="uk-nav uk-dropdown-nav lang-selector__dropdown-nav">
                <li class="uk-active"><a href="#" class="top-nav__link">RU</a></li>
                <li><a href="#" class="top-nav__link">EN</a></li>
            </ul>
        </div>
    </div>
</li>

</ul>
<?endif?>