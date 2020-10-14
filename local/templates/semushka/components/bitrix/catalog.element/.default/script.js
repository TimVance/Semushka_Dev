'use strict';

window.onload = () => {
    var button = document.querySelector('.js-add-detail-product');
    button.addEventListener('click', (event) => {
        let parent = button.closest('.js-product-detail__item');
        let product_id = parseInt(parent.getAttribute('data-product-id'));
        let quantity = parseInt(parent.querySelector('.js-product-quantity__num').value);
        if (!sendRequest(product_id, quantity)) alert('Произошла ошибка');
    });
}

function sendRequest(product_id, quantity) {
    let params = {
        'product_id': product_id,
        'quantity': quantity
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
            return response.json();
        })
        .then(function (data) {
            JSON.stringify(data);
            if (data.count !== null) {
                let badge = document.querySelector(".uk-badge");
                badge.textContent = data.count;
            }
        })
        .catch(() => console.log('Ошибка'))
    return true;
}