<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

<div class="container" style="padding-top: 10em;">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-header text-center"><h3>Edit Banner</h3></div>
                <form action="/" method="POST">
                    <input type="hidden" name="type" value="edit_content">
                    <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                    <input type="hidden" name="block_name" value="<?= $block['name'] ?>">

                    <div class="card-body">
                        <?php if (!empty($fields['title'])): ?>
                            <div class="mb-3">
                                <label for="banner_title">Banner Title</label>
                                <input type="text"
                                       class="form-control"
                                       id="banner_title"
                                       name="banner_title"
                                       value="<?= $fields['title'] ?>"
                                >
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($fields['subtitle'])): ?>
                            <div class="mb-3">
                                <label for="banner_subtitle">Banner Subtitle</label>
                                <input type="text"
                                       class="form-control"
                                       id="banner_subtitle"
                                       name="banner_subtitle"
                                       value="<?= $fields['subtitle'] ?>"
                                >
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($fields['link']['href'])): ?>
                            <div class="mb-3">
                                <label for="banner_link">Banner Link</label>
                                <input type="text"
                                       class="form-control"
                                       id="banner_link"
                                       name="banner_link"
                                       value="<?= $fields['link']['href'] ?>"
                                >
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($fields['link']['text'])): ?>
                            <div class="mb-3">
                                <label for="banner_link_text">Banner Link Text</label>
                                <input type="text"
                                       class="form-control"
                                       id="banner_link_text"
                                       name="banner_link_text"
                                       value="<?= $fields['link']['text'] ?>"
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
