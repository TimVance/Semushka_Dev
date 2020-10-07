<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="top-nav__list">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
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
                        <div class="main-nav">
                            <ul class="main-nav__list main-nav__list--lvl1">
		<?else:?>
			<li class="main-nav__item main-nav__item--lvl1"><a href="<?=$arItem["LINK"]?>" class="main-nav__link parent<?if ($arItem["SELECTED"]):?> item-selected<?endif?>"><?=$arItem["TEXT"]?></a>
            <div class="main-nav__childs"><ul class="main-nav__list main-nav__list--lvl2">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="top-nav__item"><a href="<?=$arItem["LINK"]?>" class="top-nav__link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="main-nav__item main-nav__item--lvl2"><a class="main-nav__link" href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="test2"><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item3<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="test3"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</div></div></div></ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>