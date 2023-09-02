<?php //dd($content['about']) ?>
<section id="about">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-sm-12 col-md-6 about-video justify-content-center align-items-center d-flex">
                <?php if ($content['about']['video']): ?>
                    <a class="play-btn" href="<?= $content['about']['video']['source'] ?>"><img
                                src="<?= IMAGES_URI ?>/<?= $content['about']['video']['img'] ?>" alt="play"></a>
                <?php endif ?>
            </div>
            <div class="col-sm-12 col-md-6 about-content">
                <h6 class="about-title"><?= $content['about']['text']['title'] ?? '' ?></h6>
                <h2 class="about-main-title"><?= $content['about']['text']['subtitle'] ?? '' ?></h2>
                <p class="about-text"><?= $content['about']['text']['quote'] ?? '' ?></p>
                <p class="about-main-text"><?= $content['about']['text']['description'] ?? '' ?></p>
                <img src="<?= IMAGES_URI ?>/<?= $content['about']['text']['img'] ?>" alt="signature">
            </div>
        </div>
    </div>
</section>
