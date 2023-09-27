<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

    <div class="container" style="padding-top: 10em;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center"><h3>Block: "<?= $block['name'] ?>"</h3></div>
                    <form action="/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="edit_content">
                        <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                        <input type="hidden" name="block_name" value="<?= $block['name'] ?>">

                        <div class="card-body">
                            <?php if (!empty($fields['title'])): ?>
                                <div class="mb-3">
                                    <label for="gallery_title">Gallery Title</label>
                                    <input type="text"
                                           class="form-control"
                                           id="gallery_title"
                                           name="gallery_title"
                                           value="<?= $fields['title'] ?>"
                                    >
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($fields['description'])): ?>
                                <div class="mb-3">
                                    <label for="gallery_description">Gallery description</label>
                                    <input type="text"
                                           class="form-control"
                                           id="gallery_description"
                                           name="gallery_description"
                                           value="<?= $fields['description'] ?>"
                                    >
                                </div>
                            <?php endif; ?>
                        </div>


                        <div class="image-wrapper">
                            <?php if (!empty($fields['images']) && is_array($fields['images'])): ?>
                                <div class="mb-3">
                                    <label>Gallery Images</label>
                                    <div class="row">
                                        <?php foreach ($fields['images'] as $image): ?>
                                            <div class="row mb-3 d-flex align-items-center justify-content-center image-item">

                                                <div class="col-md-3">
                                                    <p><?= $image ?></p>
                                                    <img src="<?= IMAGES_URI . "/$image" ?>" alt="coffee" class="img-fluid">
                                                </div>

<!--                                                <div class="col-3 text-center">-->
<!--                                                    <a href="#" class="btn remove-image"><i-->
<!--                                                                class="fa-regular fa-trash-can"></i></button></a>-->
<!--                                                </div>-->
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="images">Upload new image</label>
                            <input type="file" class="form-control" name="images[]"/>
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
