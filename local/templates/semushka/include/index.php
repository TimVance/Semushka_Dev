<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="page-wrapper">
    <div class="page-top" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/bg-test.png');">
        <div class="uk-container">
            <div class="page-top__btn" type="button" uk-toggle="target: +">
                <svg width="101" height="101" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50.5" cy="50.5" r="35.5" fill="white"/>
                    <circle opacity="0.2" cx="50.5" cy="50.5" r="50.0049" stroke="white" stroke-width="0.990196"/>
                    <path d="M57.5 49.634C58.1667 50.0189 58.1667 50.9811 57.5 51.366L47.75 56.9952C47.0833 57.3801 46.25 56.899 46.25 56.1292L46.25 44.8708C46.25 44.101 47.0833 43.6199 47.75 44.0048L57.5 49.634Z" fill="#B39467"/>
                </svg>
                <span>Смотреть видео</span>
            </div>
            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true; autoplay: false" hidden></iframe>
        </div>
    </div>

    <main class="content">
        <section class="uk-section">
            <div class="uk-container">
                <h1 class="uk-h2">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/semushka/include/parts/about_title.php"
                        )
                    );?>
                </h1>
                <div class="uk-column-1-2@m">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/semushka/include/parts/about.php"
                        )
                    );?>
                </div>
                <p class="uk-margin-medium-top@m"><a href="/about/" class="link link--arrow">Читать далее</a></p>
            </div>
        </section>
        <section class="uk-section">
            <div class="uk-container">
                <h2 class="uk-h2">Продукция</h2>
                <div class="card-list uk-child-width-1-3@l uk-child-width-1-2 uk-grid-column-small" uk-grid>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
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
                    </div>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test-1.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__footer-item">
                                        <form class="card__tools">
                                            <label for="6-select" class="select card__select">
                                                <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="6-select">
                                                <div class="select__list">
                                                    <input class="select__toggle" type="radio" name="list" value="first_value" id="6-list[0]">
                                                    <label class="select__label" for="6-list[0]">1кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="second_value" id="6-list[1]">
                                                    <label class="select__label" for="6-list[1]">2кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="third_value" id="6-list[2]">
                                                    <label class="select__label" for="6-list[2]">3кг</label>
                                                    <span class="select__placeholder">Вес</span>
                                                </div>
                                            </label>
                                            <div class="card__count">
                                                <div class="count-tools js-product-quantity">
                                                    <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                    <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="6-quantity" />
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
                    </div>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test-2.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__footer-item">
                                        <form class="card__tools">
                                            <label for="4-select" class="select card__select">
                                                <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="4-select">
                                                <div class="select__list">
                                                    <input class="select__toggle" type="radio" name="list" value="first_value" id="4-list[0]">
                                                    <label class="select__label" for="4-list[0]">1кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="second_value" id="4-list[1]">
                                                    <label class="select__label" for="4-list[1]">2кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="third_value" id="4-list[2]">
                                                    <label class="select__label" for="4-list[2]">3кг</label>
                                                    <span class="select__placeholder">Вес</span>
                                                </div>
                                            </label>
                                            <div class="card__count">
                                                <div class="count-tools js-product-quantity">
                                                    <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                    <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="4-quantity" />
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
                    </div>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test-3.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__footer-item">
                                        <form class="card__tools">
                                            <label for="3-select" class="select card__select">
                                                <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="3-select">
                                                <div class="select__list">
                                                    <input class="select__toggle" type="radio" name="list" value="first_value" id="3-list[0]">
                                                    <label class="select__label" for="3-list[0]">1кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="second_value" id="3-list[1]">
                                                    <label class="select__label" for="3-list[1]">2кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="third_value" id="3-list[2]">
                                                    <label class="select__label" for="3-list[2]">3кг</label>
                                                    <span class="select__placeholder">Вес</span>
                                                </div>
                                            </label>
                                            <div class="card__count">
                                                <div class="count-tools js-product-quantity">
                                                    <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                    <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="3-quantity" />
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
                    </div>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test-4.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__footer-item">
                                        <form class="card__tools">
                                            <label for="2-select" class="select card__select">
                                                <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="2-select">
                                                <div class="select__list">
                                                    <input class="select__toggle" type="radio" name="list" value="first_value" id="2-list[0]">
                                                    <label class="select__label" for="2-list[0]">1кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="second_value" id="2-list[1]">
                                                    <label class="select__label" for="2-list[1]">2кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="third_value" id="2-list[2]">
                                                    <label class="select__label" for="2-list[2]">3кг</label>
                                                    <span class="select__placeholder">Вес</span>
                                                </div>
                                            </label>
                                            <div class="card__count">
                                                <div class="count-tools js-product-quantity">
                                                    <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                    <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="2-quantity" />
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
                    </div>
                    <div class="card-list__item">
                        <article class="card">
                            <div class="card__image">
                                <div class="card__img">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/images/card-test-5.png" alt="">
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__title"><a href="#">Фундук 9/11ММ</a></div>
                                <div class="card__subtitle">(сорт aтабаба)</div>
                                <div class="card__info">
                                    <div class="card__info-row">
                                        <div class="card__info-title">Размер</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Фундук 9/11ММ">9/11</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Срок хранения</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Срок хранения 6 мес">6 мес</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Страна</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Страна Азербайджан">Азербайджан</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">Упаковка</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка Упаковка Руб/кг">Руб/кг</div>
                                    </div>
                                    <div class="card__info-row">
                                        <div class="card__info-title">25 кг, мешок</div>
                                        <div class="card__info-note" uk-tooltip="title: Подсказка 25 кг, мешок 1670">1670</div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__footer-item">
                                        <form class="card__tools">
                                            <label for="1-select" class="select card__select">
                                                <input class="select__toggle select__toggle--select" type="radio" name="list" value="not_changed" id="1-select">
                                                <div class="select__list">
                                                    <input class="select__toggle" type="radio" name="list" value="first_value" id="1-list[0]">
                                                    <label class="select__label" for="1-list[0]">1кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="second_value" id="1-list[1]">
                                                    <label class="select__label" for="1-list[1]">2кг</label>
                                                    <input class="select__toggle" type="radio" name="list" value="third_value" id="1-list[2]">
                                                    <label class="select__label" for="1-list[2]">3кг</label>
                                                    <span class="select__placeholder">Вес</span>
                                                </div>
                                            </label>
                                            <div class="card__count">
                                                <div class="count-tools js-product-quantity">
                                                    <a class="count-tools__arrow-minus js-product-quantity__arrow-minus"> — </a>
                                                    <input class="count-tools__num js-product-quantity__num input-num" type="number" value="1" id="1-quantity" />
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
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>