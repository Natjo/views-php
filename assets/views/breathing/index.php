<section data-view="breathing">
    <div class="content container">
        <?php if (exist($args['text'])) : ?>
            <div class="text"><?= $args['text']; ?></div>
        <?php endif; ?>
        <?php if (exist($args['signature'])) : ?>
            <div class="signature"><?= $args['signature']; ?></div>
        <?php endif; ?>
    </div>

    <picture>
        <?php if (exist($args['image-desktop'])) : ?>
            <source srcset="<?= $args['image-mobile-webp']; ?>" media="(max-width: 599px)" type="image/webp">
            <source srcset="<?= $args['image-desktop-webp']; ?>" media="(min-width: 600px)" type="image/webp">
            <source srcset="<?= $args['image-mobile']; ?>" media="(max-width: 599px)" type="image/jpg">
            <source srcset="<?= $args['image-desktop']; ?>" media="(min-width: 600px)" type="image/jpg">
            <img src="<?= $args['image-desktop']; ?>" alt="" loading="lazy" width="100" height="100">
        <?php endif; ?>
    </picture>
</section>