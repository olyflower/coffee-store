<?php

require PARTS_DIR . 'header.php';
$cart = getCartItems();
if (isAuth()) {
    ?>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <h2 class="text-center p-3 mt-4 mb-4">Cart</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cart as $number => $item):
                                if (!is_array($item)) continue;
                                $parentNumber = $number + 1;
                                ?>
                                <tr>
                                    <td><?= $parentNumber ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td>$<?= $item['price'] ?></td>
                                    <td><?= $item['quantity'] ?></td>
                                    <td>$<?= $item['total'] ?></td>
                                    <td>
                                        <form action="/" method="POST">
                                            <input type="hidden" name="type" value="remove_cart_item">
                                            <input type="hidden" name="product_key" value="<?= $number ?>">
                                            <button type="submit" class="btn"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php if (!empty($item['additions'])): ?>
                                <?php foreach ($item['additions'] as $subNumber => $addition): ?>
                                    <tr>
                                        <td><?= $parentNumber . '.' . ($subNumber + 1) ?></td>
                                        <td><?= $addition['name'] ?></td>
                                        <td>$<?= $addition['price'] ?></td>
                                        <td><?= $addition['quantity'] ?></td>
                                        <td>$<?= $addition['total'] ?></td>
                                        <td>
                                            <form action="/" method="POST">
                                                <input type="hidden" name="type" value="remove_cart_item">
                                                <input type="hidden" name="product_key" value="<?= $subNumber ?>">
                                                <input type="hidden" name="parent_key" value="<?= $number ?>">
                                                <button type="submit" class="btn"><i
                                                            class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                        <h4 class="text-end">Total: $<?= $cart['total'] ?? 0 ?></h4>
                        <div class="text-center w-100">
                            <form action="/" method="POST">
                                <input type="hidden" name="type" value="create_order"/>
                                <button type="submit" class="btn button-create">Create order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    ?>
    <div class="container cart-message">
        <div class="row">
            <div class="col-12">
                <h4>You're not logged in</h4>
                <p>Please sign in to view your cart</p>
                <a class="btn button-create" href="/login">Log in</a>
            </div>
        </div>
    </div>
    <?php
}

require PARTS_DIR . 'footer.php';
