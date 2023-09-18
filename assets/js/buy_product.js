const selectors = {
    catalogItem: '.catalog-item',
    modal: {
        form: '#buy-form',
        productId: '#productIdField',
        product: {
            name: '.product-name',
            price: '.product-price',
            quantity: '.product-quantity .quantity-field',
            total: '.product-total'
        },
        additions: {
            item: '.additional-item',
            toggle: '.additional-toggle',
            price: '.additional-price .price',
            qty: '.additional-qty',
            total: '.additional-total'
        }
    },
    finalPrice: '#buy-form .final .total'
}

$(document).on('click', selectors.catalogItem, function() {
    const itemData = $(this).data()
    console.log('data', itemData)
    const $form = $(selectors.modal.form)
    const $qtyProductField = $form.find(selectors.modal.product.quantity)

    $qtyProductField.val(1)
    $qtyProductField.attr('max', itemData.qty)

    $form.find(selectors.modal.productId).val(itemData.id)
    $form.find(selectors.modal.product.name).text(itemData.name)
    $form.find(selectors.modal.product.price).html(renderPrice(itemData.price))
    $form.find(selectors.modal.product.total).html(renderPrice(itemData.price))
    calculateTotalPrice()
})

$(document).on('change', `${selectors.modal.form} ${selectors.modal.product.quantity}`, function () {
    const $qtyField = $(this);
    const price = parseFloat($(`${selectors.modal.product.price} .price`).text());
    const maxQty = parseFloat($qtyField.attr('max'));
    let qty = parseInt($qtyField.val(), 10);

    if (qty > maxQty) {
        qty = maxQty;
        $qtyField.val(qty);
    }

    const total = qty * price;
    $(selectors.modal.product.total).html(renderPrice(total));
    calculateTotalPrice();
});


$(document).on('change', selectors.modal.additions.toggle, function() {
    const $parent = $(this).parents(selectors.modal.additions.item)
    const $qtyField = $parent.find(selectors.modal.additions.qty)
    const $total = $parent.find(selectors.modal.additions.total)
    const price = parseFloat($parent.find(selectors.modal.additions.price).text())

    if ($(this).prop('checked')) {
        $qtyField.prop('disabled', false).val(1)
        $total.html(renderPrice(price))
    } else {
        $qtyField.prop('disabled', true).val(null)
        $total.html('')
    }
    calculateTotalPrice()
})

$(document).on('change', selectors.modal.additions.qty, function() {
    const $parent = $(this).parents(selectors.modal.additions.item);
    const $total = $parent.find(selectors.modal.additions.total);
    const price = parseFloat($parent.find(selectors.modal.additions.price).text());
    const maxQty = parseFloat($parent.find(selectors.modal.additions.qty).attr('max'));
    let qty = parseInt($(this).val(), 10);

    if (qty > maxQty) {
        $(this).val(maxQty);
        qty = maxQty;
    }

    const totalPrice = price * qty;
    $total.html(renderPrice(totalPrice));
    calculateTotalPrice();
});

function renderPrice(price) {
    return `$<span class="price">${price.toFixed(2)}</span>`
}

function calculateTotalPrice() {
    let productTotal = parseFloat($(`${selectors.modal.product.total} .price`).text())
    const additions = $(`${selectors.modal.additions.toggle}:checked`)

    if (additions.length > 0) {
        additions.toArray().map(function(el) {
            const $parent = $(el).parents(selectors.modal.additions.item)
            const total = parseFloat($parent.find(`${selectors.modal.additions.total} .price`).text())
            productTotal += total
        })
    }

    $(selectors.finalPrice).html(renderPrice(productTotal))
}
