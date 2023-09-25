<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

<div class="container" style="padding-top: 10em;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-header text-center"><h3>Edit Catalog</h3></div>
                <form action="/" method="POST">
                    <input type="hidden" name="type" value="edit_content">
                    <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                    <input type="hidden" name="block_name" value="<?= $block['name'] ?>">

                    <div class="card-body">
                        <?php if (!empty($fields['title'])): ?>
                            <div class="mb-3">
                                <label for="catalog_title">Catalog Title</label>
                                <input type="text"
                                       class="form-control"
                                       id="catalog_title"
                                       name="catalog_title"
                                       value="<?= $fields['title'] ?>"
                                >
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($fields['description'])): ?>
                            <div class="mb-3">
                                <label for="catalog_description">Catalog description</label>
                                <input type="text"
                                       class="form-control"
                                       id="catalog_description"
                                       name="catalog_description"
                                       value="<?= $fields['description'] ?>"
                                >
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="card-footer d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn button-create">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once ADMIN_PARTS_DIR . '/footer.php';
?>
