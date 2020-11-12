<div class="card-team">
    <picture>
        <source srcset="<?= $args["image-webp"]; ?>" type="image/webp">
        <source srcset="<?= $args["image"]; ?>" type="image/jpg">
        <img src="<?= $args["image"]; ?>" loading="lazy" width="410" height="546">
    </picture>
    <?php if ($args["function"]) : ?>
        <div class="function"><?= $args["function"]; ?></div>
    <?php endif; ?>
    <h3 class="tl3"><?= $args["name"]; ?></h3>
    <?php if ($args["desc"]) : ?>
        <div class="desc">
            <?= $args["desc"]; ?>
        </div>
    <?php endif; ?>
    <div class="footer">
        <?php if ($args["email"]) : ?>
            <a href="mailto: <?= $args["email"]; ?>" class="picto dark mail"></a>
        <?php endif; ?>
        <?php if ($args["linkedin"]) : ?>
            <a href="<?= $args["linkedin"]; ?>" class="picto dark linkedin"></a>
        <?php endif; ?>
    </div>
</div>