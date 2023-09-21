<?php

match(getRequestType()) {
    'registration' => createUserHandler(createUserParams()),
    'login' => authUserHandler(authUserParams()),
    'create_product' => createProduct(createProductParams()),
    'remove_product' => removeProduct(removeProductParam()),
    'remove_cart_item' => removeCartItem(removeCartItemParam()),
    'create_order' => createOrder(),
    'edit_product' => editProduct(editProductParams()),
    'add_to_cart' => addToCart(addToCartParams()),
    default => redirectBack()
};
