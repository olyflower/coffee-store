<?php

match(getRequestType()) {
    'registration' => createUserHandler(createUserParams()),
    'login' => authUserHandler(authUserParams()),
    'create_product' => '',
    default => redirectBack()
};
