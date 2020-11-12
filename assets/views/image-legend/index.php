<div class="container grid" data-view="image-legend">
    <figure>
        <?php if (!empty($args['image'])) : ?>
            <img src="<?= $args['image']; ?>" alt="" loading="lazy" width="<?= $args['width']; ?>" height="<?= $args['height']; ?>">
        <?php endif; ?>
        <?php if (!empty($args['legend'])) : ?>
            <figcaption><?= $args['legend']; ?></figcaption>
        <?php endif; ?>
    </figure>
</div>