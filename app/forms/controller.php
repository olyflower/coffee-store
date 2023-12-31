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
    'update_user_info' => updateUserInfo(updateUserInfoParams()),
    'edit_content' => editContent(),
    'new_subscriber' => addSubscriber(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)),
    'send_mail' => sendMail(sendMailParams()),
    default => redirectBack()
};
