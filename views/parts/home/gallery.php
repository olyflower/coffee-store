<section id="gallery">
    <div class="container">
        <div class="row title-row">
            <div class="col-12">
                <h1><?= $content['gallery']['title'] ?? '' ?></h1>
                <p><?= $content['gallery']['description'] ?? '' ?></p>
            </div>
        </div>

        <div class="row row-cols-2">
            <?php foreach ($content['gallery']['images'] as $image): ?>
                <div class="col-12 col-md-4">
                    <img class="img-fluid w-100 pb-3"
                         src="<?= IMAGES_URI ?>/<?= $image ?>"
                         alt="coffee">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
