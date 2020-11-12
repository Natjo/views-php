<header data-view="hero-home">

    <div class="content container grid">
        <h1 class="tl0"><?= $args["title"]; ?></h1>
        <?php if ($args["cta_is_internal"] == 1) : ?>
            <a href="<?= $args["cta_url"]; ?>" class="cta btn-secondary">
                <?= $args["cta_label"]; ?>
            </a>
        <?php else : ?>
            <a href="<?= $args["cta_url"]; ?>" target="_blank" class="cta btn-secondary">
                <?= $args["cta_label"]; ?>
            </a>
        <?php endif; ?>
    </div>

    <picture>
        <source srcset="<?php echo $args["background-medium"]; ?>.webp" media="(max-width: 767px)" type="image/webp">
        <source srcset="<?php echo $args["background-large"]; ?>.webp" media="(max-width: 1399px)" type="image/webp">
        <source srcset="<?php echo $args["background-wide"]; ?>.webp" media="(min-width: 1400px)" type="image/webp">
        <source srcset="<?php echo $args["background-medium"]; ?>.jpg" media="(max-width: 767px)" type="image/jpeg">
        <source srcset="<?php echo $args["background-large"]; ?>.jpg" media="(max-width: 1399px)" type="image/jpeg">
        <source srcset="<?php echo $args["background-wide"]; ?>.jpg" media="(min-width: 1400px)" type="image/jpeg">
        <img src="<?php echo $args["background-medium"]; ?>.jpg" alt="" class="" >
    </picture>

    <svg data-module="bgAnimate" class="corner-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 960 650" style="enable-background:new 0 0 960 650;" xml:space="preserve" preserveAspectRatio="xMaxYMax meet">
        <path class="st0" d="M1290.9,208.3v257.5c-252.9,0-458.8,205.8-458.8,458.8l0,0H574.6C574.6,529.6,895.9,208.3,1290.9,208.3 L1290.9,208.3z" />
    </svg>

    <svg data-module="bgAnimate" class="corner-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 960 520" style="enable-background:new 0 0 960 520;" xml:space="preserve" preserveAspectRatio="xMinYMin meet">
        <path d="M341.8-19.4C207.9,133.5,63,227.3-43.3,283.3" />
    </svg>
</header>