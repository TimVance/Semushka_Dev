$(function () {
    (function quantityProducts() {
        $(".js-product-quantity").each(function () {
            let $quantityNum = $(this).find($(".js-product-quantity__num"));
            let $quantityArrowMinus = $(this).find($(".js-product-quantity__arrow-minus"));
            let $quantityArrowPlus = $(this).find($(".js-product-quantity__arrow-plus"));

            $quantityArrowMinus.click(function () {
                if ($quantityNum.val() > 1) {
                    $quantityNum.val(+$quantityNum.val() - 1);
                }
            });
            $quantityArrowPlus.click(function () {
                $quantityNum.val(+$quantityNum.val() + 1);
            });

        })
    })();
    if ($("body").hasClass("admin")) {
        let height = $("#bx-panel").height();
        $("#header-search").css("top", height);
    }
});

BX.addCustomEvent('onAjaxSuccess', function () {
    $('#callback_inputmask').mask("+7 999 999-99-99");
});

// Cart add

// Detail
window.onload = () => {
    let button_detail = document.querySelector('.js-add-detail-product');
    if (button_detail) {
        button_detail.addEventListener('click', (event) => {
            let parent = button_detail.closest('.js-product-detail__item');
            let product_id = parseInt(parent.getAttribute('data-product-id'));
            let quantity = parseInt(parent.querySelector('.js-product-quantity__num').value);
            if (!sendRequest(product_id, quantity)) alert('Произошла ошибка');
        });
    }

    let buttons_section = document.querySelectorAll('.js-add-section-product');
    if (buttons_section) {
        buttons_section.forEach(function (el) {
            el.addEventListener('click', (event) => {
                let parent = el.closest('.card__footer');
                let product_id = parseInt(parent.getAttribute('data-product-id'));
                let quantity = parseInt(parent.querySelector('.js-product-quantity__num').value);
                if (!sendRequest(product_id, quantity)) alert('Произошла ошибка');
            });
        });
    }
}
// Detail

function sendRequest(product_id, quantity) {
    let params = {
        'product_id': product_id,
        'quantity': quantity,
        'action': 'add'
    };
    let data = new FormData();
    data.append('data', JSON.stringify(params));

    fetch("/local/templates/semushka/ajax/addProduct.php",
        {
            method: "post",
            body: data
        })
        .then(response => {
            if (response.status !== 200) {
                return Promise.reject();
            }
            return response.text();
        })
        .then(function (data) {
            let cart = document.querySelector("#desktop-cart-wrapper");
            cart.innerHTML = data;
        })
        .catch(() => console.log('Ошибка'))
    return true;
}

// Cart add

// Cart Del
function removeItemCart(id) {
    if (confirm("Удалить товар из корзины?")) {
        let params = {
            'product_id': id,
            'action': 'delete'
        };
        let data = new FormData();
        data.append('data', JSON.stringify(params));

        fetch("/local/templates/semushka/ajax/addProduct.php",
            {
                method: "post",
                body: data
            })
            .then(response => {
                if (response.status !== 200) {
                    return Promise.reject();
                }
                return response.text();
            })
            .then(function (data) {
                let cart = document.querySelector("#desktop-cart-wrapper");
                cart.innerHTML = data;
            })
            .catch(() => console.log('Ошибка'))
        return true;
    }
}
// Cart Del

// Cart clear
function clearCart() {
    if (confirm("Очистить корзину?")) {
        let params = {
            'action': 'clear'
        };
        let data = new FormData();
        data.append('data', JSON.stringify(params));

        fetch("/local/templates/semushka/ajax/addProduct.php",
            {
                method: "post",
                body: data
            })
            .then(response => {
                if (response.status !== 200) {
                    return Promise.reject();
                }
                return response.text();
            })
            .then(function (data) {
                let cart = document.querySelector("#desktop-cart-wrapper");
                cart.innerHTML = data;
            })
            .catch(() => console.log('Ошибка'))
        return true;
    }
}
// Cart clear