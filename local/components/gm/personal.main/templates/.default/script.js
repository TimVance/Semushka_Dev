'use strict';

window.onload = () => {
    let buttons = document.querySelectorAll(".personal-order-row .price");
    let items = ".personal-order-basket-items";
    let row = ".personal-order-row";
    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            button.closest(row).querySelector(items).classList.toggle("show");
        });
    });
};