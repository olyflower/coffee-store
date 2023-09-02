<section id="gallery">
    <div class="container">
        <div class="row title-row">
            <div class="col-12">
                <h1><?= $content['gallery']['title'] ?? '' ?></h1>
                <p><?= $content['gallery']['description'] ?? '' ?></p>
            </div>
        </div>

        <div class="row row-cols-2">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12"><img class="img-fluid w-100 pb-3"
                                             src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][0] ?>"
                                             alt="coffee"></div>
                    <div class="col-12"><img class="img-fluid w-100 pb-3"
                                             src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][1] ?>"
                                             alt="coffee"></div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="col-12"><img class="img-fluid w-100 pb-4"
                                         src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][2] ?>" alt="coffee">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6 pb-3"><img class="img-fluid w-100"
                                                                   src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][3] ?>"
                                                                   alt="coffee">
                            </div>
                            <div class="col-12 col-md-6 pb-3"><img class="img-fluid w-100"
                                                                   src="<?= IMAGES_URI ?>/<?= $content['gallery']['images'][4] ?>"
                                                                   alt="coffee">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
