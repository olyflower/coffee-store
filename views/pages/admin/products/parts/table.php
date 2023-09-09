<table class="table table-striped-columns">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $number => $product): ?>
        <tr>
            <td><?= $number + 1 ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['quantity'] ?></td>
            <td>
                <form action="/" method="POST">
                    <input type="hidden" name="type" value="remove_product"/>
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <div class="btn-group">
                        <button type="submit" class="btn"><i class="fa-regular fa-trash-can"></i></button>
                        <a href="/admin/products/edit/<?= $product['id'] ?>" class="btn"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                    </div>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
