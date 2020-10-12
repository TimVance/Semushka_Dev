<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/

$this->setFrameMode(true);?>

<section class="uk-section">
    <div class="uk-position-relative uk-visible-toggle uk-dark slider" tabindex="-1" uk-slider>
        <div class="slider__header">
            <div class="slider__title">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/templates/semushka/include/parts/detail_similar_title.php"
                    )
                );?>
            </div>
            <div class="uk-slidenav-container slider__container">
                <a href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>
        <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-grid slider__list">
            <?foreach ($arResult["ITEMS"] as $item):?>
                <li class="slider__item">
                    <article class="card">
                        <div class="card__image">
                            <div class="card__img">
                                <a href="<?=$item["DETAIL_PAGE_URL"]?>">
                                    <img src="<?=(!empty($item["PREVIEW_PICTURE"]) ? $item["PREVIEW_PICTURE"]["SRC"] : $this->GetFolder().'/images/line-empty.png')?>" alt="<?=$item["NAME"]?>">
                                </a>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="card__title"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a></div>
                            <? if (!empty($item["PROPERTIES"]["type"]["VALUE"])): ?>
                                <div class="card__subtitle"><?=$item["PROPERTIES"]["type"]["VALUE"]?></div>
                            <? endif; ?>
                            <? if (!empty($item["DISPLAY_PROPERTIES"])): ?>
                                <div class="card__info">
                                    <? foreach ($item["DISPLAY_PROPERTIES"] as $prop): ?>
                                        <div class="card__info-row">
                                            <div class="card__info-title"><?=$prop["NAME"]?></div>
                                            <div class="card__info-note" uk-tooltip="title: Подсказка <?=$prop["VALUE"]?>"><?=$prop["VALUE"]?></div>
                                        </div>
                                    <? endforeach; ?>
                                </div>
                            <? endif; ?>
                            <div class="card__footer">
                                <div class="card__footer-item">
                                    <form class="card__tools">
                                        <label for="select" class="select card__select">
                                            <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="select">
                                            <div class="select__list">
                                                <input class="select__toggle" type="radio" name="list" value="first_value" id="list[0]">
                                                <label class="select__label" for="list[0]">1кг</label>
                                                <input class="select__toggle" type="radio" name="list" value="second_value" id="list[1]">
                                                <label class="select__label" for="list[1]">2кг</label>
                                                <input class="select__toggle" type="radio" name="list" value="third_value" id="list[2]">
                                                <label class="select__label" for="list[2]">3кг</label>
                                                <span class="select__placeholder">Вес</span>
                                            </div>
                                        </label>
                                        <div class="card__count">
                                            <div class="count-tools js-product-quantity">
                                                <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="quantity" />
                                                <a class="count-tools__arrow-plus js-product-quantity__arrow-plus"> + </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card__footer-item">
                                    <button class="btn" type="button"><span>Купить</span></button>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
</section>