$(function() {
  (function quantityProducts() {
    $(".js-product-quantity").each(function() {
        let $quantityNum = $(this).find($(".js-product-quantity__num"));
        let $quantityArrowMinus = $(this).find($(".js-product-quantity__arrow-minus"));
        let $quantityArrowPlus = $(this).find($(".js-product-quantity__arrow-plus"));

        $quantityArrowMinus.click(function() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 1);
            }
        });
        $quantityArrowPlus.click(function() {
            $quantityNum.val(+$quantityNum.val() + 1);
        });

    })
  })();
});
