<div class="block-text-image hasPattern noHover<?php if (exist($args["imageIsRight"])) echo " reverse"; ?><?php if (exist($args["color"])) echo  " " . $args["color"]; ?>">
    <?php if (exist($args["image"])) : ?>
        <picture>
            <source srcset="<?= $args["image"]; ?>" type="image/jpg">
            <source srcset="<?= $args["image-webp"]; ?>" type="image/webp">
            <img src="<?= $args["image"]; ?>" alt="" loading="lazy" width="580" height="500">
            <?php if (exist($args["pattern"])) :
                include('patterns/photo-' . $args["pattern"] . ".php");
            endif; ?>
        </picture>
    <?php endif; ?>
    <div class="content">
        <?php if (exist($args["title"])) : ?>
            <h3 class="tl3"><?= $args["title"]; ?></h3>
        <?php endif; ?>
        <?php if (exist($args["text"])) : ?>
            <div class="text">
                <?= nl2br($args["text"]); ?>
            </div>
        <?php endif; ?>
        <?php if (exist($args["ctaLabel"])) : ?>
            <?php
            $type = "link-secondary";
            if ($args["ctaIsInternal"] == 1) $type = "btn-secondary";
            ?>
            <a href="<?= $args["ctaUrl"]; ?>" class="cta <?= $type ?>" <?php if ($args["ctaIsInternal"] == 0) echo 'target="_blank"'; ?>>
                <?= $args["ctaLabel"]; ?>
            </a>
        <?php endif; ?>
    </div>
</div>