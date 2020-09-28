<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<footer class="footer">
    <div class="uk-container">
        <div class="footer__list uk-grid-small" uk-grid>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "Y"
                ), false, Array('HIDE_ICONS' => 'Y')
            );?>
            <div class="footer__item uk-width-1-4@m">
                <div class="">
                    <a href="tel:+ 74991103044" class="footer__item-title footer__item-title--phone">+ 7 (499) 110 3044</a>
                    <div class="footer__item-body">
                        <ul class="footer__item-list">
                            <li><p>1115093, Москва, Большая Серпуховская ул., дом 32, строение 1</p></li>
                            <li><p>с 10:00 до 18:00</p></li>
                            <li><p><a href="mailto:info@semushka-m.ru" class="link">info@semushka-m.ru</a></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__info" uk-grid>
            <div class="footer__info-item uk-width-1-4@m">
                <div class="logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип: Семушка - back to nature" title="Логотип: Семушка - back to nature">
                </div>
            </div>
            <div class="footer__info-item uk-width-1-4@m">
                <a href="/policy/">Политика конфиденциальности</a>
                <div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "local/templates/semushka/include/parts/copyright.php"
                        )
                    );?>
                </div>
            </div>
            <div class="footer__info-item uk-width-1-2@m uk-visible@m">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/map-test.png" alt="1115093, Москва, Большая Серпуховская ул., дом 32, строение 1">
            </div>
        </div>
        <div class="copyright">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "local/templates/semushka/include/parts/requisites.php"
                )
            );?>
        </div>
    </div>
</footer>
<div id="receiver-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title uk-h3 uk-text-center">Закажите звонок и получите  бесплатную консультацию</h2>
        <form class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Ваш номер телефона</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="tel" placeholder="+7 000 000-00-00">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Комментарий</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea"></textarea>
                </div>
            </div>
            <div class="uk-margin-medium">
                <button class="btn uk-width" type="button"><span>Купить</span></button>
            </div>
            <div class="uk-margin uk-text-center">
                <button class="btn btn--link" type="button"><span>Зарегистрироваться</span></button>
            </div>
        </form>
        <button class="uk-modal-close-outside" type="button" uk-close></button>
    </div>
</div>
<div id="user-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title uk-text-center">Вход</h2>
        <form class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Ваш email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" placeholder="info@semushka.com">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Пароль</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="text" >
                </div>
            </div>
            <div class="uk-margin-medium">
                <button class="btn uk-width" type="button"><span>Купить</span></button>
            </div>
            <div class="uk-margin uk-text-center">
                <button class="btn btn--link" type="button"><span>Зарегистрироваться</span></button>
            </div>
        </form>
        <button class="uk-modal-close-outside" type="button" uk-close></button>
    </div>
</div>