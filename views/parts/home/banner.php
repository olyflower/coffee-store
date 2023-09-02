<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 col-xl-6 banner-content">
                <h3 class="banner-title"><?= $content['banner']['title'] ?? '' ?></h3>
                <p class="banner-text"><?= $content['banner']['subtitle'] ?? '' ?></p>
                <?php if ($content['banner']['link']): ?>
                    <a href="<?= $content['banner']['link']['href'] ?>" class="btn btn-primary"><?= $content['banner']['link']['text'] ?></a>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
