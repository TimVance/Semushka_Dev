<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');

?><div class="services-list__item">
<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>
	<div class="bx-basket-block">
		<i class="fa fa-user"></i>
		<?if ($USER->IsAuthorized()):
			$name = trim($USER->GetFullName());
			if (! $name)
				$name = trim($USER->GetLogin());
			if (mb_strlen($name) > 15)
				$name = mb_substr($name, 0, 12).'...';
			?>
			<a href="<?=$arParams['PATH_TO_PROFILE']?>"><?=htmlspecialcharsbx($name)?></a>
			&nbsp;
			<a href="?logout=yes"><?=GetMessage('TSB1_LOGOUT')?></a>
		<?else:
			$arParamsToDelete = array(
				"login",
				"login_form",
				"logout",
				"register",
				"forgot_password",
				"change_password",
				"confirm_registration",
				"confirm_code",
				"confirm_user_id",
				"logout_butt",
				"auth_service_id",
				"clear_cache",
				"backurl",
			);

			$currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
			if ($arParams['AJAX'] == 'N')
			{
				?><script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
			}
			else
			{
				$currentUrl = '#CURRENT_URL#';
			}

			$pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
			$pathToAuthorize .= (mb_stripos($pathToAuthorize, '?') === false ? '?' : '&');
			$pathToAuthorize .= 'login=yes&backurl='.$currentUrl;
			?>
			<a href="<?=$pathToAuthorize?>">
				<?=GetMessage('TSB1_LOGIN')?>
			</a>
			<?
			if ($arParams['SHOW_REGISTRATION'] === 'Y')
			{
				$pathToRegister = $arParams['PATH_TO_REGISTER'];
				$pathToRegister .= (mb_stripos($pathToRegister, '?') === false ? '?' : '&');
				$pathToRegister .= 'register=yes&backurl='.$currentUrl;
				?>
				<a href="<?=$pathToRegister?>">
					<?=GetMessage('TSB1_REGISTER')?>
				</a>
				<?
			}
			?>
		<?endif?>
	</div>
<?endif?>
	<div class="bx-basket-block"><?
		if (!$arResult["DISABLE_USE_BASKET"])
		{
			?>
			<a uk-toggle="target: .basket-desktop" class="services-list__icon services-list__icon--cart" href="<?= $arParams['PATH_TO_BASKET'] ?>"></a><?
		}

		if (!$compositeStub)
		{
			if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] >= 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
			{
				echo '<span class="uk-badge">'.(!empty($arResult['NUM_PRODUCTS_CUSTOM']) ? $arResult['NUM_PRODUCTS_CUSTOM'] : 0).'</span>';
			}
		}
        ?>
	</div>
    <div class="basket basket-desktop" uk-dropdown="mode: hover">
        <div class="basket__dropdown">
            <div class="basket__container">
                <div class="basket__body">
                    <div class="basket__list">
                        <div class="basket__item">
                            <div class="basket-card">
                                <div class="basket-card__image">
                                    <div class="basket-card__img">
                                        <img src="./src/images/card-test.png" alt="">
                                    </div>
                                </div>
                                <div class="basket-card__body">
                                    <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                    <div class="basket-card__footer">
                                        <div class="basket-card__info">
                                            <div class="basket-card__price">2000 Р</div>
                                            <div class="basket-card__discount">3000 Р</div>
                                            <div class="basket-card__count">x 4</div>
                                            <div class="basket-card__total">8000 Р</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basket-card__delete"><span uk-icon="close"></span></div>
                            </div>
                        </div>
                        <div class="basket__item">
                            <div class="basket-card">
                                <div class="basket-card__image">
                                    <div class="basket-card__img">
                                        <img src="./src/images/card-test.png" alt="">
                                    </div>
                                </div>
                                <div class="basket-card__body">
                                    <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                    <div class="basket-card__footer">
                                        <div class="basket-card__info">
                                            <div class="basket-card__price">2000 Р</div>
                                            <div class="basket-card__discount">3000 Р</div>
                                            <div class="basket-card__count">x 4</div>
                                            <div class="basket-card__total">8000 Р</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basket-card__delete"><span uk-icon="close"></span></div>
                            </div>
                        </div>
                        <div class="basket__item">
                            <div class="basket-card">
                                <div class="basket-card__image">
                                    <div class="basket-card__img">
                                        <img src="./src/images/card-test.png" alt="">
                                    </div>
                                </div>
                                <div class="basket-card__body">
                                    <div class="basket-card__title">Фундук 9/11ММ Сорт Атаататата</div>
                                    <div class="basket-card__footer">
                                        <div class="basket-card__info">
                                            <div class="basket-card__price">2000 Р</div>
                                            <div class="basket-card__discount">3000 Р</div>
                                            <div class="basket-card__count">x 4</div>
                                            <div class="basket-card__total">8000 Р</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basket-card__delete"><span uk-icon="close"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basket__footer">
                    <div class="basket__price">
                        <div class="basket__price-total">
                            <span>Итого</span> 23456789 Р
                        </div>
                        <div class="basket__price-discount">3000 Р</div>
                    </div>
                    <div class="basket__tools">
                        <div class="basket__delete">
                            <button class="btn btn--link">
                                <span uk-icon="close"></span>
                                <span>очистить корзину</span>
                            </button>
                        </div>
                        <div class="basket__add">
                            <button class="btn">В корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>