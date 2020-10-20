<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl1">

<?

$previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($arItem["DEPTH_LEVEL"] == 1) continue; ?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <? continue; ?>
		<?else:?>
			<li class="mobile-nav__item mobile-nav__item--lvl1"><a href="<?=$arItem["LINK"]?>" class="uk-accordion-title mobile-nav__title parent<?if ($arItem["SELECTED"]):?> active<?endif?>"><?=$arItem["TEXT"]?></a>
            <div class="uk-accordion-content mobile-nav__body"><ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl2">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="top-nav__item"><a href="<?=$arItem["LINK"]?>" class="top-nav__link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="mobile-nav__item mobile-nav__item--lvl2">
                    <a class="uk-accordion-title mobile-nav__title" href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a>
                    <div class="uk-accordion-content mobile-nav__body">
                        <ul uk-accordion="multiple: true" class="mobile-nav__list mobile-nav__list--lvl3">
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">Жареный</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">Бланшированный</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">В скорлупе</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">Дробленый</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">Сырой</a>
                            </li>
                            <li class="mobile-nav__item mobile-nav__item--lvl3">
                                <a href="#" class="mobile-nav__title">Лепестки</a>
                            </li>
                        </ul>
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
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<ul class="mobile-nav__list mobile-nav__list--lvl1 uk-margin-medium">
    <? $i = 0; ?>
    <?foreach($arResult as $arItem):?>
        <? $i++; ?>
        <? if ($i == 1) continue; ?>
        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="mobile-nav__item mobile-nav__item--lvl1">
                <a class="mobile-nav__title" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>
    <?endforeach?>
</ul>

<?endif?>