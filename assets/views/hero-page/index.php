<header class="container-fluid grid" data-view="hero-page">
    <?php if (exist($args['title'])) : ?>
        <h1 class="tl1"><?= $args['title']; ?></h1>
    <?php endif; ?>

    <?php if (exist($args['intro'])) : ?>
        <div class="intro">
            <?= nl2br($args['intro']); ?>
        </div>
    <?php endif; ?>
</header>