<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

<div class="container" style="padding-top: 10em;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-header text-center"><h3>Edit About</h3></div>
                <form action="/" method="POST">
                    <input type="hidden" name="type" value="edit_content">
                    <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                    <input type="hidden" name="block_name" value="<?= $block['name'] ?>">





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

