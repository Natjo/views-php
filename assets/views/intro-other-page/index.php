<section data-view="intro-other-page" style="background-color: <?= $args["color"]; ?>">
    <div class="container grid">
        <div class="content">
            <?php if (exist($args["title"])) : ?>
                <h2 class="tl2"><?= $args["title"]; ?></h2>
            <?php endif; ?>
            <?php if (exist($args["text"])) : ?>
                <div class="text"><?= $args["text"]; ?></div>
            <?php endif; ?>
            <?php if (exist($args["cta-label"])) : ?>
                <a href="<?= $args["page"]; ?>" class="btn-secondary <?= $args["contrast"]; ?>"><?= $args["cta-label"]; ?></a>
            <?php endif; ?>
        </div>
        
    </div>

    <picture>
        <source srcset="<?= $args["image-mobile-webp"]; ?>" media="(max-width: 767px)" type="image/webp">
        <source srcset="<?= $args["image-desktop-webp"]; ?>" media="(min-width: 768px)" type="image/webp">
        <source srcset="<?= $args["image-mobile"]; ?>" media="(max-width: 767px)" type="image/jpg">
        <source srcset="<?= $args["image-desktop"]; ?>" media="(min-width: 768px)" type="image/jpg">
        <img src="<?= $args["image-desktop"]; ?>" loading="lazy" alt="" width="721" height="900" />
    </picture>
</section>